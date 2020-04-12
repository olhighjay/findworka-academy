@extends ('layouts.adm.admin2')

@section('content')

    <h2>{{$assignment->title}} scores</h2> 

    

        
    <table class="table table-light">
        <thead class="card-header">
            <tr>
                <th scope="col">S/N</th>
                <th scope="col">Student's Name</th>
                <th scope="col">Grade</th>
                <th scope="col">Remarks</th>
            </tr>
        </thead>
        <tbody>
            <?php $c=1; ?>
            @foreach($submissions as $submission)
            <tr >
                <td> {{$c++}}</td>
                <td> {{$submission->user->firstname}} {{$submission->user->lastname}}</td>
                <td> {{$submission->grade}} </td>
                <td> {{$submission->remarks}} </td>
            </tr>
            @endforeach
        </tbody>
            
        </table>
    
@endsection