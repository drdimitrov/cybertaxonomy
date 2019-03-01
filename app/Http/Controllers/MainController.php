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
            'subject' => 'required',
            'question' => 'required',
        ]);

        \Mail::to('info@nortiena.com')->send(new WebsiteNotification(
            $request->email,
            $request->name,
            $request->subject,
            $request->question
        ));

        // $data = [
        //     'title'=>'title here',
        //     'Content'=>'simple content'
        // ];
        // \Mail::send('emails.site_notification',$data, function ($message){

        //     $message->to('info@nortiena.com', 'Dragomir Dimitrov')->subject('Welcome!');
        // });

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
