@extends('layouts.adm.admin')

@section('content')

    <div class="card">
        <!-- add page header -->
    <span class="card-header"><h6>Add Role</h6></span>
    </div>

    <div class="container">   
        <a href="/admin/roles" class="btn btn-default" style="background-color:orange; color:white; margin-top:20px" type="button">Back</a>
    </div> 

        <br>
        <form class="form-group" action="{{ action('RolesController@storeRoles') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="container">
                <div>
                    <label for="rolename"><b>Role Name</b></label>
                    <input id="rolename" class="form-control" type="text" name="name" placeholder="Input Role Name">
                    <br>

                    <b>Add Permission</b>
                    <br>
                    <div class="form-check ">
                        @foreach($permissions as $permission)
                            <input id="aperm" class="form-check-input" type="checkbox" name="permissions[]" value="{{$permission->id}}">
                            <label for="aperm" class="form-check-label">{{$permission->name}}</label> &nbsp &nbsp &nbsp &nbsp
                            <br>
                        @endforeach
                    </div>
                    
                </div>
            
                <br>
                <br>
                
                <div>
                    <button class="btn btn-primary" type="submit">Create</button>
                </div>
            </div>
        </form>


@endsection