@extends('layouts.tut.tut')

@section('content')
    <!-- Header Message -->
    @section('header-message')
        This is the list of courses with their students 
    @endsection

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        


    <table class="table table-light">
        <thead class="card-header">
            <tr>
                <th scope="col">S/N</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $c=1; ?>
            @foreach($tutCourses as $tutCourse)
            <tr >
                <td style="width: 10%"> {{$c++}}</td>
                <td style="width: 25%"> {{$tutCourse->name}}</td>
                <td><a class="btn btn-primary" href="/dashboard/tut-stu-crs/{{$tutCourse->id}}/students">View Students</a> </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>

@endsection