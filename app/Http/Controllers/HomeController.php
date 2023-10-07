<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\Doctor;
use App\Models\Appoinment;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $doctor = doctor::all();
                return view('user.home', compact('doctor'));
            } else {
                return view('admin.home');
            }
        } else {
            return $this->redirect()->back();
        }
    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $doctor = doctor::all();
            return view('user.home', compact('doctor'));
        }

    }

    public function appoinment(Request $request)
    {
        $data = new appoinment;
        $data->full_name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->doctor = $request->doctor;
        $data->phone = $request->number;
        $data->message = $request->message;
        $data->status = "in progress";
        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('message','Appoinment is successfull,we will contact you soon');


    }

    public function myappoinment(){
        if (Auth::id()){
            $userid=Auth::user()->id;
            $appoint=appoinment::where('user_id',$userid)->get();

            return view('user.myappoinment',compact('appoint'));
        }else{
            return redirect()->back();
        }

    }

    public function cancelappoinment($id){
       $data=appoinment::find($id);
       $data->delete();
       return redirect()->back();

    }
}
