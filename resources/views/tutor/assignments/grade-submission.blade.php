@extends('layouts.tut.tut')

@section('content')
    <!-- Header Message -->
    @section('header-message')
    {{$submission->user->firstname}}'s Submission
    @endsection

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        

    <div class="row justify-content-center" style="width:100% !important">
        <div class="col-md-6  ">
        <h4> <b> Question: <b> </h4> <h5>{!!$assignment->body!!} </h5><br> <hr>
        <h4> <b> Title: <b> </h4> <h5>{!!$submission->title!!} </h5><br>
        <h4> <b> Added Note: <b> </h4> <h5>{!!$submission->body!!} </h5> <br>
        <h4> <b>Solution: <b> </h4> <h5><a href="/ass-courses/{{$tutCourse->id}}/ass/{{$assignment->id}}/{{$submission->id}}/download">{!!$submission->solution!!}</a> </h5>
        </div>



        <div>
            <form class="form-group" action="/submission/{{$submission->id}}/graded" method="PUT" enctype="multipart/form-data">
                @csrf
                <div style="width:120%">
                    <label for="grade"><b>Grade</b></label>
                    <input id="grade" class="form-control" type="number" name="grade" value="{{$submission->grade}}">
                    <br>
                
                    
                    <label for="remarks"><b>Remarks</b></label>
                    <textarea id="remarks" class="form-control" type="textarea" name="remarks" placeholder="Remarks">{{$submission->remarks}}</textarea>
                    <br>  
                
                    <div>
                        <button class="btn btn-primary" type="submit">Add Grade</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    
    <a href="/ass-courses/{{$tutCourse->id}}/ass/{{$assignment->id}}/submissions">Back</a>    
@endsection