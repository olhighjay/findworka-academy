@extends('layouts.adm.admin2')

@section('content')

<style>
    .shift{
        margin-left: 25px;
    }
</style>

    <h2>Add Admin</h2>

    <div class="container">   
        <a href="/admin/admins" class="btn btn-default" style="background-color:orange; color:white; margin-top:20px" type="button">Back</a>
    </div> 

    <br>
    <div class="container">
        {!!Form::open(array('action'=>'AdminController@storeAdmin', 'method'=>'POST', 'enctype'=>'multipart/form-data'))!!}
                
            <div class="form-group">
                {{Form::label('firstname','First Name')}}
                {{Form::text('firstname','', ['class'=>'form-control', 'placeholder'=>'First Name'])}}
            </div>

            <div class="form-group">
                {{Form::label('lastname','Last Name')}}
                {{Form::text('lastname','', ['class'=>'form-control', 'placeholder'=>'Last Name'])}}
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
                {{Form::text('email','',['class'=>'form-control', 'placeholder'=>'Email Address'])}}
            </div>
                
            <div class="form-group">
                {{Form::label('password','Password')}}
                {{Form::text('password','',['class'=>'form-control', 'placeholder'=>'Input Password'])}}
            </div>
            
            <div style="padding-top:15px;">
                {{Form::submit('Create',['class'=>'btn btn-primary'])}}
            </div>
        {!!Form::close()!!}
        <br>
    </div>

@endsection