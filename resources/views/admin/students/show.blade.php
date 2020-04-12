@extends ('layouts.adm.admin2')

@section('content')

<style>
    .shift{
        margin-left: 25px;
    }
</style>

    <h2>Tutor</h2>

    <div class="container">   
        <a href="/admin/students" class="btn btn-default" style="background-color:orange; color:white; margin-top:20px" type="button">Back</a>
    </div> 

    <div class="container">
        <div>
            <br>
                <br> <h5> <b>Firstname :</b> &nbsp {{$student->firstname}}    </h5>
                <br> <h5> <b>Middlename : </b> &nbsp {{$student->middlename}}   </h5>
                <br> <h5> <b>Lastname : </b> &nbsp {{$student->lastname}}   </h5>
                <br> <h5> <b>Gender : </b> &nbsp {{$student->gender->name}}    </h5>
                <br> <h5> <b>Age : </b> &nbsp {{$student->age}}   </h5>
                <br> <h5> <b>Nationality : </b> &nbsp {{$student->nationality}}   </h5>
                <br> <h5> <b>State : </b> &nbsp {{$student->state}}   </h5>
                {{-- <br> <h5> <b>Cuurent Address : </b> &nbsp {{$student->address->name}}   </h5> --}}
                <br> <h5> <b>Phone Number : </b> &nbsp {{$student->phone_number}}   </h5>
                <br> <h4><b> Email : </b> &nbsp {{$student->email}}  </h5>
                <br> <h5><b> Role : </b> &nbsp student  </h5>
                <br> <h4><b> Status : </b> &nbsp {{$student->suspension->name}}  </h5>
                <br> <h5> <b>Current Program : </b> &nbsp{{$stuProg->name .'/'. $payment_statuz->name}}   </h5>
                <br> <h5> <b>Previous Programs : </b> &nbsp
                    @foreach($stuPrograms as $stuProgram)
                        {{$stuProgram->name }} <br>  </h5>
                    @endforeach

                   
           
            <br>
        </div>
    

        <div  class="pull-right" style="float: right;">
            {!!Form::open(['action'=>['AdminController@destroyStudent', $student->id], 'method'=>'POST'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
            {!!Form::close()!!}
        </div>
        
        @if($student->suspension_id == 1)
        
            <div >
                {!!Form::open(['action'=>['SuspensionsController@suspendStudent', $student->id], 'method'=>'POST'])!!}
                    {{Form::submit('Suspend', ['class'=>'btn btn-default', 'style'=>'background-color:orangered;color:white'])}}
                {!!Form::close()!!}
            </div>
        @else
            <div >
                {!!Form::open(['action'=>['SuspensionsController@unsuspendStudent', $student->id], 'method'=>'POST'])!!}
                    {{Form::submit('Unsuspend', ['class'=>'btn btn-default', 'style'=>'background-color:orangered;color:white'])}}
                {!!Form::close()!!}
            </div>
        @endif
    </div>
        
    
    
@endsection