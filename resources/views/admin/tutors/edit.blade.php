@extends('layouts.adm.admin2')

@section('content')

<style>
    .shift{
        margin-left: 25px;
    }
</style>

    <h2>Edit Tutor</h2>

    <div class="container">   
        <a href="/admin/tutors" class="btn btn-default" style="background-color:orange; color:white; margin-top:20px" type="button">Back</a>
    </div> 

    <br>
    <div class="container">
        {!!Form::open(array('action'=>['AdminController@updateTutor',$tutor->id],  'method'=>'PUT', 'enctype'=>'multipart/form-data'))!!}
                
            <div class="form-group">
                {{Form::label('firstname','First Name')}}
                {{Form::text('firstname',$tutor->firstname, ['class'=>'form-control', 'placeholder'=>'First Name'])}}
            </div>

            <div class="form-group">
                {{Form::label('lastname','Last Name')}}
                {{Form::text('lastname',$tutor->lastname, ['class'=>'form-control', 'placeholder'=>'Last Name'])}}
            </div>

            <b>Gender</b>
            <div class="form-check form-check-inline shift">
                @foreach ($genders as $gender)
                    <label for="gender" class="hey">{{$gender->name}}</label> &nbsp
                    <input id="gender" class="hey" type="radio" name="gender" value="{{$gender->id}}">
                    &nbsp &nbsp &nbsp &nbsp &nbsp
                @endforeach
            </div>
                
            <div class="form-group">
                {{Form::label('email', 'Email Address')}}
                {{Form::text('email',$tutor->email,['class'=>'form-control', 'placeholder'=>'Email Address'])}}
            </div>


                @foreach($courses as $course)
                <div class="form-check">
                    @if($tutor->course->where('id', $course->id)->count() > 0)
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{ $course->id }}" name="courses[]" checked="checked">
                    @else
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{ $course->id }}" name="courses[]">
                    @endif
                      <label class="form-check-label" for="inlineCheckbox1">{{ $course->name }}</label>
                    </div>
                @endforeach
                  
                    
                @csrf
            <div style="padding-top:15px;">
                {{Form::submit('Update',['class'=>'btn btn-primary'])}}
            </div>
        {!!Form::close()!!}
        <br>
    </div>

@endsection