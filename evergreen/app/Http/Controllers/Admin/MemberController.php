<?php

namespace App\Http\Controllers\Admin;

use App\MaritalStatus;
use App\MembershipForm;
use App\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = MembershipForm::latest()->paginate(10);
        $maritalStas = MaritalStatus::all();
        $status = Status::all();
        return view('admin.members.index', compact('members', 'maritalStas', 'status'));
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
            'Status' => 'required',
            'Address' => 'required',
            'DateOfBirth' => 'required',
            'Email' => 'required|email|unique:membershipform',
            'FullName' => 'required',
            'MobileNumber' => 'required|numeric|digits:11|unique:membershipform',
            'Denomination' => 'required',
            'MaritalStatus' => 'required',
            'Passport' => 'required'
        ]);

        $membership = new MembershipForm();
        $fileName = $request->file('Passport');


        if($request->hasFile('Passport') && $request->file('Passport')->isValid()) {

            if($fileSize = $fileName->getSize() > 1000000 ) {
                session()->flash('success', 'File Size Too Large');
                return back();
            }
            $fileNewName = time() . '.' . $fileName->getClientOriginalExtension();
            $fileName->move('uploads/passports', $fileNewName);

            $membership->StatusId = $request->Status;
            $membership->Address = $request->Address;
            $membership->DateOfBirth = $request->DateOfBirth;
            $membership->Email = $request->Email;
            $membership->FullName = $request->FullName;
            $membership->MobileNumber = $request->MobileNumber;
            $membership->Denomination = $request->Denomination;
            $membership->MaritalStatusId = $request->MaritalStatus;
            $membership->Passport = 'uploads/passports/' . $fileNewName;

            $membership->save();

        }

        $name = $request->FullName;
        $email = $request->Email;
        $status = $request->Status;

        $content = ['Name' => $name, 'Email' => $email, 'Status' => $status ];
        $view = 'emails.welcome';

        Mail::send($view, $content, function($arg) use ($email){
            $arg->to($email)
                ->subject('Membership Registration');
            $arg->from('evergreen50plus@gmail.com', 'Ever Green 50 Plus');
        });

        session()->flash('success', 'Membership Registration was Successful');

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
            'Status' => 'required',
            'Address' => 'required',
            'DateOfBirth' => 'required',
            'Email' => 'required|email',
            'FullName' => 'required',
            'MobileNumber' => 'required|numeric|digits:11',
            'Denomination' => 'required',
            'MaritalStatus' => 'required',

        ]);

        $membership = MembershipForm::findOrFail($id);
        $fileName = $request->file('Passport');


        if($request->hasFile('Passport') && $request->file('Passport')->isValid()) {

            if($fileSize = $fileName->getSize() > 1000000 ) {
                session()->flash('success', 'File Size Too Large');
                return back();
            }
            $fileNewName = time() . '.' . $fileName->getClientOriginalExtension();
            $fileName->move('uploads/passports', $fileNewName);

            $membership->Passport = 'uploads/passports/' . $fileNewName;

            $membership->save();
        }

//        if($membership->isDirty()) {

            $membership->StatusId = $request->Status;
            $membership->Address = $request->Address;
            $membership->DateOfBirth = $request->DateOfBirth;
            $membership->Email = $request->Email;
            $membership->FullName = $request->FullName;
            $membership->MobileNumber = $request->MobileNumber;
            $membership->Denomination = $request->Denomination;

            $membership->save();
//        }

        session()->flash('success', 'Membership Registration was Successful');

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
        $member = MembershipForm::findOrFail($id);
        $member->delete();

        session()->flash('success',  ' Membership was Deleted Successfully');

        return back();
    }
}
