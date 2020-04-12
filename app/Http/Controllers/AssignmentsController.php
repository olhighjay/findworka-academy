<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Assignment;
use App\Course;
use App\Submission;

class AssignmentsController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'IsTutor', 'Active']);
    }


    #ASSIGNMENT MANAGEMENT BY TUTOR
    public function createAssignmentTut()
    {
        $user = Auth()->user();
        $courses = $user->course()->get();
        return view('tutor.assignments.create')->with('courses', $courses);
    }

    public function storeAssignmentTut(Request $request)
    {
        $this->validate($request,[
            'title'=> 'required',
            'body'=> 'required',
            'course'=>'required'
        ]);

        $assignment = new Assignment();
        $assignment->title = $request['title'];
        $assignment->body = $request['body'];
        $assignment->course_id = $request['course'];
        $assignment->user_id = Auth()->user()->id;
        $assignment->save();
        return redirect('/dashboard')->with('success', 'Assigment created successfully');
    }

    public function assignmentCourseTut()
    {
        $user = Auth()->user();
        $tutCourses = $user->course()->get();
        return view('tutor.assignments.ass-courses')->with('tutCourses', $tutCourses);
    }

    public function showCourseAssTut($id)
    {
        $tutor = Auth()->user();
        $tutCourse = $tutor->course()->find($id);
        $assignments = $tutCourse->assignment()->get();
        
        return view('tutor.assignments.course-assignments')->with('assignments', $assignments)->with('tutCourse', $tutCourse);
    }

    public function editAssignmentTut($course_id, $ass_id)
    {
        $user = Auth()->user();
        $course = $user->course()->find($course_id);
        $assignment = $course->assignment()->find($ass_id);
        return view('tutor.assignments.edit')->with('assignment', $assignment)->with('course', $course);
    }

    public function updateAssignmentTut(Request $request, $course_id, $id)
    {
        $user = Auth()->user();
        $course = $user->course()->find($course_id);

        $this->validate($request,[
            'title'=> 'required',
            'body'=> 'required',
            'course'=>'nullable'
        ]);

        $assignment = Assignment::find($id);
        $assignment->title = $request['title'];
        $assignment->body = $request['body'];
        $assignment->save();
        return redirect("ass-courses/$course->id/ass-list")->with('success', 'Assigment updated successfully');
    }

    public function getSubmissionsTut($tutCourse_id, $ass_id)
    {
        $tutor = Auth()->user();
        $tutCourse = $tutor->course()->find($tutCourse_id);
        $assignment = $tutCourse->assignment()->find($ass_id);
        $submissions = $assignment->submission()->get();
        // dd($submission->user->firstname);
        return view('tutor.assignments.submissions')->with('tutCourse', $tutCourse)->with('submissions', $submissions)->with('assignment', $assignment);
    }

    public function editSubmissionGrade($tutCourse_id, $ass_id,$sub_id)
    {
        $tutor = Auth()->user();
        $tutCourse = $tutor->course()->find($tutCourse_id);
        $assignment = $tutCourse->assignment()->find($ass_id);
        $submission = $assignment->submission()->find($sub_id);
        return view('tutor.assignments.grade-submission')->with('tutCourse', $tutCourse)->with('submission', $submission)->with('assignment', $assignment);
    }

    public function updateSubmissionGrade(Request $request, $id)
    {
        $user = Auth()->user();
            #Validate profile picture
        $this->validate($request,[
            'title'=> 'nullable',
            'body'=> 'nullable',
            'grade'=> 'required',
            'remarks'=> 'required',
            'user_id'=> 'nullable',
            'assignment_id'=> 'nullable',
            'solution'=>'nullable'
        ]);


        $submission = Submission::find($id);
        $submission->body = $request['body'];
        $submission->grade = $request['grade'];
        $submission->remarks = $request['remarks'];
        $submission->save();

        #SHOULD BE REDIRECTED TO SCORES!!
        return redirect('/ass-courses')->with('success','Assignment has been successfully graded');
    }
    
    public function SubmissionScoresTut($tutCourse_id, $ass_id)
    {
        $tutor = Auth()->user();
        $tutCourse = $tutor->course()->find($tutCourse_id);
        $assignment = $tutCourse->assignment()->find($ass_id);
        $submissions = $assignment->submission()->get();
        // dd($submission->user->firstname);
        return view('tutor.assignments.submission-grades')->with('tutCourse', $tutCourse)->with('submissions', $submissions)->with('assignment', $assignment);
    }




}
