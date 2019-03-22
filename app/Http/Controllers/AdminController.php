<?php

namespace App\Http\Controllers;

use App\Article;
use App\News;
use App\Picture;
use App\Tag;
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

    public function paperSave(Request $request)
    {
        $this->validate($request, [
            'authors' => 'required',
            'year' => 'required',
            'title' => 'required',
            'journal' => 'required',
        ]);

        if($request->has('pdf')){
            $file = $request->pdf->storeAs('public/articles', $request->pdf->getClientOriginalName());
        }

        $paper = Article::create([
            'authors' => $request->authors,
            'year' => $request->year,
            'title' => $request->title,
            'journal' => $request->journal,
            'link' => $request->pdf->getClientOriginalName(),
        ]);

        if($paper->save()){
            return redirect()->back();
        }
    }

    public function picture()
    {
        return view('admin.picture', [
            'api' =>  app('uploadcare')
        ]);

    }

    public function pictureSave(Request $request)
    {

        $file = app('uploadcare')->getFile($request->img_file);

        $picture = Picture::create([
            'hash' =>  str_random(40),
            'url' => $file->getUrl(),
            'description' => $request->description,
        ]);

        $file->store();

        return redirect()->back();
    }

    public function news()
    {
        $tags = Tag::all();
        $pictures = Picture::latest()
            ->limit(20)
            ->get();

        return view('admin.news', compact('tags', 'pictures'));
    }

    public function newsSave(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'picture' => 'required',
            'tag' => 'required',
        ]);

        $item = News::create([
            'title' => $request->title,
            'content' => $request->content,
            'picture' => $request->picture,
            'tag_id' => $request->tag,
        ]);

        if($item->save()){
            return redirect()->back();
        }
    }
}
