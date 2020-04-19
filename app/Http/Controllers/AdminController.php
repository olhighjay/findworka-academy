<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Admin;
use App\Gender;
use App\Role;
use App\User;
use App\Course;
use App\Program;
use App\Payment;
use App\Payment_status;
use App\Suspension;
use App\Post;
use App\Image;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function logoutAdmin(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/admin/login');
    }
    public function index()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.admin-home')->with('admin',$admin);
    }

    public function editSelfAdmin()
    {
        $admin = Auth::user();
        $genders= Gender::all();
        return view('admin.edit')->with('genders',$genders)->with('admin',$admin);
    }

    public function updateSelfAdmin(Request $request)
    {
        $this->validate($request, 
        [
            'firstname'=> 'required',
            'lastname'=> 'nullable',
            'email'=> 'required',
            'password'=> 'nullable',
            'gender'=> 'required',
            'profile_picture'=>'image|nullable|max:4999'
        ]);

             // Handle file upload
    if($request->hasFile('profile_picture')){
        // Get filename with extension
        $fileNameWithExt = $request->file('profile_picture')->getClientOriginalName();
        $filename = pathInfo($fileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('profile_picture')->getClientOriginalExtension();
        $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        $path = $request->file('profile_picture')->storeAs('public/storage/profile_pictures', $fileNameToStore);

    }

       $admin = Auth::user();
       $admin->firstname = $request['firstname'];
       $admin->lastname = $request['lastname'];
       $admin->gender_id =$request['gender'];
       $admin->email = $request['email'];
       #Save profile picture on database
       if($request->hasFile('profile_picture')){
        $admin->profile_picture = $fileNameToStore;
    }
       $admin->save();

       return redirect('/admin/dashboard')->with('success','Your profile has been updated successfully');
    }

    public function editSelfPassword()
    {
        $admin = Auth::user();
        return view('admin.change-password')->with('admin', $admin);
    }
    
    public function updateSelfPassword(Request $request)
    {
            #Validate Form
            $this->validate($request,[
                'old_password'=>'required',
                'password'=>'required|confirmed|min:6',
            ]);
    
            $admin= Auth()->user();
            $hashedPassword = $admin->password;
            if (Hash::check($request['old_password'], $hashedPassword)) {
                $admin->password = \Hash::make($request['password']);
                $admin->save();
                return redirect('admin/dashboard')->with('success', 'Password updated successfuly');
            } else{
                return redirect('admin/change-password')->with('error', 'Password incorrect! Kindly input the correct password');
            }
    }


   

    
    


    public function indexAdmin()
    {
        $roles = Role::find(1);
        
        $admins= $roles->admin()->get();

        return view('admin.admins.list')->with('admins', $admins);
    }


    public function createAdmin()
    {
        $genders= Gender::all();
        return view('admin.admins.new')->with('genders',$genders);
    }

    public function storeAdmin(Request $request)
    {
        $this->validate($request, 
        [
            'firstname'=> 'required',
            'lastname'=> 'nullable',
            'email'=> 'required',
            'password'=> 'required',
            'gender'=> 'required',
        ]);

       $admin= new Admin();
       $admin->firstname = $request['firstname'];
       $admin->lastname = $request['lastname'];
       $admin->gender_id =$request['gender'];
       $admin->email = $request['email'];
       $admin->password = \Hash::make($request['password']);
       $admin->role_id = 1;
       $admin->save();
       
        return redirect('/admin/admins')->with('success','Admin created successfully');
    }


    public function showAdmin($id)
    {
        $admin = Admin::find($id);
       #  $roles = $user->roles()->get();
        return view('admin.admins.show')->with('admin', $admin);
    }

    public function editAdmin($id)
    {
        $admin = Admin::find($id);
        $genders= Gender::all();
        return view('admin.admins.edit')->with('genders',$genders)->with('admin',$admin);
    }

    public function updateAdmin(Request $request, $id)
    {
        $this->validate($request, 
        [
            'firstname'=> 'required',
            'lastname'=> 'nullable',
            'email'=> 'required',
            'password'=> 'nullable',
            'gender'=> 'required',
        ]);

       $admin= Admin::find($id);
       $admin->firstname = $request['firstname'];
       $admin->lastname = $request['lastname'];
       $admin->gender_id =$request['gender'];
       $admin->email = $request['email'];
       $admin->role_id = 1;
       $admin->save();

       return redirect('/admin/admins')->with('success','Admin updated successfully');

    }


    public function destroyAdmin($id)
    {
        $admin= Admin::find($id);
        $admin->delete();
        return redirect('/admin/admins')->with('success', 'Admin deleted successfully');
    }




    #Tutor Management
    public function indexTutor()
    {
        $roles = Role::find(2);
        
        $tutors= $roles->users()->get();

        return view('admin.tutors.list')->with('tutors', $tutors);
    }


    public function createTutor()
    {
        $genders= Gender::all();
        $courses = Course::all();
        return view('admin.tutors.new')->with('genders',$genders)->with('courses', $courses);
    }

    public function storeTutor(Request $request)
    {
        $this->validate($request, 
        [
            'firstname'=> 'required',
            'lastname'=> 'nullable',
            'email'=> 'required',
            'password'=> 'required',
            'gender'=> 'required',
        ]);

       $user= new User();
       $user->firstname = $request['firstname'];
       $user->lastname = $request['lastname'];
       $user->gender_id =$request['gender'];
       $user->email = $request['email'];
       $user->password = \Hash::make($request['password']);
       $user->save();
       $courses = $request['courses'];
        foreach($courses as $course){
            $user->course()->attach($course);
        }
        

       $role = 2;
       $user->attachRole($role);
       
        return redirect('/admin/tutors')->with('success','Tutor created successfully');
    }


    public function showTutor($id)
    {
        $tutor = User::find($id);
        $tCourses = $tutor->course()->get();
        // foreach($tCourses as $tCourse){
        //     $jj[] = $tCourse->id;
        // }
        // dd($jj);

        return view('admin.tutors.show')->with('tutor', $tutor)->with('tCourses', $tCourses);
    }


    public function editTutor($id)
    {
        //
        $tutor = User::find($id);
        $genders= Gender::all();
        $courses = Course::all();
        return view('admin.tutors.edit')->with('tutor',$tutor)->with('courses', $courses)->with('genders',$genders);
    }


    public function updateTutor(Request $request, $id)
    {
        $this->validate($request,[
            'firstname'=> 'required',
            'lastname'=> 'nullable',
            'email'=> 'required',
            'password'=> 'nullable',
            'gender'=> 'required',
    ]);
    $user = User::find($id);
    $user->firstname = $request['firstname'];
    $user->lastname = $request['lastname'];
    $user->gender_id =$request['gender'];
    $user->email = $request['email'];
    $user->save();

    $oldCourses = $user->course()->get();
    $newCourses = $request->get('courses');

    foreach($oldCourses as $oldCourse){
        $user->course()->detach($oldCourse); 
    }
    foreach($newCourses as $newCourse) {
       $user->course()->attach($newCourse);
    }
    return redirect('/admin/tutors')->with('success', 'Tutor edited successfully');
    }
    

    public function destroyTutor($id)
    {
        $tutor= User::find($id);
        $tutor->delete();
        return redirect('/admin/admins')->with('success', 'Tutor deleted successfully');
    }



    public function getAddCourseToTutor($id)
    {
        // $user = User::find($id);
        // $uCourses = $user->course()->where('course_id','>',0)->get();
        // dd($uCourses);
        // dd($uCourses);
        // $courses = Course::all(['id']);
        // dd($courses);
        // dd($courses);
        //     foreach($uCourses as $uCourse){
        //     if($uCourse->course_id != $courses->id){
        //         return 'hi';
        //     }
        // }
        
        // dd($ex);
        // $exCourses = Course::where('id', '!=', $uCourses->id)->get();
        
        // dd($exCourses);
        //$rCourses = $user->course()->get();
        
        // $courses = Course:: all();
        // $nCoursesIds = Course::where('id', '!=', $rCourses->id)->get();
        // dd($nCoursesIds);
        // $ide = $rCourses->id->get();
        // dd($ide);
        
        // $excCourse = $users->where('id', '!=', $users['id']);
        
        // $courzes = $user->course()->get();
        $user = User::find($id);
        $courzes = $user->course(['id'])->get();
        $courses = Course:: all();
        return view('admin.tutors.addcourse')->with('courses', $courses)->with('user', $user)->with('courzes', $courzes);
    }


    public function postAddCourseToTutor(Request $request, $id)
    {
        $user = User::find($id);
        $course = $request['add_course'];
        $uCourses = $user->course()->get();
        foreach($uCourses as $uCourse){
            if($uCourse->id == $course){
            return redirect("/admin/tutors/$id/add-course")->with('user', $user )->with('error', 'Course has been previously added to Tutor');
            }
        }
        $user->course()->attach($course);
        return redirect("/admin/tutors/$id/add-course")->with('user', $user )->with('success', 'Course has been attached to Tutor');
        
        // foreach($uCourses as $uCourse){
        // if($uCourse->id == $course){
        //     return 'No way!';
        // }
        // else{
        // $user->course()->attach($course);
        // }
        // }
        // return redirect('/admin/tutors/')->with('user', $user )->with('success', 'Course has been attached to Tutor');
    }


    public function removeCourseToTutor(Request $request, $id)
    {
        $user = User::find($id);
        $course = $request['remove_course'];
        $user->course()->detach($course);

        return redirect("/admin/tutors/$id/add-course")->with('user', $user )->with('success', 'Course has been removed from Tutor');
    }



    #STUDENT MANAGEMENT
    public function indexStudent()
    {
        $roles = Role::find(3);
        
        $students= $roles->users()->get();

        return view('admin.students.list')->with('students', $students);
    }

    public function studentsProgram()
    {
        $roles = Role::find(3);
        $students= $roles->users()->get();
        $programs = Program::all();

        return view('admin.students.programs')->with('programs', $programs);
    }

    public function programStudents($id)
    {
        $roles = Role::find(3);
        $user= $roles->users()->get();
        $program = Program::find($id);
        $proStudents = $program->user()->whereRoleIs('Student')->get();

        return view('admin.students.prog-students')->with('proStudents', $proStudents)->with('program', $program);
    }

    public function studentsCourses()
    {
        $roles = Role::find(3);
        $students= $roles->users()->get();
        $courses = Course::all();

        return view('admin.students.courses')->with('courses', $courses);
    }

    public function courseStudents($id)
    {
        $roles = Role::find(3);
        $user= $roles->users()->get();
        $course = Course::find($id);
        $courseStudents = $course->user()->whereRoleIs('Student')->get();

        return view('admin.students.course-students')->with('courseStudents', $courseStudents)->with('course', $course);
    }

    public function showStudent($id)
    {
        $student = User::find($id);
        $stuCourses = $student->course()->get();
        $stuPrograms = $student->program()->get();
        $stuProg = $student->program()->latest()->first();
        $stuPayments = $student->payment()->get();
        $stuPay = $student->program()->latest()->first()->pivot->payment_status;
        $payment_statuz = Payment_status::find($stuPay);
        return view('admin.students.show')->with('payment_statuz', $payment_statuz)->with('stuProg', $stuProg)
        ->with('stuPrograms', $stuPrograms)->with('student', $student)->with('stuCourses', $stuCourses)
        ->with('stuPayments', $stuPayments);
    }

    public function destroyStudent($id)
    {
        $student= User::find($id);
        $student->delete();
        return redirect('/admin/students')->with('success', 'Tutor deleted successfully');
    }

    public function showStudentCourses($id)
    {
        $student = User::find($id);
        $stuCourses = $student->course()->get();
        return view('admin.students.stu-courses')->with('student', $student)->with('stuCourses', $stuCourses);
    }



        #ASSIGNMENT
    public function assCourses()
    {
        $courses = Course::all();
        return view('admin.assignment.courses')->with('courses', $courses);
    }

    public function showCourseAssignment($id)
    {
        $course = Course::find($id);
        $assignments = $course->assignment()->get();
        
        return view('admin.assignment.course-ass')->with('assignments', $assignments)->with('course', $course);
    }

    public function getSubmissions($course_id, $ass_id)
    {
        $course = Course::find($course_id);
        $assignment = $course->assignment()->find($ass_id);
        $submissions = $assignment->submission()->get();
        // dd($submission->user->firstname);
        return view('admin.assignment.submissions')->with('course', $course)->with('submissions', $submissions)->with('assignment', $assignment);
    }

    public function showSubmission($course_id, $ass_id,$sub_id)
    {
        $course = Course::find($course_id);
        $assignment = $course->assignment()->find($ass_id);
        $submission = $assignment->submission()->find($sub_id);
        $student = $submission->user;
        return view('admin.assignment.view-submission')->with('student', $student)->with('course', $course)->with('submission', $submission)->with('assignment', $assignment);
    }

    public function SubmissionScoresAdmin($course_id, $ass_id)
    {
        $course = Course::find($course_id);
        $assignment = $course->assignment()->find($ass_id);
        $submissions = $assignment->submission()->get();
        return view('admin.assignment.sub-scores')->with('course', $course)->with('submissions', $submissions)->with('assignment', $assignment);
    }

    public function destroyAssignment($course_id, $ass_id)
    {
        $course = Course::find($course_id);
        $assignment = $course->assignment()->find($ass_id);
        $assignment->delete();
        return redirect("/admin/$course_id/ass-list")->with('success', 'Assignment deleted successfully');
    }


        #PAYMENT
    public function listPayments()
    {
        $payments = Payment::all();
        return view('admin.payment.list')->with('payments', $payments);
    }

    public function makePayment()
    {
        $programs = Program::all();
        return view('admin.payment.new')->with('programs', $programs);
    }

    public function storePayment(Request $request)
    {
        $payment = new Payment();
        $payment->user_id = $request->user_id;
        $payment->program_id = $request->program;
        $payment->price = $request->price;
        $payment->purpose = $request->purpose;
        $payment->year = $request->year;
        $payment->save();

        $program_id = $request->program;

        $user_id = $request->user_id;

        #Save Payment status on user's table
        $user = User::find($user_id);
        $user->program()->updateExistingPivot($program_id, ['payment_status'=> 2]);
       
        return redirect('/admin/payments')->with('success', 'You have successfully paid for your current program');
    }



    #COURSE MANAGEMENT
    public function indexCourse()
    {
        $courses= Course::all();
        return view('admin.courses.list')->with('courses', $courses);
    }


    public function createCourse()
    {
        $programs= Program::all();
        return view('admin.courses.new')->with('programs', $programs);
    }


    public function storeCourse(Request $request)
    {
        $this->validate($request, 
        [
            'name'=> 'required',
            'description'=> 'nullable',
            'program'=> 'required',
        ]);

        $course= new Course();
        $course->name = $request['name'];
        $course->description = $request['description'];
        $course->save();

        $program = $request['program'];
        $course->program()->attach($program);
        
        return redirect('admin/courses')->with('success', 'Course has been created successfully');
    }


    public function showCourse($id)
    {
        $course = Course::find($id);
     /*   echo $course->Program->name;  */
       $Program= Program::all();
       $programs = $course->program()->get();
        return view('admin.courses.show')->with('course', $course)->with('Program', $Program)->with('programs', $programs); 
    }


    public function editCourse($id)
    {
        $course = Course::find($id);
        $programs = Program::all();
        return view('admin.courses.edit')->with('course',$course)->with('programs',$programs);
    }


    public function updateCourse(Request $request, $id)
    {
         #input requirement check/partial authentication
         $this->validate($request, [
            'name'=> 'required',
            'description'=> 'nullable',
            'program'=> 'required',
            ]);
    
        $course= Course::find($id);
        $course->name = $request['name'];
        $course->description = $request['description'];
        $course->save();

        $oldPrograms = $course->Program()->get();
        $newProgram = $request['program'];
        
    
        foreach($oldPrograms as $oldProgram){
            $course->program()->detach($oldProgram); 
        }
        
        $course->program()->attach($newProgram);
        
            
        return redirect('/admin/courses')->with('success','course updated successfully');
    }


    public function destroyCourse($id)
    {
        $course= Course::find($id);
        $course->delete();
        return redirect('/admin/courses')->with('success', 'course deleted successfully');
    }




    #PROGRAM MANAGEMENT
    public function indexProgram()
    {
        $programs= Program::all();
        return view('admin.programs.list')->with('programs', $programs);
    }



    public function createProgram()
    {
        return view('admin.programs.new');
    }

    public function storeProgram(Request $request)
    {
        #input requirement check/partial authentication
        $this->validate($request, [
            'name'=>'required',
            'description'=>'nullable',
            'price'=>'required'
        ]);

        
        #To save the request data in user table
        $program = new Program();
        $program->name = $request['name'];
        $program->description = $request ['description'];
        $program->price = $request['price'];
        $program->save();
        return redirect('admin/programs')->with('success', 'Program created successfully');
    }


    public function showProgram($id)
    {
        $program = Program::find($id);
        $courses = $program->course()->get();
       #  $roles = $user->roles()->get();
        return view('admin.programs.show')->with('program', $program)->with('courses', $courses);
    }


    public function editProgram($id)
    {
        $program = Program::find($id);
        return view('admin.programs.edit')->with('program',$program);
    }

    public function updateProgram(Request $request, $id)
    {
         #input requirement check/partial authentication
         $this->validate($request, [
            'name'=>'required',
            'description'=>'nullable',
            'price'=>'required'
        ]);

        
        #To save the request data in user table
        $program = Program::find($id);
        $program->name = $request['name'];
        $program->description = $request ['description'];
        $program->price = $request['price'];
        $program->save();
        return redirect('/admin/programs')->with('success', 'Program updated successfully');
    }

    public function destroyProgram($id)
    {
        $program= Program::find($id);
        $program->delete();
        return redirect('/admin/programs')->with('success', 'Program deleted successfully');
    }


    
        #POST MANAGEMENT
    public function newPost()
    {
        $programs= Program::all();
        return view('admin.posts.new')->with('programs', $programs);
    }

    public function storePost(StoreImage $request)
    {
        $this->validate($request,[
            'title'=> 'required',
            'body'=> 'required',
            'cover_image'=>'image|nullable|max:4999',
            'category'=> 'nullable',
        ]);

            // Handle file upload
        $image = new Image();
        if($request->hasFile('cover_image')){
            $path = Storage::disk('s3')->put('images/posts', $request->file('cover_image'));
            $request->merge([
                'size' => $request->file('cover_image')->getClientSize(),
                'path' => $path
            ]);
            $image->type = "cover_image";
            $this->image->create($request->only('path', 'title', 'size'));
        }
        $image->save();

        // if($request->hasFile('cover_image')){
        //     // Get filename with extension
        //     $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
        //     $filename = pathInfo($fileNameWithExt, PATHINFO_FILENAME);
        //     $extension = $request->file('cover_image')->getClientOriginalExtension();
        //     $fileNameToStore = $filename . '_' . time() . '.' . $extension;
        //     $path = $request->file('cover_image')->storeAs('public/covers', $fileNameToStore);

        // }else{
        //     $fileNameToStore='noimage.jpg';
        // }

        $post= new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->admin_id = auth()->user()->id;
        $post->cover_image = null;
        $post->category = $request->category;
        $post->save();

        return redirect('/admin/posts')->with('success', 'Post created');
    }


    public function indexPost()
    {
        $posts= Post::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.posts.index')->with('posts', $posts);
    }

    public function indexMyPost()
    {
        $admin = Auth::user();
        $posts= Post::where('admin_id', $admin->id)->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.posts.myposts')->with('posts', $posts);
    }

    public function showPost($id)
    {
       
        $post= Post::find($id);
        return view('admin.posts.show')->with('post', $post);
    }

    public function editPost($id)
    {
        $programs= Program::all();
        $post= Post::find($id);
        #To check for the correct user
        if(Auth()->user()->id !== $post->admin_id){
        return redirect('/admin/posts')->with('error', 'Unauthorized page');
        }
        return view('admin.posts.edit')->with('post', $post)->with('programs', $programs);
    }

    public function updatePost(Request $request, $id)
    {
        $this->validate($request,[
            'title'=> 'required',
            'body'=> 'required',
            'category'=> 'nullable',
        ]);

        if($request->hasFile('cover_image')){
            // Get filename with extension
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            $filename = pathInfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        };
      
        $post=Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->category = $request->category;
        if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        }
        $post->save();

        return redirect('/admin/posts')->with('success', 'Post has been updated successfully');
    }

    public function destroyPost($id)
    {
        $post=Post::find($id);

        #To check for the correct user
        if(Auth()->user()->id != $post->admin_id){
            return redirect('/admin/posts')->with('error', 'Unauthorized page');
            } 

        if($post->cover_image != 'noimage.jpg'){
            storage::delete('/image/cover_images'.$post->cover_image);
        }
        $post->delete();
        return redirect('/admin/posts')->with('success', 'Post Deleted');

    }



}
