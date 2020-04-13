<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--   LARAVEL -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
        <!-- laravel bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

                <!-- TEMPLATES -->
            <!-- Styles -->
        <!-- Tutor Dashboard -->
    <link href="{{ asset('css/tutdash.css') }}" rel="stylesheet">

        <!-- Scripts -->
    <!-- Tutor Dashboard -->
    <script src="{{ asset('js/tutdash.js') }}" defer></script>
            
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!------ Include the above in your HEAD tag ---------->

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    


         
</head>
     
</head>
<body>
    <div id="app">
        @include('inc.web.navbar')
        @include('inc.message')
        

              <div class="home">
                <div class="container-fluid display-table" style="margin-top:-10px">
                    <div class="row display-table-row">
                        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                            <div class="logo">
                                <a hef="home.html"><img src="/image/images/findworka-sticker1.png"  alt="merkery_logo" class="hidden-xs hidden-sm">
                                    <img src="/image/images/findworka-sticker1.png"  alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                                </a>
                            </div>
                            <div class="navi">
                                <ul>
                                    <li class="active"><a href="/dashboard"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile</span></a></li>
                                    <li><a href="#"><i class="fa-book" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Courses<i class="fa fa-caret-down"></i></span></a>
                                        <ol style= "margin-left: 15px">
                                            <li class= "move"><a href="/dashboard/tut-courses"> ◘ View my courses </a></li>
                                            <li class="move"><a href="/dashboard/courses"> ◘ View all courses</a></li>
                                        </ol>
                                    </li>
                                    <li><a href="/dashboard/tut-stu-crs"><i class="fa fa-users" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Students</span></a></li>
                                    <li><a href="#"><i class="fa fa-tasks " aria-hidden="true"></i><span class="hidden-xs hidden-sm" >Assignment <i class="fa fa-caret-down"></i></span></a> 
                                        <ol style= "margin-left: 15px">
                                            <li class= "move"><a href="/new-assignment">  ◘ Create Assignments </a></li>
                                            <li class="move"><a href="/ass-courses"> ◘ View and Grade Assignment </a></li>
                                        </ol>
                                    </li>
                                    <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Timetable</span></a></li>
                                    <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Setting</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-11 display-table-cell v-align" >
                            <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                            
                           
                                <div class="row" >
                                <header > 
                                    <div class="col-md-7">
                                        <nav class="navbar-default pull-left"> 

                                            <div class="btn noHover" style="background-color:white !important; color:darkblue"  >
<!--    HEADER MESSAGE -->                      <h4>    @yield('header-message')    </h4>
                                            </div>    

                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </div>
                                        </nav>
                                       <!-- <div class="search hidden-xs hidden-sm">
                                            <input type="text" placeholder="Search" id="search">
                                        </div> -->
                                    </div>
                                    <div class="col-md-5">
                                        <div class="header-rightside">
                                            <ul class="list-inline header-top pull-right">
                                                {{-- <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Add Project</a></li> --}}
                                                <!-- <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li> -->
                                              <li>
                                                 <!--    <a href="#" class="icon-info">
                                                   <i class="fa fa-bell" aria-hidden="true"></i>  
                                                        <span class="label label-primary">3</span>
                                                    </a>    -->
                                                </li>  
                                            </ul>
                                        </div>
                                    </div>
                                </header>
                            </div>  

                            
                            <div class="main">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        
<!--  PAGE CONTENT -->                      @yield('content')
                                        
                                    </div>
                                </div>
                            </div>

                            <!------
                            <div class="user-dashboard">
                                <h1>Hello, Ifeoluwa</h1>
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 col-xs-12 gutter">

                                        <div class="sales">
                                            <h2>Your Sale</h2>

                                            <div class="btn-group">
                                                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span>Period:</span> Last Year
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a href="#">2012</a>
                                                    <a href="#">2014</a>
                                                    <a href="#">2015</a>
                                                    <a href="#">2016</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-7 col-xs-12 gutter">

                                        <div class="sales report">
                                            <h2>Report</h2>
                                            <div class="btn-group">
                                                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span>Period:</span> Last Year
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a href="#">2012</a>
                                                    <a href="#">2014</a>
                                                    <a href="#">2015</a>
                                                    <a href="#">2016</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        -->
                    </div>
                    </div>

                </div>



              <!-- Modal -->
         <!--   <div id="add_project" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                    -->   <!-- Modal content--> <!--
                        <div class="modal-content">
                            <div class="modal-header login-header">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h4 class="modal-title">Add Project</h4>
                            </div>
                            <div class="modal-body">
                                        <input type="text" placeholder="Project Title" name="name">
                                        <input type="text" placeholder="Post of Post" name="mail">
                                        <input type="text" placeholder="Author" name="passsword">
                                        <textarea placeholder="Desicrption"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="cancel" data-dismiss="modal">Close</button>
                                <button type="button" class="add-project" data-dismiss="modal">Save</button>
                            </div>
                        </div>

                    </div>
                </div>   -->

            </div>


        <div>
            <br><br><br><br><br>
        </div>
        
        @include('inc.web.footer') 
        
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
</html>
