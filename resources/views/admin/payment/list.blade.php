@extends ('layouts.adm.admin2')

@section('content')

    <h2>List of Payments by students</h2>
    
    <table class="table table-light">
        <thead class="card-header">
            <tr>
                <th class="shift" scope="col">S/N</th>    
                <th class="shift" scope="col">Student Name</th>
                <th class="shift" scope="col">Amount Paid (NGN)</th>
                <th class="shift" scope="col">Purpose of payment/Year</th>
                <th class="shift" scope="col">Date of Payment</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $c=1; ?>
            @foreach($payments as $payment)
            <tr>
                <td class="shift">{{$c++}}</td>
                <td class="shift">{{$payment->user->firstname}} &nbsp {{$payment->user->lastname}}</td>
                <td class="shift">₦{{$payment->price}}</td>
                <td class="shift">{{$payment->purpose . '/' . $payment->year}}</td>
                <td class="shift">{{$payment->created_at}}</td>
                
            </tr>
            @endforeach
        </tbody>
        
    </table>

@endsection