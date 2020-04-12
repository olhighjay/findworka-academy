@extends('layouts.stu.stu')

@section('content')
    <!-- Header Message -->
    @section('header-message')
        <span>
            <h3> Payments Page &nbsp &nbsp &nbsp</h3>
        </span>
    @endsection

    <br><br>

    <div class="container justify-content-center " style="margin-left:20%">
        @if($payment_statuz->name == 'Paid')
                <h3>Sorry, You can't pay this time! </h3><br> 
               <h5> You currently have a program running. You can only apply</h5>
               <h5> for another program when  the current one is over</h5>
        @else
            <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal " role="form">
                <div class="row" style="margin-bottom:40px;">
                <div class="col-md-8 col-md-offset-2">
                    <p>
                        <div>
                            <h4>Payment for {{$program->name}}</h4>
                            <h4>Amount:{{$program->price}}</h4>
                            <p> You will be charged the sum of {{$program->price}} when you click on "Pay Now!"</p>
                            <b> Note:</b> We don't store your bank or card info, we only store the <br>transaction details for proper reference. Thanks
                        </div>
                    </p>
                <input type="hidden" name="email" value="{{$student->email}}"> {{-- required --}}
                    <input type="hidden" name="amount" value="{{$program->price }}00"> {{-- required in kobo --}}
                    <input type="hidden" name="metadata" value="{{ json_encode($array = ['purpose' => 'payment for'.' '. $program->name, 'program_id' => $program->id]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                    <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                    {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}


                    <p>
                    <button class="btn btn-success btn-lg btn-block " type="submit" value="Pay Now!" style="width:35%; margin-left:30px">
                    <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                    </button>
                    </p>
                </div>
                </div>
            </form>
        @endif
    </div>
    



@endsection