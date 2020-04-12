<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/


// Auth::routes();
Auth::routes(['verify' => true]);

    #STUDENTS
Route::post('/dashboard', 'Auth\RegisterController@storeRegistrationForm');

Route::get('/dashboard', 'DashboardController@index');

Route::get('/unauthorized', 'DashboardController@unauthorized');

Route::get('/user-suspended', 'DashboardController@Suspended');
 

Route::get('/stu-programs', 'StudentsController@indexStudentProgram');

Route::get('/stu-courses', 'StudentsController@indexStudentCourse');

Route::post('/profile-picture', 'StudentsController@storeProfilePicture');

Route::post('/update-password', 'StudentsController@updateStudentPassword');


    #Submission management by Student
Route::get('/sub-courses', 'SubmissionsController@submissionCourseStu');

Route::get('/sub-courses/{id}/assignments', 'SubmissionsController@showCourseSubStu');

Route::get('/sub-courses/{id}/assignments/{ass_id}/submit', 'SubmissionsController@getSubmitAssignmentStu');

Route::post('/assignments/{assignment_id}/submitted', 'SubmissionsController@postSubmitAssignmentStu');

Route::get('/sub-courses/{id}/scores', 'SubmissionsController@submissionScores');







    #TUTORS 
// Route::get('/tut-dashboard', 'TutorsDashboardController@getDashboard');

Route::get('/dashboard/courses', 'TutorsDashboardController@indexCourse');

Route::get('/dashboard/tut-courses', 'TutorsDashboardController@indexTutCourse');

// Route::get('/dashboard/tut-students', 'TutorsDashboardController@indexTutStudent');

Route::get('/dashboard/tut-stu-crs', 'TutorsDashboardController@studentsCourse');

Route::get('/dashboard/tut-stu-crs/{id}/students', 'TutorsDashboardController@showTutCourseStudent');

Route::post('/dashboard/courses', 'TutorsDashboardController@storeProfilePicture');

Route::post('/dashboard/update-password', 'TutorsDashboardController@updateTutorPassword');

// Route::get('/dashboard', 'TutorsDashboardController@updateTutorPassword');


    #Assignment management by Tutor
Route::get('/new-assignment', 'AssignmentsController@createAssignmentTut');

Route::post('/tut-ass', 'AssignmentsController@storeAssignmentTut');

Route::get('/ass-courses', 'AssignmentsController@assignmentCourseTut');

Route::get('/ass-courses/{id}/ass-list', 'AssignmentsController@showCourseAssTut');

Route::get('/ass-courses/{course_id}/{ass_id}/edit', 'AssignmentsController@editAssignmentTut');

Route::put('/tut-ass/{course_id}/{id}/update/', 'AssignmentsController@updateAssignmentTut');

Route::get('/ass-courses/{tutCourse_id}/ass/{ass_id}/submissions', 'AssignmentsController@getSubmissionsTut');

Route::get('/ass-courses/{tutCourse_id}/ass/{ass_id}/{sub_id}/submission', 'AssignmentsController@editSubmissionGrade');

Route::get('/submission/{id}/graded', 'AssignmentsController@updateSubmissionGrade');

