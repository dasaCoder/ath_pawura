<?php

namespace App\Http\Controllers;

use App\Advertisement;
use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;


class AddController extends Controller
{
    public function validator(array $data){
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
    }

    public function add(Request $request){
        $addver = new Advertisement();
        $addver->title = $request->title;
        $addver->price = $request->price;
        $addver->description = $request->description;
        $addver->type = $request->type;
        $addver->user_id = auth()->user()->id;
        $addver->save();
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
}
