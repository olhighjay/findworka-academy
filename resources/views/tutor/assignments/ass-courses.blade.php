@extends('layouts.tut.tut')

@section('content')
    <!-- Header Message -->
    @section('header-message')
        Choose a course
    @endsection

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        

    <table class="table table-light">
        <thead class="card-header">
            <tr>
                <th scope="col">S/N</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            <?php $c=1; ?>
            @foreach($tutCourses as $tutCourse)
            <tr >
                <td> {{$c++}}</td>
                <td> <a href="/ass-courses/{{$tutCourse->id}}/ass-list"> {{$tutCourse->name}} </a> </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
    
@endsection