@extends('layouts.stu.stu')

@section('content')
    <!-- Header Message -->
    @if($payment_statuz->name == 'Paid')
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
                @foreach($stuCourses as $stuCourse)
                <tr >
                    <td> {{$c++}}</td>
                    <td> <a href="/sub-courses/{{$stuCourse->id}}/assignments"> {{$stuCourse->name}} </a> </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
    @else
        @section('header-message')
            <span style="color:red"> Oops! Invalid page </span>
        @endsection

        @section('top-right-button')
            <li class="hidden-xs"><a href="/payment-form" class="add-project" >Make Payment</a></li>
        @endsection 

        <br> <br>
        <div class="container card" style="padding-bottom:50px; padding-top:30px; width:30%; text-align:center">
            <h3 style="color:darkred">Sorry, You are not authorized to view this page! </h3><br> 
             <p>Kindly pay up to be able to access this page and other </p>
            <p> materials put together by our experts to make</p>
            <p> your IT dream come to reality in a short while</p>
        </div>
    @endif
@endsection