<?php

namespace App\Http\Controllers;

use App\Advertisement;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function add(Request $request){
        $addver = new Advertisement();
        $addver->title = $request->title;
        $addver->price = $request->price;
        $addver->description = $request->description;
        $addver->type = $request->type;
        $addver->user_id = auth()->user()->id;
        $addver->save();
    }
}
