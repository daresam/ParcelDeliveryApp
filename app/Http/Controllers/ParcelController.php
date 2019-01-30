<?php

namespace App\Http\Controllers;

use App\Parcel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ParcelController extends Controller
{
    /**
     * Display a listing of the Parcels.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status =  [
            'Pending',
            'ItemShipped',
            'Delivered'
        ];
        $parcels = Parcel::all();
        return view('parcel', compact( 'parcels', 'status'));
    }



    /**
     * Store a newly created Parcel in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'weight' => 'required|numeric',
            'sent_on' => 'required',
            'delivered_on' => 'required',
            'from_address' => 'required',
            'to_address' => 'required',
        ];
        $request->validate($rules);
        $parcel = new Parcel();
        $parcel->weight = $request->weight;
        $parcel->sent_on = $request->sent_on;
        $parcel->delivered_on = $request->delivered_on;
        $parcel->from_address = $request->from_address;
        $parcel->to_address = $request->to_address;
        $parcel->user_id = Auth::id();
        $parcel->placed_by = Auth::user()->name;

        $parcel->save();

        session()->flash('success', 'Parcel Registration was Successful');

        return back();
    }





    /**
     * Update the specified Parcel in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function changeDestinatioin(Request $request, $id)
    {
        $rules = [
            'to_address' => 'required',
        ];
        $request->validate($rules);

        $parcel = Parcel::findOrFail($id);
        $parcel->to_address = $request->to_address;

        $parcel->save();

        session()->flash('success', 'Destination was Changed Successfully');

        return back();

    }
    /**
     * Set Delivery Status.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deliveryStatus(Request $request, $id)
    {
        $rules = [
            'status' => 'required',
        ];
        $request->validate($rules);

        $parcel = Parcel::findOrFail($id);
        $parcel->status = $request->status;

        $parcel->save();

        session()->flash('success', 'Delivery Status set Successfully');

        return back();

    }

    /**
     * Cancel Order.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cancelOrder($id)
    {
        $user = Parcel::findOrFail($id);
        $user->delete();

        session()->flash('success', 'Order Cancel Successfully');
        return back();
    }
}
