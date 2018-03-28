<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function getImage($image_path){
        $image = Storage::disk('local')->get($image_path);
        return new Response($image , 200);
    }
}
