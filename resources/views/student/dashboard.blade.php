@extends('layouts.stu.stu')

    @section('content')
        <!-- Header Message -->
        @section('header-message')
            You are logged in {{Auth::user()->firstname}} 
        @endsection

        @section('top-right-button')
            <li class="hidden-xs"><a href="/payment-form" class="add-project">Make Payment</a></li>
        @endsection                            
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
        
    <body> 
        

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
                
            </div>
        @endif



        <div class="container card">
                <!-- Profile picture -->
            <h1 style="text-align:center; color:crimson">{{$student->firstname}} {{$student->lastname}}</h1>
                @if($student->profile_picture == null)
                    <img class="mx-auto img-fluid  d-block" style="width:300px; height:310px" src="/storage/profile_pictures/noimage.jpg" alt="profile picture">
                @else
                    <img class="mx-auto img-fluid rounded-circle d-block" style="width:300px; height:300px"  src="/storage/profile_pictures/{{$student->profile_picture}}" alt="profile picture"> 
                @endif
                <br>
            
                <!-- Profile picture buttons -->
            <form action="/profile-picture" method="POST" style="margin:auto" enctype="multipart/form-data">
                @csrf
                <div class="file btn btn-lg btn-primary form-group" style="position: relative; overflow: hidden; margin:auto">
                    choose profile picture
                    <input style="  position: absolute; font-size: 50px; opacity: 0; right: 0; top: 0;" type="file" name="profile_picture" accept="image/*" />
                </div> <br>
                <button type="submit" class="btn form-group" style="margin-left:24px">Upload profile picture</button>
            </form>

                <!-- Student Details -->
            <div style="text-align:center;">
                <div>
                    <br>
                        <br> <h5> <b>Firstname </b><br> {{$student->firstname}}    </h5>
                        <br> <h5> <b>Middlename </b> <br> {{$student->middlename}}   </h5>
                        <br> <h5> <b>Lastname </b> <br> {{$student->lastname}}   </h5>
                        <br> <h5> <b>Gender </b> <br> {{$student->gender->name}}    </h5>
                        <br> <h5> <b>Age </b> <br> {{$student->age}}   </h5>
                        <br> <h5> <b>Nationality </b> <br> {{$student->nationality}}   </h5>
                        <br> <h5> <b>State </b> <br> {{$student->state}}   </h5>
                        {{-- <br> <h5> <b>Cuurent Address </b> <br> {{$student->address->name}}   </h5> --}}
                        <br> <h5> <b>Phone Number </b> <br> {{$student->phone_number}}   </h5>
                        <br> <h4><b> Email  </b> <br> {{$student->email}}  </h5>
                        <br> <h5><b> Role  </b> <br> student  </h5>
                        <br> <h4><b> Status : </b> &nbsp {{$student->suspension->name}}  </h5>
                        <br> <h5> <b>Current Program </b> <br> {{$stuProgram->name .'/'. $payment_statuz->name}}   </h5>
                   
                    <br>
                </div>


                <!-- MODAL HERE     -->

                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Change Password
  </button>
  
  <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Change Password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                    <!-- PASSWORD Form-->
                <form class="form-group" action="/update-password" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="old_password" class="col-md-4 col-form-label text-md-right"><b>Password</b></label>
                        <div class="col-md-6">
                            <input id="old_password" class="form-control" type="password" name="old_password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right"><b>{{ __('New Password') }}</b></label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><b>{{ __('Confirm New Password') }}</b></label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Password</button>
                    </div>
                </form>
            </div>
            
        </div>
        </div>
    </div>  <!-- MODAL -->


                <br><br><br>
            </div>
        </div>


    </body>

        
@endsection
