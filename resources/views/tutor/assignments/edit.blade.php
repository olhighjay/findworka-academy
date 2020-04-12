@extends('layouts.tut.tut')

@section('content')
    <!-- Header Message -->
    @section('header-message')
        Edit Assignment
    @endsection

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    {{ Form::open(array('action' => ['AssignmentsController@updateAssignmentTut', $course->id, $assignment->id], 'method'=>'PUT', 'enctype'=>'multipart/form-data')) }}
        @csrf
        <div class="container">
            <div>
                <label for="title"><b>Title</b></label>
                <input id="title" class="form-control" type="text" name="title" placeholder="Assignment Title" value="{!! $assignment->title !!}">
                <br>
                
                <label for="body"><b>Body</b></label>
                <textarea id="body" class="form-control" type="textarea" name="body" placeholder="Assignment body">{!! $assignment->body !!}</textarea>
                <br>   
            </div>
            <div>
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </div>
    {{ Form::close() }}
    
@endsection

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector:'textarea',
        width: 900,
        height: 300
    });
</script>