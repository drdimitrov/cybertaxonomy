<?php

namespace App\Http\Controllers;

use App\Picture;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $pictures = Picture::latest()->get();

        return view('gallery.index', compact('pictures'));
    }
}
