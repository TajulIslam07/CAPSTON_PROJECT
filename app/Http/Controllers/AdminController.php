<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminController extends Controller
{
 public function upload(Request $request){

     $doctor=new doctor;

     $doctor->Doctor=$request->name;
     $doctor->Phone=$request->number;
     $doctor->Speciality=$request->speciality;
     $doctor->Room=$request->room;
     $doctor->save();
     return redirect()->back()->with('message','Doctor added successfully');
 }
}
