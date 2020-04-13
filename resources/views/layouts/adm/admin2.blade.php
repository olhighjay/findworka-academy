<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    
        <!-- CSS -->
    <link href="{{ asset('css/sidebar01/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar01/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar01/_media.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar01/_stretched-link.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar01/toggle.css') }}" rel="stylesheet">
        <!-- JS -->
    <script src="{{ asset('css/sidebar01/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('css/sidebar01/jquery.min.js') }}" defer></script>
    <script src="{{ asset('css/sidebar01/main.js') }}" defer></script>
    <script src="{{ asset('css/sidebar01/proper.js') }}" defer></script>


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



  </head>
  <body>
        @include('inc.message')
		
		<div class="wrapper d-flex align-items-stretch">
            <nav id="sidebar">

				<div class="p-4 pt-5" style="height:100%">
                @if(Auth()->user()->profile_picture == null)
                    <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(/image/profile_pictures/findworka-map.jpg);"></a>
                @else
                    <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(/image/profile_pictures/{{Auth()->user()->profile_picture}});"></a>
                @endif
                    <ul class="list-unstyled components mb-5">
	            <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle ">Profile</a>
                    <ul class=" collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="/admin/dashboard">View Profile</a>
                        </li>
                        <li>
                            <a href="/admin/edit">Edit Profile</a>
                        </li>
                        <li>
                            <a href="/admin/change-password">Change Password</a>
                        </li>
                    </ul>
                </li>
	          
                <li>
                    <a href="#user" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">User Management</a>
                    <ul class="collapse list-unstyled" id="user">
                        <li>
                            <a href="/admin/admins">View Admins </a>
                        </li>
                        <li>
                            <a href="/admin/tutors">View Tutors </a>
                        </li>
                        <li>
                            <a href="/admin/students">View Students </a>
                        </li>
                        <li>
                            <a href="/admin/admins/create">Create Admins </a>
                        </li>
                        <li>
                            <a href="/admin/tutors/create">Create Tutors </a>
                        </li>
                    </ul>
                </li>    

                <li>
                    <a href="#programs" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle ">Programs Management</a>
                    <ul class=" collapse list-unstyled" id="programs">
                        <li>
                            <a href="/admin/programs">View Programs</a>
                        </li>
                        <li>
                            <a href="/admin/programs/create">Create Programs</a>
                        </li>
                       
                    </ul>
                </li>
            
                <li>
                    <a href="#courses" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle ">Courses Management</a>
                    <ul class=" collapse list-unstyled" id="courses">
                        <li>
                            <a href="/admin/courses">View Courses </a>
                        </li>
                        <li>
                            <a href="/admin/courses/create">Create Courses </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#students" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle ">Students Management</a>
                    <ul class=" collapse list-unstyled" id="students">
                        <li>
                            <a href="/admin/students">View Students</a>
                        </li>
                        <li>
                            <a href="/admin/stu-programs">View Students based on Program </a>
                        </li>
                        <li>
                            <a href="/admin/stu-courses">View Students based on Course</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#payments" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle ">Payments Management</a>
                    <ul class=" collapse list-unstyled" id="payments">
                        <li>
                            <a href="/admin/payments">View Payments</a>
                        </li>
                        <li>
                            <a href="/admin/make-payment">Make Payments </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="/admin/ass-course">Assignments</a>
                </li>

                <li>
                    <a href="#posts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle ">Posts Management</a>
                    <ul class=" collapse list-unstyled" id="posts">
                        <li>
                            <a href="/admin/posts">View Posts</a>
                        </li>
                        <li>
                            <a href="/admin/create-post">Create Posts</a>
                        </li>
                        <li>
                            <a href="/admin/my-posts">My Posts</a>
                        </li>
                       
                    </ul>
                </li>

                <li>
                    <a href="#">Timetable</a>
                </li>

                
                <li>
                    <a class="dropdown-item" href="{{ route('admin.logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('ad-logout-form').submit();">
                        Logout
                    </a>
                
                    <form id="ad-logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
              
	        </ul>

	        <div class="footer">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                     made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	    </div>
    	</nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">
            <a hef="/"><img src="/image/images/findworka-sticker1.png"  alt="merkery_logo" style="width:150px"></a>
                
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                <i class="fa fa-bars"></i>
                <span class="sr-only">Toggle Menu</span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/" target="_blank" >Visit Website</a>
                    </li>
                    
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('ad-logout-form').submit();">
                            Logout
                        </a>
                    
                        <form id="ad-logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
                </div>
            </div>
            </nav>

<!-- PAGE CONTENT -->  
            <div>
              @yield('content')
<!-- -->    </div>
        </div>

    <script src="css/sidebar01/jquery.min.js"></script>
    <script src="css/sidebar01/popper.js"></script>
    <script src="css/sidebar01/bootstrap.min.js"></script>
    <script src="css/sidebar01/main.js"></script>
  </body>
</html>