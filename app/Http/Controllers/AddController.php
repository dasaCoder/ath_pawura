<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Image;
use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Integer;


class AddController extends Controller
{
    /*public function validator(array $data){
        return Validator::make($data, [
           'title' => 'required',
           'price' => 'required|number',
           'description' => 'required|min:20',
           'type' => 'required'
        ]);
    }

    protected function create(array $data){
        return Advertisement::create([
            'title' => $data['title'],
            'price' => $data['price'],
            'description' => $data['description'],
            'type' => $data['type']
        ]);
    }*/

    public function add(Request $request){
        $addver = new Advertisement();
        $addver->title = $request->title;
        $addver->price = (double)$request->price;
        $addver->description = $request->description;
        $addver->type = $request->type;
        $addver->user_id = auth()->user()->id;
        $addver->save();

        // echo ($request->image1);


        for($x = 0; $x < 2; $x++){
            $filename = 'add_'.$addver->id. '_image_'.($x+1).'.jpg';
            $key = 'image'.($x+1);

            $image1 = $request->file($key);
            Storage::disk('local')->put($filename,File::get($image1));

            $image = new Image();
            $image->image_path = $filename;
            $image->advertisement_id = $addver->id;
            $image->save();
        }



    }

    public function getAll(){
        $adds = Advertisement::paginate(10);
        return view('home')->with('adds',$adds);
    }

    public function getUsersOnes(){
        $adds = Advertisement::where('user_id', auth()->user()->id)->get();
        return view('profile')->with('adds',$adds);
    }

    public function getById($id){
        $add = Advertisement::findOrFail($id);
       return view('advertisement')->with('add',$add);
    }

    public function search(Request $request){
        $phase = '%'.$request->phase.'%';
        $adds = Advertisement::where('title','like',$phase)->get();
        return view('search')->with('adds',$adds);
    }
}
