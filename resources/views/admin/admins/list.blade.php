@extends ('layouts.adm.admin2')

@section('content')

    <h2>List of Admins</h2>
    
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
             @foreach($admins as $admin)
                <tr>
                    <td class="shift">{{$c++}}</td>
                    <td class="shift">{{$admin->firstname}} &nbsp {{$admin->lastname}}</td>
                    <td class="shift">
                        <a href="/admin/admins/{{$admin->id}}" class="btn btn-primary" type="button">View </a>
                        <a href="/admin/admins/{{$admin->id}}/edit"><button class="btn btn-danger" type="button">Edit</button></a>
                    </td>
                </tr>
             @endforeach
         </tbody>
         
     </table>

@endsection