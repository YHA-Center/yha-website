<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotoGalleryController extends Controller
{
    // return all photo 
    public function photoGallery(){
        return view('client.photo-gallery.photogallery');
    }
}
