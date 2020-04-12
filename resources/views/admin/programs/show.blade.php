@extends('layouts.adm.admin2')

@section('content')

    <div class="card">
        <h2> Program</h2>
    

        <div class="container">   
            <a href="/admin/programs" class="btn btn-default" style="background-color:orange; color:white; margin-top:20px" type="button">Back</a>
        </div> 

        <div class="container">
            <br>
                <br> <h5> <strong> Name: </strong> {{$program->name}}    </h5>
                <br> <h5> <strong> Description: </strong> {{$program->description}}   </h5>
                <br> <h5> <strong> Courses: </strong> 
                        @foreach($courses as $course)
                        {{$course->name}}    &nbsp
                        @endforeach 
                    </h5>
                <br> <h5> <strong> Price: </strong> ₦{{$program->price}}   </h5>
                <br> <h5> <strong> Date created: </strong> {{$program->created_at}} </h5>
                <br> <h5> <strong> Last updated: </strong> {{$program->updated_at}} </h5>

                <br>

            <a href="/admin/programs/{{$program->id}}/edit" class="btn btn-default" style="border-color:blue; background-color:white">Edit</a>
            
            <div  class="pull-right" style="float: right;">
                {!!Form::open(['action'=>['AdminController@destroyProgram', $program->id], 'method'=>'POST'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                {!!Form::close()!!}
            </div>
                
        </div>

        <br> <br>

        

    </div>




@endsection