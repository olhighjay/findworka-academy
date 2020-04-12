@extends ('layouts.adm.admin2')

@section('content')

    <h2>Make Payment for student</h2>
    

     
    <form class="form-group" action="/admin/success-payment" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="container">
            <div>
                <br>
                <label for="user_id"><b>Student ID</b></label>
                <input id="user_id" class="form-control" type="number" name="user_id" placeholder=" Input Student ID">
                <br>

                <label for="price"><b>Amount Paid</b></label>
                <input id="price" class="form-control" type="number" step="0.01" name="price" placeholder="Input Amount">
                <br>

                <label for="purpose"><b>Purpose of Payment</b></label>
                <input id="purpose" class="form-control" type="text" name="purpose" placeholder="Input Purpose of Payment">
                <br>
                
                <label for="year"><b> Payment for Year/Session:</b></label>
                <input id="year" class="form-control" type="number" name="year" placeholder=" Input Year">
                <br>

                <div class="form-group">
                    <label for="program">Select Program Paid for</label>
                    <select id="program" class="custom-select" name="program">
                        @foreach ($programs as $program)
                                    <option value = "{{$program->id}}"> {{$program->name}} </option>
                        @endforeach
                    </select>
                </div>     
            </div>
            <div>
                <button class="btn btn-primary" type="submit">Create</button>
            </div>
        </div>
    </form>
@endsection