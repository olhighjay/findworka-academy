@extends('layouts.adm.admin2')

@section('content')

    <div class="card">
        <h2>Course</h2>
    

        <div class="container">   
            <a href="/admin/courses" class="btn btn-default" style="background-color:orange; color:white; margin-top:20px" type="button">Back</a>
        </div> 

        <div class="container" style="padding-left:50px; padding-right:30px">
            <br>
                <br> <h5> Name: {{$course->name}}    </h5>
                <br> <h5> Description: {{$course->description}}   </h5>
                <br> <h5> Program: 
                        @foreach($programs as $program)
                                <a href="/admin/programs/{{$program->id}}"> {{$program->name}} </a> &nbsp &nbsp
                        @endforeach
                    </h5>
                <br> <h5> Date created: {{$course->created_at}} </h5>
                <br> <h5> Last updated: {{$course->updated_at}} </h5>

                <br>

            <a href="/admin/courses/{{$course->id}}/edit" class="btn btn-default" style="border-color:blue; background-color:white">Edit</a>
            
            <div  class="pull-right" style="float: right;">
                {!!Form::open(['action'=>['AdminController@destroyCourse', $course->id], 'method'=>'POST'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                {!!Form::close()!!}
            </div>
                
        </div>

        <br> <br>

        

    </div>




@endsection