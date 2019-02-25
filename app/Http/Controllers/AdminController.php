<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function paper()
    {
        return view('admin.paper');
    }

    public function picture()
    {
        return view('admin.picture');

    }

    public function pictureSave(Request $request)
    {

        $file = app('uploadcare')->getFile($request->img_file);

        dd($file);
    }

    public function news()
    {
        return view('admin.news');

    }
}
