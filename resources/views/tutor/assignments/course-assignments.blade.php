@extends('layouts.tut.tut')

@section('content')
    <!-- Header Message -->
    @section('header-message')
        <h3>{{$tutCourse->name}} </h3>
    @endsection

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <table class="table table-light" style="margin:auto">
            <thead class="card-header">
                <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Title</th>
                    <th scope="col">View</th>
                </tr>
            </thead>
            <tbody>
                <?php $c=1; ?>
                @foreach($assignments as $assignment)
                
                <tr >
                    <td>{{$c++}} </td>
                    <td>{{$assignment->title}}</td>
                    <td> <a class="btn btn-primary" style="background-color:green" href="/ass-courses/{{$tutCourse->id}}/{{$assignment->id}}/edit">Edit Assignment</a>  
                        <a class="btn btn-primary" style="background-color:blue" href="/ass-courses/{{$tutCourse->id}}/{{$assignment->id}}/scores">Scores</a>   
                        <a class="btn btn-primary" style="background-color:crimson" href="/ass-courses/{{$tutCourse->id}}/ass/{{$assignment->id}}/submissions">Submissions</a></td>
                </tr>
                @endforeach
            </tbody>
            
        </table>


        <br><br><br>
        <a href="/ass-courses/">Back</a>
    
@endsection