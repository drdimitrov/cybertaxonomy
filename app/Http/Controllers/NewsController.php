<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with(['image', 'tag'])->latest()->limit(20)->get();

        return view('news.index', compact('news'));
    }
}
