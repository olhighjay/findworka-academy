@extends ('layouts.adm.admin2')

@section('content')

    <h2>List of programs</h2>
    
    <table class="table table-light">
        <thead class="card-header">
            <tr>
                <th class="shift" scope="col">S/N</th>    
                <th class="shift" scope="col">Title</th>
                <th class="shift" scope="col">Action</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $c=1 ?>
            @foreach($programs as $program)
            <tr>
                <td class="shift">{{$c++}}</td>
                <td class="shift">{{$program->name}}</td>
                <td class="shift">
                    <a href="/admin/prog/{{$program->id}}/students" class="btn btn-primary" type="button">View students</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>

@endsection