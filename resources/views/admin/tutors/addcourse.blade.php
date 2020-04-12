@extends ('layouts.adm.admin2')

@section('content')

    <div class="card">
        <h2> {{$user->firstname}}'s Assigned Courses</h2>
     
    
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
                @foreach($courzes as $courze)
                    <tr>
                        <td class="shift">{{$courze->id}}</td>
                        <td class="shift">{{$courze->name}}</td>
                        <td class="shift">
                        <div >
                            <form action="/admin/tutors/{{$user->id}}/neg-course" method="POST">
                                @csrf
                                <input type="hidden" name="remove_course" value="{{$courze->id}}" />
                                <button type="submit" class="btn btn-danger">Remove Course</button>
                            </form>
                        
                        </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
        </table>
    </div>

    <br> <br> <br>

    <div class="card">
            <!-- add page header -->
        <span class="card-header"><h6>All Courses</h6></span>
        
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th class="shift" scope="col">ID</th>    
                    <th class="shift" scope="col">Name</th>
                    <th class="shift" scope="col">Action</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td class="shift">{{$course->id}}</td>
                        <td class="shift">{{$course->name}}</td>
                        <td class="shift">
                            <div >
                                <form action="/admin/tutors/{{$user->id}}/add-course" method="POST">
                                    @csrf
                                    <input type="hidden" name="add_course" value="{{$course->id}}" />
                                    <button type="submit" class="btn btn-primary">Add Course</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                
                
                
                @endforeach
            </tbody>
            
        </table>
    </div>

@endsection