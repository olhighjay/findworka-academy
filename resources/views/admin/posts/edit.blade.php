@extends('layouts.adm.admin2')

@section('content')

    <h2>Edit Post</h2>

    <br>

    <div class="container">
        {{ Form::open(array('action' => ['AdminController@updatePost', $post->id], 'method'=>'PUT', 'enctype'=>'multipart/form-data')) }}
        @csrf
        
        <div class="container">
            <div>
                <label for="title"><b>Title</b></label>
                <input id="title" class="form-control" type="text" name="title" placeholder="Post Title" value="{{$post->title}}">
                <br>
                
                <label for="body"><b>Body</b></label>
                <textarea id="body" class="form-control" type="textarea" name="body" placeholder="Post body"> {!!$post->body!!}</textarea>
                <br>

                <label for="cover_image"><b>Upload Picture</b></label>
                <input id="cover_image" class="form-control" type="file" name="cover_image" >
                <br>

                <select id="program" class="custom-select" name="category">
                    @foreach ($programs as $program)
                                <option value = "{{$program->name}}"> {{$program->name}} </option>
                    @endforeach
                    <option value = "other"> Other </option>
                </select>

            </div>
            <br>
            <div>
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </div>
        {{ Form::close() }}
    
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