Route::get('/ass-courses/{tutCourse_id}/{ass_id}/scores', 'AssignmentsController@SubmissionScoresTut');



    
        #ADMIN
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::post('/logout', 'Auth\AdminLoginController@logoutAdmin')->name('admin.logout');

    Route::get('/dashboard', 'AdminController@index')->name('admin.home');

    Route::get('/edit', 'AdminController@editSelfAdmin');

    Route::post('/update', 'AdminController@updateSelfAdmin');

    Route::get('/change-password', 'AdminController@editSelfPassword');

    Route::post('/update-password', 'AdminController@updateSelfPassword');

    Route::get('/admins/create', 'AdminController@createAdmin');

    Route::get('/admins', 'AdminController@indexAdmin');

    Route::post('/admins', 'AdminController@storeAdmin');

    Route::get('/admins/{id}', 'AdminController@showAdmin');

    Route::get('/admins/{id}/edit', 'AdminController@editAdmin');

    Route::put('/admins/{id}', 'AdminController@updateAdmin');

    Route::delete('/admins/{id}', 'AdminController@destroyAdmin');

        #Tutor Management
    Route::get('/tutors/create', 'AdminController@createTutor');
    
    Route::get('/tutors', 'AdminController@indexTutor');
    
    Route::post('/tutors', 'AdminController@storeTutor');
    
    Route::get('/tutors/{id}', 'AdminController@showTutor');
    
    Route::get('/tutors/{id}/edit', 'AdminController@editTutor');
    
    Route::put('/tutors/{id}', 'AdminController@updateTutor');
    
    Route::delete('/tutors/{id}', 'AdminController@destroyTutor');
    
    Route::get('/tutors/{id}/add-course', 'AdminController@getAddCourseToTutor');
    
    Route::post('/tutors/{id}/add-course', 'AdminController@postAddCourseToTutor');
    
    Route::post('/tutors/{id}/neg-course', 'AdminController@removeCourseToTutor');

        #Student Management
    Route::get('/students', 'AdminController@indexStudent');

    Route::get('/stu-programs', 'AdminController@studentsProgram');

    Route::get('/prog/{id}/students', 'AdminController@programStudents');

    Route::get('/stu-courses', 'AdminController@studentsCourses');

    Route::get('/course/{id}/students', 'AdminController@courseStudents');

    Route::get('/student/{id}', 'AdminController@showStudent');

    Route::delete('/student/{id}', 'AdminController@destroyStudent');

    Route::get('/student/{id}/courses', 'AdminController@showStudentCourses');


        #Assignment Managemment by Admin
    Route::get('/ass-course', 'AdminController@assCourses');

    Route::get('/{id}/ass-list', 'AdminController@showCourseAssignment');

    Route::get('/ass-course/{course_id}/{ass_id}/submissions', 'AdminController@getSubmissions');

    Route::get('/ass-course/{course_id}/ass/{ass_id}/{sub_id}/submission', 'AdminController@showSubmission');

    Route::get('/ass-course/{course_id}/{ass_id}/scores', 'AdminController@SubmissionScoresAdmin');

    Route::delete('/ass-course/{course_id}}/{ass_id}/delete', 'AdminController@destroyAssignment');

        #Payment Management
    Route::get('/payments', 'AdminController@listPayments');

    Route::get('/make-payment', 'AdminController@makePayment');

    Route::post('/success-payment', 'AdminController@storePayment');
        //ADMIN


        #Program Management
    Route::get('/programs/create', 'AdminController@createProgram');

    Route::get('/programs', 'AdminController@indexProgram');

    Route::post('/programs', 'AdminController@storeProgram');

    Route::get('/programs/{id}', 'AdminController@showProgram');

    Route::get('/programs/{id}/edit', 'AdminController@editProgram');

    Route::put('/programs/{id}', 'AdminController@updateProgram');

    Route::delete('/programs/{id}', 'AdminController@destroyProgram');
        


        #Courses management
    Route::get('/courses', 'AdminController@indexCourse');

    Route::get('/courses/create', 'AdminController@createCourse');

    Route::post('/courses', 'AdminController@storeCourse');

    Route::get('/courses/{id}', 'AdminController@showCourse');

    Route::get('/courses/{id}/edit', 'AdminController@editCourse');

    Route::put('/courses/{id}', 'AdminController@updateCourse');

    Route::delete('courses/{id}', 'AdminController@destroyCourse');


            #SUSPENSION
        #Suspend Student
    Route::post('/student/{id}/suspend', 'SuspensionsController@suspendStudent');    

    Route::post('/student/{id}/unsuspend', 'SuspensionsController@unsuspendStudent');    

        #Suspend Tutor
    Route::post('/tutor/{id}/suspend', 'SuspensionsController@suspendTutor');    

    Route::post('/tutor/{id}/unsuspend', 'SuspensionsController@unsuspendTutor');    



        #Post Management
    Route::get('/create-post','AdminController@newPost');

    Route::post('/create-post','AdminController@storePost');

    Route::get('/posts','AdminController@indexPost');

    Route::get('/my-posts','AdminController@indexMyPost');

    Route::get('/posts/{id}','AdminController@showPost');

    Route::get('/posts/{id}/edit','AdminController@editPost');

    Route::put('/posts/{id}/update','AdminController@updatePost');

    Route::delete('/posts/{id}/delete','AdminController@destroyPost');




        #Roles
    Route::get('roles/create','RolesController@createRoles');

    Route::get('roles','RolesController@indexRoles');

    Route::post('roles', 'RolesController@storeRoles');



});





    #WEB PAGES MANAGEMENT
Route::get('/blog/{title}', 'PagesController@showPost');

Route::get('/blog', 'PagesController@blog');

// Route::get('/calendar', 'PagesController@calendar');

Route::get('/ui-ux', 'PagesController@uiUx');

Route::get('/mobile', 'PagesController@mobile');

Route::get('/front-end', 'PagesController@frontend');

Route::get('/data-science', 'PagesController@dataScience');

Route::get('/cms', 'PagesController@cms');

Route::get('/back-end', 'PagesController@backend');

Route::get('/contact', 'PagesController@contact');

Route::get('/about', 'PagesController@about');

Route::get('/', 'PagesController@home');









#DOWNLOAD CONTROLLER
    #Tutor download
Route::get('/ass-courses/{tutCourse_id}/ass/{ass_id}/{sub_id}/download', 'DownloadsController@assignmentDownload');
    
    #Admin download
Route::get('/ass-courses/{course_id}/ass/{ass_id}/{sub_id}/download', 'DownloadsController@assignmentDownloadAdmin');




    #PAYMENT
Route::post('/pay', [
    'uses' => 'PaymentController@redirectToGateway',
    'as' => 'pay'
]);
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

Route::get('/payment-form', 'PaymentController@getMakePaymentStu');







