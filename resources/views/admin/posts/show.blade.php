@extends('layouts.adm.admin2')

@section('content')


    <br>

    <div class="container">
        <a href="/admin/posts" class="btn btn-default" style="margin-top: 10px; background-color:cornflowerblue; color:cornsilk; border-radius=30px"> << Go Back </a>
        <h2 style="margin-top: 20px">{{$post->title}}</h2>
        <img style="width:80%" src="/image/cover_images/{{$post->cover_image}}"  height="70%" alt="cover image">
        <br>
        <br>
        <br>
        <div>
            {!!$post->body!!}
        </div>
            <hr>
            <small>Written on {{$post->created_at}}</small>
                <br>
            @if(!Auth::guest())
                @if(Auth::user()->id==$post->admin_id)
                    <span><a href="/admin/posts/{{$post->id}}/edit" class="btn btn-default" style="border-color: greenyellow; background-color:darkblue; color:white">Edit</a></span>
                    <div  class="pull-right" style="float: right;">
                        {!!Form::open(['action'=>['AdminController@destroyPost', $post->id], 'method'=>'POST'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                        {!!Form::close()!!}
                    </div>
                @endif
            @else 

            @endif
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