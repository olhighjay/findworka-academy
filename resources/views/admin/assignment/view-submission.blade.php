@extends ('layouts.adm.admin2')

@section('content')


        <h2>{{$student->firstname ." ". $student->lastname}}'s Solution</h2>
    <br>
    <div  style="width:100% !important">
        <div class="col-md-6  ">
        <h4> <b> Title: <b> </h4> <h5>{!!$submission->title!!} </h5><br>
        <h4> <b> Added Note: <b> </h4> <h5>{!!$submission->body!!} </h5> <br>
        <h4> <b>Solution: <b> </h4> <h5><a href="/admin/ass-courses/{{$course->id}}/ass/{{$assignment->id}}/{{$submission->id}}/download">{!!$submission->solution!!}</a> </h5>
        </div>

    </div>

    
@endsection