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

    public function alldoctor(){
        $data=doctor::all();
        return view('admin.alldoctor',compact("data"));
    }

    public function delete($id)
    {
        $data = doctor::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function update($id)
    {
        $data = doctor::find($id);
        return view('admin.update_doctor',compact('data'));
    }

    public function edit(Request $request ,$id)
    {
        $doctor = doctor::find($id);
         $doctor->Doctor=$request->name;
         $doctor->Phone=$request->number;
         $doctor->Speciality=$request->speciality;
         $doctor->Room=$request->room;
         /*
          $image=$request->file;
         if($image)
        {$imagename=time().'.'.$image->getClientOriginalExtension();
         $request->file->move('doctorimage',$imagename);
         $doctor->image=$imagename;
         }
         */
         $doctor->save();
         return redirect()->back()->with('message','Successfully Updated');
    }
}
