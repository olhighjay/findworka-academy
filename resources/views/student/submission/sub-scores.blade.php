@extends('layouts.stu.stu')

@section('content')
    <!-- Header Message -->
    @section('header-message')
       <h3> {{$stuCourse->name}} Assignment scores </h3>
            
    @endsection


        <table class="table table-light" style="margin:auto">
            <thead class="card-header">
                <tr>
                    <th scope="col"><h5><b>S/N</b></h5></th>
                    <th scope="col"><h5><b>Assignment Title</b></h5></th>
                    <th scope="col"><h5><b>Grade/100</b></h5></th>
                    <th scope="col"><h5><b>Remarks</b></h5></th>

                </tr>
            </thead>
            <tbody>
                <?php $c=1; ?>
                @foreach($submissions as $submission) 
                    @if(isset($submission))
                        <tr >
                            <td><h5>{{$c++}} </h5></td>
                            <td><h5>{{$submission->assignment()->first()->title}}</h4></td>   
                            <td> <h5>{{$submission->grade}} </h5></td>
                            <td> <h5>{{$submission->remarks}} </h5></td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
            
        </table>


        <br><br><br>
        <a href="/sub-courses/{{$stuCourse->id}}/assignments/">Back</a>
    
@endsection