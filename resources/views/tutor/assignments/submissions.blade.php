@extends('layouts.tut.tut')

@section('content')
    <!-- Header Message -->
    @section('header-message')
        Students who have submitted this Assignment:
    @endsection

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        

    <table class="table table-light">
        <thead class="card-header">
            <tr>
                <th scope="col">S/N</th>
                <th scope="col">Student's Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $c=1; ?>
            @foreach($submissions as $submission)
            <tr >
                <td> {{$c++}}</td>
                <td> {{$submission->user->firstname}} {{$submission->user->lastname}}</td>
                <td> <a href="/ass-courses/{{$tutCourse->id}}/ass/{{$assignment->id}}/{{$submission->id}}/submission" class="btn btn-primary" style="background-color: #151B54"> Grade Solution</a> </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
    <a href="/ass-courses/{{$tutCourse->id}}/ass-list">Back</a>    
@endsection