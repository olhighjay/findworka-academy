@extends('layouts.adm.admin2')

@section('content')

    <h2>List of Courses</h2>


    <table class="table table-light">
        <thead class="card-header">
            <tr>
                <th scope="col">S/N</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $c=1 ?>
            @foreach($courses as $course)
            <tr >
                <td>{{$c++}}</td>
                <td style="width: 30%">{{$course->name}}</td>
                <td style="width: 40%">{{$course->description}}</td>
                <td class="shift1">
                    <a href="/admin/courses/{{$course->id}}" class="btn btn-primary" type="button">View </a>
                    <a href="/admin/courses/{{$course->id}}/edit"><button class="btn btn-danger" type="button">Edit</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
    
@endsection