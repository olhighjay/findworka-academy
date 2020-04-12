<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Assignment;
use App\Course;
use App\Submission;
use App\Payment_status;

class SubmissionsController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'IsStudent' , 'Active']);
    }


    public function submissionCourseStu()
    {
        $user = Auth()->user();
        $stuCourses = $user->course()->get();
        $program = $user->program()->latest()->first();
        $pay = $user->program()->latest()->first()->pivot->payment_status;
        $payment_statuz = Payment_status::find($pay);
        return view('student.submission.sub-courses')->with('payment_statuz', $payment_statuz)->with('stuCourses', $stuCourses);
    }

    public function showCourseSubStu($id)
    {
        $student = Auth()->user();
        $stuCourse = $student->course()->find($id);
        $assignments = $stuCourse->assignment()->get();
        
        return view('student.submission.course-submission')->with('assignments', $assignments)->with('stuCourse', $stuCourse);
    }

    public function getSubmitAssignmentStu($id,$ass_id)
    {
        $student = Auth()->user();
        $stuCourse = $student->course()->find($id);
        $assignment = $stuCourse->assignment->find($ass_id);
        // foreach($assignments as $assignment){
        // $ass = $assignment->where('title',$title)->first();
        // }
        $submission = Submission::where('assignment_id', $ass_id )->first();
        // if(isset($submission->assignment_id)){
        //     return "hey!";
        // }
        
        
        return view('student.submission.submit')->with('stuCourse', $stuCourse)->with('submission', $submission)->with('assignment', $assignment);
    }

    public function postSubmitAssignmentStu(Request $request, $ass_id)
    {
        $user = Auth()->user();
            #Validate profile picture
        $this->validate($request,[
            'title'=> 'required',
            'body'=> 'nullable',
            'grade'=> 'nullable',
            'remarks'=> 'nullable',
            'solution'=>'required|max:1999'
        ]);


        if($request->hasFile('solution')){
            $solution = $request['solution'];
            $filename = $solution->getClientOriginalName();
            $solution->storeAs('public/submissions',$filename);      
        }
        $assignment= Assignment::find($ass_id);

        $submission = new Submission;
        $submission->user_id = $user->id;
        $submission->assignment_id = $assignment->id;
        $submission->title = $request['title'];
        $submission->body = $request['body'];
        $submission->grade = 0;
        $submission->remarks = 'Yet to be graded';
        $submission->solution = $filename;
        $submission->save();

        #SHOULD BE REDIRECTED TO SCORES!!
        return redirect('/dashboard')->with('success', 'Your assignment has been submitted successfully');

    }

    public function submissionScores($id)
    {
        if(Auth::check()){
        $student = Auth()->user();
        }
        $stuCourse = $student->course()->find($id);
        $assignments = $stuCourse->assignment()->get();
        // $submissions = $student->submission()->get();
        foreach($assignments as $assignment){
            $submissions[]= $assignment->submission->where('user_id', $student->id)->first();
        }
        // dd($submissions);
        if(!isset($submissions)){
            return view('student.submission.no-score')->with('stuCourse', $stuCourse);
        }else{
            return view('student.submission.sub-scores')->with('submissions', $submissions)->with('stuCourse', $stuCourse);
    }
    }

    
   



}
