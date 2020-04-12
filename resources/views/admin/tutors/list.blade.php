@extends ('layouts.adm.admin2')

@section('content')

    <h2>List of Tutors</h2>
    
    <table class="table table-light">
        <thead class="card-header">
            <tr>
                <th class="shift" scope="col">S/N</th>    
                <th class="shift" scope="col">Name</th>
                <th class="shift" scope="col">Action</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $c=1 ?>
            @foreach($tutors as $tutor)
            <tr>
                <td class="shift">{{$c++}}</td>
                <td class="shift">{{$tutor->firstname}} &nbsp {{$tutor->lastname}}</td>
                <td class="shift">
                    <a href="/admin/tutors/{{$tutor->id}}" class="btn btn-primary" type="button">View </a>
                    <a href="/admin/tutors/{{$tutor->id}}/edit"><button class="btn btn-default" style="background-color:orange" type="button">Edit</button></a>
                    <a href="/admin/tutors/{{$tutor->id}}/add-course"><button class="btn btn-default" style="background-color:crimson; color:white" type="button">Courses</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>

@endsection