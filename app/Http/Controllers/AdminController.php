<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appoinment;

class AdminController extends Controller
{
    public function upload(Request $request)
    {




        $doctor = new doctor;
        $doctor->Doctor = $request->name;
        $doctor->Phone = $request->number;
        $doctor->Speciality = $request->speciality;
        $doctor->Room = $request->room;


        $doctor->save();
        return redirect()->back()->with('message', 'Doctor added successfully');
    }

    public function showappointment()
    {
        $data = appoinment::all();
        return view('admin.showappointment', compact('data'));
    }

    public function approved($id)
    {
        $data = appoinment::find($id);
        $data->status = "approved";
        $data->save();
        return redirect()->back();
    }
    public function cancel($id)
    {
        $data = appoinment::find($id);
        $data->status = "canceled";
        $data->save();
        return redirect()->back();
    }
}
