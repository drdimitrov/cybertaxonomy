<?php

namespace App\Http\Controllers;

use App\Mail\WebsiteNotification;
use App\News;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $news = News::latest()
            ->limit(5)
            ->get();

        return view('main.index', compact('news'));
    }

    public function contact()
    {
        return view('main.contact');

    }

    public function postContact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'question' => 'required',
        ]);

        \Mail::to(['info@nortiena.com', 'atypus@abv.bg'])->send(new WebsiteNotification(
            $request->email,
            $request->name,
            $request->subject,
            $request->question
        ));

        return redirect()->back()->with(
            'msg',
            'Your message has been sent. Thank you for contacting us!'
        );
    }

    public function team()
    {
        return view('main.team');
    }
}
