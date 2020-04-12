@extends('layouts.adm.admin2')

@section('content')

<style>
    .shift{
        margin-left: 25px;
    }
</style>

    <h2>Admin</h2>

    <div class="container">   
        <a href="/admin/admins" class="btn btn-default" style="background-color:orange; color:white; margin-top:20px" type="button">Back</a>
    </div> 

    <div class="container">
        <br>
            <br> <h4> Firstname: {{$admin->firstname}}    </h4>
            <br> <h4> Lastname: {{$admin->lastname}}   </h4>
            <br> <h4> Gender:   {{$admin->gender->name}}    </h4>
            <br> <h4> Email:    {{$admin->email}}  </h4>
            <br> <h4> Status : &nbsp {{$admin->suspension->name}}  </h5>
            <br> <h4> Date created: {{$admin->created_at}} </h4>
            <br> <h4> Last updated: {{$admin->updated_at}} </h4>

        <br>

        <a href="/admin/admins/{{$admin->id}}/edit" class="btn btn-primary" >Edit</a>
    

        <div  class="pull-right" style="float: right;">
            {!!Form::open(['action'=>['AdminController@destroyAdmin', $admin->id], 'method'=>'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
            {!!Form::close()!!}
        </div>

        
    </div>
        
    
    
@endsection