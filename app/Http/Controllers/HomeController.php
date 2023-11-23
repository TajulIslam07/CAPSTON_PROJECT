<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\Doctor;
use App\Models\Appoinment;
use App\Models\BloodDoner;
use Illuminate\Support\Facades\Http;


class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $doctor = doctor::all();
                return view('user.home', compact('doctor'));
            }
            if(Auth::user()->usertype == '1'){
                return view('admin.home');
            }
            if(Auth::user()->usertype == '2'){

                return view('doctor.home');
            }
        } else{
            return $this->redirect()->back();
        }

    }



    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $doctor=doctor::all();
            return view('user.home',compact('doctor'));
        }

    }

    public function appoinmenta(Request $request)
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
    public function makeappoinment(){
        $doctor=doctor::all();

        return view('user.make_appoinment',compact('doctor'));
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
    public function doctor(){
        $doctor=doctor::all();
        return view('user.view_doctor',compact('doctor'));
    }

    public function cancelappoinment($id){
       $data=appoinment::find($id);
       $data->delete();
       return redirect()->back();

    }
    public function bloodbank(){

            $data=BloodDoner::all();

            return view('user.bloodbank',compact('data'));



    }
    public function blooddonate(){
        return view('user.donate');
    }
    public function form(Request $request){
        $data=new blooddoner;
        $data->name=$request->name;
        $data->number=$request->number;
        $data->bloodGroup=$request->group;
        $data->address=$request->address;
        $data->message=$request->message;
        $data->save();
        return redirect('/home')->with('message','Doner Added');

    }
    public function srch(){
        if (request('search')) {
            $search=request('search');
            $data = BloodDoner::where('bloodGroup',$search)->get();

            return view('user.bloodbank',compact('data'));
        } else {
            $data=BloodDoner::all();

            return view('user.bloodbank',compact('data'));

        }

    }

}
