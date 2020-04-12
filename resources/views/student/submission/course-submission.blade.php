@extends('layouts.stu.stu')

@section('content')
    <!-- Header Message -->
    @section('header-message')
        <span>
            <h3>{{$stuCourse->name}} Assignments &nbsp &nbsp &nbsp</h3>
        </span>
    @endsection

    @section('top-right-button')
        <li class="hidden-xs"><a href="/sub-courses/{{$stuCourse->id}}/scores" class="btn btn-primary" style="background-color:blue" > View Scores</a></li>
    @endsection 


        <table class="table table-light" style="margin:auto">
            <thead class="card-header">
                <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $c=1; ?>
                @foreach($assignments as $assignment)
                
                <tr >
                    <td>{{$c++}} </td>
                    <td>{{$assignment->title}}</td>   
                      <td>  <a class="btn btn-primary" style="background-color:crimson" href="/sub-courses/{{$stuCourse->id}}/assignments/{{$assignment->id}}/submit">Submit</a></td>
                </tr>
                @endforeach
            </tbody>
            
        </table>


        <br><br><br>
        <a href="/sub-courses/">Back</a>
       
        
@endsection