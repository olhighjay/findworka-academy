@extends('layouts.adm.admin2')

@section('content')

    <h2>Add Course</h2>

    <div class="container">   
        <a href="/admin/courses" class="btn btn-default" style="background-color:orange; color:white; margin-top:20px" type="button">Back</a>
    </div> 

    <br>
    <form class="form-group" action="{{ action('AdminController@storeCourse') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="container">
            <div>
                <label for="name"><b>Name</b></label>
                <input id="name" class="form-control" type="text" name="name" placeholder="Input course Name">
                <br>
                
                <label for="description"><b>Description</b></label>
                <textarea id="description" class="form-control" type="textarea" name="description" placeholder="Add Description"></textarea>
                <br>

                <div class="form-group">
                    <b>Select Program</b>
                        <br>
                    @foreach($programs as $program)
                    <input id="program" class="form-check-input" type="checkbox" name="program[]" value="{{$program->id}}">
                    <label for="program" class="form-check-label">{{$program->name}}</label> &nbsp &nbsp &nbsp &nbsp
                    <br>
                    @endforeach
                </div>  
                   
            </div>
            <div>
                <button class="btn btn-primary" type="submit">Create</button>
            </div>
        </div>
    </form>







@endsection