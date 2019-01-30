<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontEndController extends Controller
{
    public function index()
    {
        $active = 'index';
        return view('pages.index', compact('active'));
    }

    public function about()
    {
        $active = 'about';
        return view('pages.about', compact('active'));
    }

    public function gallery()
    {
        $active = 'gallery';
        return view('pages.gallery', compact('active'));
    }

    public function event()
    {
        $active = 'event';
        return view('pages.event', compact('active'));
    }

    public function contact()
    {
        $active = 'contact';
        return view('pages.contact', compact('active'));
    }
    public function contactUs()
    {
        $rules = [
            'name' => 'required|string|max:50',
            'email' => 'required|string|email|max:200',
            'subject' => 'required|string|max:200',
            'message' => 'required',
        ];
        request()->validate($rules);

        $name = request('name');
        $email = request('email');
        $subject = request('subject');
        $message = request('message');

        $content = ['Name' => $name, 'Email' => $email, 'Subject' => $subject, 'Message' => $message ];
        $view = 'emails.contactUs';

        Mail::send($view, $content, function($arg) use ($email, $subject){
            $arg->to('evergreen50plus@gmail.com')
                ->subject($subject);
            $arg->from($email);
        });

        session()->flash('success', 'Thanks for contacting us. We will get back to you shortly');
        return back();
    }
}
