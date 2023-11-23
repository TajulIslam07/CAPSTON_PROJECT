<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appoinment;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function upload(Request $request)
    {

        $doctor = new user;
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->password = Hash::make($request->password);
        $doctor->usertype = '2';
        $data=new doctor;
        $data->Doctor=$request->name;
        $data->Phone=$request->number;
        $data->Speciality=$request->speciality;
        $data->Room=$request->room;


        $doctor->save();
        $data->save();
        if ($doctor && $data){
            return redirect()->back()->with('message', 'Doctor added successfully');
        }else{
            return redirect()->back()->with('message', 'Check Your  Credential');
        }
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
        // return redirect()->with('message','Successfully Updated');
        return redirect('/all_doctor');
    }
}
