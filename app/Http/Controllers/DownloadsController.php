<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Assignment;
use App\Course;
use App\Submission;


class DownloadsController extends Controller
{
        #Tutor Download
    public function assignmentDownload($tutCourse_id, $ass_id,$sub_id){
        $tutor = Auth()->user();
        $tutCourse = $tutor->course()->find($tutCourse_id);
        $assignment = $tutCourse->assignment()->find($ass_id);
        $submission = $assignment->submission()->find($sub_id);
        $file_name = $submission->solution;
        $pathToFile = public_path('/storage/submissions/'.$file_name);
        return response()->download($pathToFile);
      
    }

        #Admin Download
    public function assignmentDownloadAdmin($course_id, $ass_id,$sub_id){
        $course = Course::find($course_id);
        $assignment = $course->assignment()->find($ass_id);
        $submission = $assignment->submission()->find($sub_id);
        $file_name = $submission->solution;
        $pathToFile = public_path('/storage/submissions/'.$file_name);
        return response()->download($pathToFile);
      
    }
}
