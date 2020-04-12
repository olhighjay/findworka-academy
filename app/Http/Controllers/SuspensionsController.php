<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class SuspensionsController extends Controller
{
    #Students Suspension
    public function suspendStudent($id)
    {
        $user = User::find($id);
        $user->suspension_id = 2;
        $user->save();
        return redirect("/admin/student/$id")->with('success', 'Student has been Suspended');
}


    public function unsuspendStudent(Request $request, $id)
    {
        $user = User::find($id);
        $user->suspension_id = 1;
        $user->save();
        return redirect("/admin/student/$id")->with('success', 'Student has been Unsuspended');
    }


    #Tutors Suspension
    public function suspendTutor($id)
    {
        $user = User::find($id);
        $user->suspension_id = 2;
        $user->save();
        return redirect("/admin/tutors/$id")->with('success', 'Tutor has been Suspended');
}


    public function unsuspendTutor(Request $request, $id)
    {
        $user = User::find($id);
        $user->suspension_id = 1;
        $user->save();
        return redirect("/admin/tutors/$id")->with('success', 'Tutor has been Unsuspended');
    }




}
