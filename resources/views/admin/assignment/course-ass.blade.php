@extends ('layouts.adm.admin2')

@section('content')

    ><h2> Assignments for {{$course->name}} </h2> 

    <table class="table table-light" style="margin:auto">
        <thead class="card-header">
            <tr>
                <th scope="col">S/N</th>
                <th scope="col">Title</th>
                <th scope="col">View</th>
            </tr>
        </thead>
        <tbody>
            <?php $c=1; ?>
            @foreach($assignments as $assignment)
            
            <tr >
                <td>{{$c++}} </td>
                <td style="width:50%">{{$assignment->title}}</td>
                <td> <a class="btn btn-primary" style="background-color:blue" href="/admin/ass-course/{{$course->id}}/{{$assignment->id}}/scores">Scores</a>   
                    <a class="btn btn-primary" style="background-color:crimson" href="/admin/ass-course/{{$course->id}}/{{$assignment->id}}/submissions">Submissions</a>
                    <span class="pull-right" style="float: right;">
                        {!!Form::open(['action'=>['AdminController@destroyAssignment',$course->id,$assignment->id], 'method'=>'POST'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete Assignment ', ['class'=>'btn btn-danger'])}}
                        {!!Form::close()!!}
                    </span>
                </td>    
            </tr>
            @endforeach
        </tbody>
        
    </table>

    
@endsection