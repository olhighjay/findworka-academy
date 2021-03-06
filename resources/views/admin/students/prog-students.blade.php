@extends ('layouts.adm.admin2')

@section('content')

    <h2>List of Students offering {{$program->name}}</h2>
    
    <table class="table table-light">
        <thead class="card-header">
            <tr>
                <th class="shift" scope="col">S/N</th>    
                <th class="shift" scope="col">Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $c=1 ?>
            @foreach($proStudents as $proStudent)
            <tr>
                <td class="shift">{{$c++}}</td>
                <td class="shift">{{$proStudent->firstname}} &nbsp {{$proStudent->lastname}}</td>
            </tr>
            @endforeach
        </tbody>
        
    </table>

@endsection