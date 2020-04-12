@extends('layouts.stu.stu')

@section('content')
    <!-- Header Message -->
    @section('header-message')
       <h3> {{$stuCourse->name}} Assignment scores </h3>
            
    @endsection

    <h5>There is no assignment to show scores for</h5>


        <br><br><br>
        <a href="/sub-courses/{{$stuCourse->id}}/assignments/">Back</a>
    
@endsection