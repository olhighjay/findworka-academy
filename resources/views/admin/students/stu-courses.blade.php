@extends ('layouts.adm.admin2')

@section('content')

    <h2>List of {{$student->firstname}}'s Courses</h2>  
    
    <table class="table table-light">
        <thead class="card-header">
            <tr>
                <th class="shift" scope="col">S/N</th>    
                <th class="shift" scope="col">Course Title</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $c=1; ?>
            @foreach($stuCourses as $stuCourse)
            <tr>
                <td class="shift">{{$c++}}</td>
                <td class="shift">{{$stuCourse->name}}</td>
            </tr>
            @endforeach
        </tbody>
        
    </table>

@endsection