@extends ('layouts.adm.admin2')

@section('content')

<style>
    .shift{
        margin-left: 25px;
    }
</style>

    <h2>Tutor</h2>

    <div class="container">   
        <a href="/admin/tutors" class="btn btn-default" style="background-color:orange; color:white; margin-top:20px" type="button">Back</a>
    </div> 

    <div class="container">
        <br>
            <br> <h4> Firstname: {{$tutor->firstname}}    </h4>
            <br> <h4> Lastname: {{$tutor->lastname}}   </h4>
            <br> <h4> Gender:   {{$tutor->gender->name}}    </h4>
            <br> <h4> Email:    {{$tutor->email}}  </h4>
            <br> <h4> Status : &nbsp {{$tutor->suspension->name}}  </h5>
            <br> <h4>Assigned Courses: 
            @foreach($tCourses as $tCourse)
               <a href="/admin/courses/{{$tCourse->id}}"> {{$tCourse->name}} </a>, 
            @endforeach
            </h4>
            <br> <h4> Date created: {{$tutor->created_at}} </h4>
            <br> <h4> Last updated: {{$tutor->updated_at}} </h4>

        <br>
    

        <div  class="pull-right" style="float: right;">
            {!!Form::open(['action'=>['AdminController@destroyTutor', $tutor->id], 'method'=>'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
            {!!Form::close()!!}
        </div>

        
        @if($tutor->suspension_id == 1)
        
            <div >
                {!!Form::open(['action'=>['SuspensionsController@suspendTutor', $tutor->id], 'method'=>'POST'])!!}
                    {{Form::submit('Suspend', ['class'=>'btn btn-default', 'style'=>'background-color:orangered;color:white;'])}}
                {!!Form::close()!!}
            </div>
        @else
            <div >
                {!!Form::open(['action'=>['SuspensionsController@unsuspendTutor', $tutor->id], 'method'=>'POST'])!!}
                    {{Form::submit('Unsuspend', ['class'=>'btn btn-default', 'style'=>'background-color:orangered;color:white'])}}
                {!!Form::close()!!}
            </div>
        @endif
    </div>
        
    
    
@endsection