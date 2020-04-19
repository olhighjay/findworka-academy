@extends('layouts.adm.admin2')

@section('content')

    <h2>Create Post</h2>

    <br>

    <div class="container">
    <form class="form-group" action="/admin/create-post" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="container">
            <div>
                <label for="title"><b>Title</b></label>
                <input id="title" class="form-control" type="text" name="title" placeholder="Post Title">
                <br>
                
                <label for="body"><b>Body</b></label>
                <textarea id="body" class="form-control" type="textarea" name="body" placeholder="Post body"></textarea>
                <br>

                <label for="file"><b>Upload Picture</b></label>
                <input id="file" class="form-control" type="file" name="file" >
                <br>

                <label for="program">Select Category</label>
                <select id="program" class="custom-select" name="category">
                    @foreach ($programs as $program)
                                <option value = "{{$program->name}}"> {{$program->name}} </option>
                    @endforeach
                    <option value = "other"> Other </option>
                </select>
                

            </div>
            <br>
            <div>
                <button class="btn btn-primary" type="submit">Create</button>
            </div>
        </div>
    </form>
    
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