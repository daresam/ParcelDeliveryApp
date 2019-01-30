<?php

namespace App\Http\Controllers;

use App\Designate;
use App\EventRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EventRegistrationController extends Controller
{

    public function create()
    {
        $active = '';
        $designates = Designate::all();
        return view('pages.eventregistration', compact('designates', 'active'));
    }


    public function store(Request $request)
    {
//        return $request->all();
        $request->validate([
            'Designate' => 'required',
            'Email' => 'required|email|unique:eventregistration',
            'FullName' => 'required',
            'MobileNumber' => '|numeric|digits:11|unique:eventregistration',
        ]);

        $eventreg= new EventRegistration();

        $eventreg->DesignateId = $request->Designate;
        $eventreg->Email = $request->Email;
        $eventreg->FullName = $request->FullName;
        $eventreg->MobileNumber = $request->MobileNumber;
        $eventreg->save();


        $name = $request->FullName;
        $email = $request->Email;

        $content = ['Name' => $name, 'Email' => $email];
        $view = 'emails.eventregistration';

        Mail::send($view, $content, function($arg) use ($email){
            $arg->to($email)
                ->subject('Event Registration');
            $arg->from('evergreen50plus@gmail.com', 'Ever Green 50 Plus');
        });

        session()->flash('success', 'Event Registration was Successful');

        return back();
    }


}
