@extends('layouts.tut.tut')

@section('content')
    <!-- Header Message -->
    @section('header-message')
        <h3>This is the list of students offering {{$tutCourse->name}} </h3>
    @endsection
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <table class="table table-light" style="margin:auto">
            <thead class="card-header">
                <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
                <?php $c=1; ?>
                @foreach($tStudents as $tStudent)
                
                <tr >
                    <td>{{$c++}} </td>
                    <td>{{$tStudent->firstname}} {{$tStudent->middlename}} {{$tStudent->lastname}}</td>
                </tr>
                @endforeach
            </tbody>
            
        </table>


        <br><br><br>
        <a href="/dashboard/tut-stu-crs">Back</a>
    
@endsection