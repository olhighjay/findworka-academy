@extends('layouts.tut.tut')

@section('content')
    <!-- Header Message -->
    @section('header-message')
        This is the list of all the courses 
    @endsection

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        

    <table class="table table-light">
        <thead class="card-header">
            <tr>
                <th scope="col">S/N</th>
                <th scope="col">Name</th>
                <th scope="col">Program</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            <?php $c=1; ?>
            @foreach($courses as $course)
            <tr >
                <td style="width: 10%">{{$c++}}</td>
                <td style="width: 25%">{{$course->name}}</td>
                <td style="width: 25%"> {{$course->program()->first()->name}}</td>
                <td style="width: 40%">{{$course->description}}</td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
    
@endsection