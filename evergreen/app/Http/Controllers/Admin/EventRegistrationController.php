<?php

namespace App\Http\Controllers\Admin;

use App\Designate;
use App\EventRegistration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class EventRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventRegs = EventRegistration::with('designate')->latest()->paginate(10);
        $designates = Designate::all();

        return view('admin.event-registrations.index', compact('eventRegs', 'designates'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //        return $request->all();

        $request->validate([
            'Email' => 'required|email|unique:eventregistration',
            'FullName' => 'required',
            'MobileNumber' => 'required|numeric|digits:11|unique:eventregistration',
            'Designate' => 'required'


        ]);

        $eventReg = new EventRegistration();

        $eventReg->MobileNumber = $request->MobileNumber;
        $eventReg->Email = $request->Email;
        $eventReg->FullName = $request->FullName;
        $eventReg->DesignateId = $request->Designate;

        $eventReg->save();


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



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Email' => 'required|email',
            'FullName' => 'required',
            'MobileNumber' => 'required|numeric|digits:11',
            'Designate' => 'required'

        ]);

        $eventReg =  EventRegistration::findOrFail($id);

        $eventReg->MobileNumber = $request->MobileNumber;
        $eventReg->Email = $request->Email;
        $eventReg->FullName = $request->FullName;
        $eventReg->DesignateId = $request->Designate;

        $eventReg->save();

        session()->flash('success', 'Event Registration was Updated Successfully');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventReg = EventRegistration::findOrFail($id);
        $eventReg->delete();

        session()->flash('success', 'Registration  was Deleted Successfully');
        return back();
    }
}
