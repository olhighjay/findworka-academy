@extends ('layouts.adm.admin2')

@section('content')

    <h2>List of Students</h2> 
    
    <table class="table table-light">
        <thead class="card-header">
            <tr>
                <th class="shift" scope="col">ID</th>    
                <th class="shift" scope="col">Name</th>
                <th class="shift" scope="col">Action</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td class="shift">{{$student->id}}</td>
                <td class="shift">{{$student->firstname}} &nbsp {{$student->lastname}}</td>
                <td class="shift">
                    <a href="/admin/student/{{$student->id}}" class="btn btn-primary" type="button">View </a>
                    <a href="/admin/student/{{$student->id}}/courses"><button class="btn btn-default" style="background-color:crimson; color:white" type="button">Courses</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>

@endsection