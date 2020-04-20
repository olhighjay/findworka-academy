<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


use App\Course;
use App\User;
use App\Program;
use App\Payment_status;
use App\Payment;



class StudentsController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'IsStudent', 'Active']);
    }



    public function indexStudentProgram()
    {
        $user = Auth()->user();
        $stuPrograms = $user->program()->get();
        $program = $user->program()->latest()->first();
        $pay = $user->program()->latest()->first()->pivot->payment_status;
        $payment_statuz = Payment_status::find($pay);
        return view('student.programs.list')->with('payment_statuz', $payment_statuz)->with('stuPrograms', $stuPrograms);
    }


    public function indexStudentCourse()
    {
        $user = Auth()->user();
        $stuCourses = $user->course()->get();
        return view('student.courses.list')->with('stuCourses', $stuCourses);
    }


    public function storeProfilePicture(Request $request)
    {
            #Validate profile picture
        $this->validate($request,[
            'profile_picture'=>'image|required|max:1999'
        ]);

            // Handle file upload
            if($request->hasFile('profile_picture')){
                $fileNameWithExt = $request->file('profile_picture')->getClientOriginalName();
                $filename = pathInfo($fileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('profile_picture')->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $filePath = 'images/profile_pictures/'. $fileNameToStore;
                $path = Storage::disk('s3')->put($filePath , fopen($request->file('profile_picture'), 'r+'), 'public');
                $url = url('https://findworkaacad.s3.amazonaws.com/'.$filePath);
            }
    
            #Save profile picture on database
            $user = Auth()->user();
            if($request->hasFile('profile_picture')){
                $user->profile_picture = $url;
            }
            $user->save();

        return redirect('/dashboard')->with('success', 'Profile Picture updated successfully');
    }


    public function updateStudentPassword(Request $request)
    {
            #Validate Form
        $this->validate($request,[
            'old_password'=>'required',
            'password'=>'required|confirmed|min:6',
        ]);

        $user= Auth()->user();
        $hashedPassword = $user->password;
        if (Hash::check($request['old_password'], $hashedPassword)) {
            $user->password = \Hash::make($request['password']);
            $user->save();
            return redirect('/dashboard')->with('success', 'Password updated successfuly');
        } else{
            return redirect('/dashboard')->with('error', 'Password incorrect! Kindly input the correct password');
        }
        // $password = \Hash::make($request['old_password']);
        // dd($password)       ;
        // if($user->password != $password ){
        

    }

}
