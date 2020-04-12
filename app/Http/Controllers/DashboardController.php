<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Role;
use App\Payment_status;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->suspension->id == 1){
            $roles=Auth::user()->roles()->get();
            //  dd($role->id);
            foreach($roles as $role){
                if($role->id == 3){
                    $student = Auth::user();
                    $studentCourses = $student->course()->get();
                    #To get the last uploaded program for user
                    $stuProgram = $student->program()->latest()->first();
                    $program = $student->program()->latest()->first();
                    $pay = $student->program()->latest()->first()->pivot->payment_status;
                    $payment_statuz = Payment_status::find($pay);
                    return view('student.dashboard')->with('payment_statuz',$payment_statuz)->with('student',$student)->with('studentCourses',$studentCourses)
                    ->with('stuProgram',$stuProgram);
                }
                elseif($role->id==2){
                    $tutor = Auth::user();
                    $tCourses = $tutor->course()->get();
                    return view('tutor.dashboard')->with('tutor',$tutor)->with('tCourses',$tCourses);
                }
                else{
                    return redirect('/');
                }
            }
        }else{
            return view('user-suspended')->with('success', 'Account Suspended');
        }

    }

    public function unauthorized()
    {
        
        return view('unauthorized');
    }

    public function Suspended()
    {
        
        return view('user-suspended');
    }

}
