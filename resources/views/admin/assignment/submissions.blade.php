@extends ('layouts.adm.admin2')

@section('content')

    <h2>Assignment Question</h2>
        <br>
        {!!$assignment->body!!}
        <br>
     

    

        <br><br>
        <h4>Submission list</h4>
    <table class="table table-light">
        <thead class="card-header">
            <tr>
                <th scope="col">S/N</th>
                <th scope="col">Student's Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $c=1; ?>
            @foreach($submissions as $submission)
            <tr >
                <td> {{$c++}}</td>
                <td> {{$submission->user->firstname}} {{$submission->user->lastname}}</td>
                <td> <a href="/admin/ass-course/{{$course->id}}/ass/{{$assignment->id}}/{{$submission->id}}/submission" 
                    class="btn btn-primary" style="background-color: #151B54"> View Solution</a> </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
    
@endsection