<?php

namespace App\Http\Controllers;

use App\Mail\WebsiteNotification;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('main.index');
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
            'question' => 'required',
        ]);

        \Mail::to('dimitrov@nmnhs.com')->send(new WebsiteNotification(
            $request->name,
            'from the website',
            $request->question
        ));
    }

    public function team()
    {
        return view('main.team');
    }
}
