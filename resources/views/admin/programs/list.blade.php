@extends('layouts.adm.admin2')

@section('content')
<style>
    td.shift{
        padding-left: 100px;
    }
    th.shift{
        padding-left:100px;
    }
</style>

    <h2>List of Programs</h2>  

    <table class="table table-light" style="padding-left:30px; padding-right:">
        <thead class="card-header">
            <tr>
                <th class="shift" scope="col">S/N</th>
                <th class="shift" scope="col">Name</th>
                <th class="shift" scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $c=1 ?>
            @foreach($programs as $program)
                <tr>
                    <td class="shift">{{$c++}}</td>
                    <td class="shift">{{$program->name}}</td>
                    <td class="shift"><a href="/admin/programs/{{$program->id}}"><button class="btn btn-primary" type="button">View</button></a>
                        <a href="/admin/programs/{{$program->id}}/edit"><button class="btn btn-danger" type="button">Edit</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

