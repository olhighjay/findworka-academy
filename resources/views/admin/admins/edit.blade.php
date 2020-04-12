@extends('layouts.adm.admin2')

@section('content')

<style>
    .shift{
        margin-left: 25px;
    }
</style>

    <h2>Edit Admin</h2>
    
    <div class="container">   
        <a href="/admin/admins" class="btn btn-default" style="background-color:orange; color:white; margin-top:20px" type="button">Back</a>
    </div> 

    <br>
    <div class="container">
        {!!Form::open(array('action'=>['AdminController@updateAdmin',$admin->id], 'method'=>'PUT', 'enctype'=>'multipart/form-data'))!!}
                
            <div class="form-group">
                {{Form::label('firstname','First Name')}}
                {{Form::text('firstname',$admin->firstname, ['class'=>'form-control', 'placeholder'=>'First Name'])}}
            </div>

            <div class="form-group">
                {{Form::label('lastname','Last Name')}}
                {{Form::text('lastname',$admin->lastname, ['class'=>'form-control', 'placeholder'=>'Last Name'])}}
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
                {{Form::text('email',$admin->email, ['class'=>'form-control', 'placeholder'=>'Email Address'])}}
            </div>

            
            <div style="padding-top:15px;">
                {{Form::submit('Update',['class'=>'btn btn-primary'])}}
            </div>
        {!!Form::close()!!}
        <br>
    </div>

@endsection