@extends ('layouts.adm.admin2')

@section('content')

    <h2> Choose a Course</h2>

    <table class="table table-light">
        <thead class="card-header">
            <tr>
                <th scope="col">S/N</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            <?php $c=1; ?>
            @foreach($courses as $course)
            <tr >
                <td> {{$c++}}</td>
                <td> <a href="/admin/{{$course->id}}/ass-list"> {{$course->name}} </a> </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
    
@endsection