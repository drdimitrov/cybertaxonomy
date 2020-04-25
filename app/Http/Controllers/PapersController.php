<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class PapersController extends Controller
{
    public function index()
    {
        $papers = Article::orderBy('year', 'desc')->get();

        return view('papers.index', compact('papers'));

    }
}
