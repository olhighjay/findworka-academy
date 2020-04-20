@extends('layouts.adm.admin2')

@section('content')
    
    <h3>  You are logged in {{Auth::user()->firstname}}</h3>
    

        <!-- Profile picture -->
    
        @if($admin->profile_picture == null)
            <img class="mx-auto img-fluid  d-block" style="width:300px; height:310px" src="/image/cover_images/noimage.jpg" alt="profile picture">
        @else
            <img class="mx-auto img-fluid rounded-circle d-block" style="width:300px; height:300px"  src="{{$admin->profile_picture}}" alt="profile picture"> 
        @endif
        <br>
        <br>

         <!-- admin Details -->
        <div style="text-align:center;">
            <div>
                <br>
                    <br> <h5> <b>Firstname </b><br> {{$admin->firstname}}    </h5>
                    <br> <h5> <b>Lastname </b> <br> {{$admin->lastname}}   </h5>
                    <br> <h5> <b>Gender </b> <br>  {{$admin->gender->name}}   </h5>
                    <br> <h5><b> Email  </b> <br> {{$admin->email}}  </h5>
                    <br> <h5><b> Role  </b> <br> Admin  </h5>
                    <br> <h5><b> Status </b> <br> {{$admin->suspension->name}} </h5>    
                <br>
            </div>
        <div>

            {{-- {{$admin->gender->name}}
            {{$admin->suspension->name}}  --}}

            

@endsection
