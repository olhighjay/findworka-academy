@extends('layouts.adm.admin2')

@section('content')

    <h2>My Posts</h2>
    <br>

    <div class="container">
        <table class="table table-stripped">
            @if(count($posts)>0)
                <tr>
                    <th>Post Title</th>
                    <th></th>
                    <th></th>
                </tr>

                    @foreach($posts as $post)
                        <tr>
                            <td><h4><a href="/admin/posts/{{$post->id}}">{{$post->title}}</a></h4></td>
                            <td><a href="/admin/posts/{{$post->id}}/edit" class="btn btn-default" style="border-color: greenyellow; background-color:darkblue; color:white">Edit</a></td>
                            <td>
                                {!!Form::open(['action'=>['AdminController@destroyPost', $post->id], 'method'=>'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </td>
                        </tr>     
                    @endforeach
            @else 
                   <h4> You have no post yet </h4> 
                   <br>
                    <a href="/admin/create-post" class="btn btn-default" style="border-color: greenyellow; background-color:darkblue; color:white">Create Post</a>
            @endif
           </table>
            
               {{ # Adding links to next and back page to pagination;
               $posts->links()}}
    
    </div>

@endsection

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector:'textarea',
        width: 900,
        height: 300
    });
</script>