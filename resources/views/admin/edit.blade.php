@extends('layouts.adm.admin2')

@section('content')
    
    <h2>  Edit Details</h2>

    <br>
    <div class="container">
        <form action="/admin/update" method="POST" style="margin:auto" enctype="multipart/form-data">
            @csrf        
            <div class="file btn btn-lg btn-primary form-group" style="position: relative; overflow: hidden; text-align:center">
                choose profile picture
                <input style="  position: absolute; font-size: 50px; opacity: 0; right: 0; top: 0;" type="file" name="profile_picture" accept="image/*" />
            </div> <br>
        
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
        </form>
        <br>
    </div>



@endsection