<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Assignment;
use App\Course;
use App\Submission;
use Illuminate\Support\Facades\Storage;


class DownloadsController extends Controller
{
        #Tutor Download
    public function assignmentDownload($tutCourse_id, $ass_id,$sub_id){
        $tutor = Auth()->user();
        $tutCourse = $tutor->course()->find($tutCourse_id);
        $assignment = $tutCourse->assignment()->find($ass_id);
        $submission = $assignment->submission()->find($sub_id);
        $filename = $submission->solution;
        // $pathToFile = public_path('/storage/submissions/'.$file_name);
        return Storage::disk('s3')->download('files/submissions/'. $filename);
      
    }

        #Admin Download
    public function assignmentDownloadAdmin($course_id, $ass_id,$sub_id){
        $course = Course::find($course_id);
        $assignment = $course->assignment()->find($ass_id);
        $submission = $assignment->submission()->find($sub_id);
        $filename = $submission->solution;
        // $pathToFile = public_path('/storage/submissions/'.$file_name);
        return Storage::disk('s3')->download('files/submissions/'. $filename);
      
      
    }
}
