@extends('layouts.adm.admin2')

@section('content')

    <h2>Edit Course</h2> 

    <div class="container">   
        <a href="/admin/courses" class="btn btn-default" style="background-color:orange; color:white; margin-top:20px" type="button">Back</a>
    </div> 

    <div class="container">
        <div>
            {!! Form::open(array('action' =>['AdminController@updateCourse', $course->id], 'method'=>'PUT', 'enctype'=>'multipart/form-data')) !!}
            <div class="form-group">
                {{form::label('name', 'Name')}}
                {{form::text('name', $course->name, ['class'=>'form-control', 'placeholder'=>'Name'])}}
            </div>

            <div class="form-group">
                {{form::label('description', 'Description')}}
                {{form::text('description', $course->description, ['id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Add Description'])}}
            </div>

            <b>Select Program</b>
                    <br>
            @foreach($programs as $program)
                <div class="form-group">
                    @if($course->program->where('id', $program->id)->count() > 0)
                        <input id="program" class="form-check-input" type="checkbox" name="program[]" value="{{$program->id}}" checked="checked">
                    @else
                        <input id="program" class="form-check-input" type="checkbox" name="program[]" value="{{$program->id}}">
                    @endif
                    <label for="program" class="form-check-label">{{$program->name}}</label> &nbsp &nbsp &nbsp &nbsp
                    <br>
                </div> 
            @endforeach    
        
                {{form::submit('Update', ['class'=>'btn btn-primary'])}}
    
            {!! Form::close() !!}
        </div>
        <br>
    </div>



@endsection