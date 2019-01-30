<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\EventRegistration;
use App\MembershipForm;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function loginAdmin()
    {
        return view('admin.login');
    }

    public function dashboard()
    {
        $totalMembers = MembershipForm::count();
        $totalEventReg = EventRegistration::count();
        return view('admin.dashboard', compact('totalEventReg', 'totalMembers'));
    }

    public function logout()
    {
        session()->invalidate();

        return redirect('/admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::latest()->get();

        return view('admin.index', compact('admins'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'FullName' => 'required',
            'Email' => 'required|unique:users',
            'Password' => 'required'
        ];

        $request->validate($rules);

        $admin = new User();
        $admin->name = $request->FullName;
        $admin->email = $request->Email;
        $admin->password = bcrypt($request->Password);
        $admin->status = $request->status == '1' ? 1 : 0;

        $admin->save();

        session()->flash('success', 'Admin Registration was Successful');

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
        $rules = [
            'FullName' => 'required',
            'Email' => 'required',

        ];

        $request->validate($rules);

        $admin = User::findOrFail($id);

        if($request->has('Password')) {
            $admin->password = bcrypt($request->Password);
            $admin->save();
        }
        $admin->name = $request->FullName;
        $admin->email = $request->Email;
        $admin->status = $request->status == '1' ? 1 : 0;

        $admin->save();

        session()->flash('success', 'Admin  was Updated Successfully');

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
        $admin = User::findOrFail($id);
        $admin->delete();

        session()->flash('success', 'Admin  was Deleted Successfully');
        return back();
    }


}
