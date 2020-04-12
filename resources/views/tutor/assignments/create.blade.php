@extends('layouts.tut.tut')

@section('content')
    <!-- Header Message -->
    @section('header-message')
        Create Assignment
    @endsection

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        

    <form class="form-group" action="/tut-ass" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="container">
            <div>
                <label for="title"><b>Title</b></label>
                <input id="title" class="form-control" type="text" name="title" placeholder="Assignment Title">
                <br>
                
                <label for="body"><b>Body</b></label>
                <textarea id="body" class="form-control" type="textarea" name="body" placeholder="Assignment body"></textarea>
                <br>

                <div class="form-group">
                    <label for="course">Select Course</label>
                    <select id="course" class="custom-select" name="course">
                        @foreach ($courses as $course)
                                    <option value = "{{$course->id}}"> {{$course->name}} </option>
                        @endforeach
                    </select>
                </div>     
            </div>
            <div>
                <button class="btn btn-primary" type="submit">Create</button>
            </div>
        </div>
    </form>
    
@endsection

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector:'textarea',
        width: 900,
        height: 300
    });
</script>