@extends('layouts.adm.admin')

@section('content')
<style>
    td.shift{
        padding-left: 100px;
    }
    th.shift{
        padding-left:100px;
    }
</style>

    <div class="card">
        <!-- add page header -->
    <span class="card-header"><h6>List of Roles</h6></span>
    </div>   

    <table class="table table-light" style="padding-left:30px; padding-right:">
        <thead class="thead-light">
            <tr>
                <th class="shift" scope="col">ID</th>
                <th class="shift" scope="col">Name</th>
                <th class="shift" scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
                <tr>
                    <td class="shift">{{$role->id}}</td>
                    <td class="shift">{{$role->name}}</td>
                    <td class="shift"><a href="/roles/#"><button class="btn btn-primary" type="button">View</button></a>
                        <a href="/admin/roles/#"><button class="btn btn-danger" type="button">Edit</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

