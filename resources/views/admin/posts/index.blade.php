@extends('layouts.adm.admin2')

@section('content')

    <h2>Posts</h2>
    <hr>

    <br>

    <div class="container">
        @if(count($posts)>0)
        @foreach($posts as $post)
               <div class="well"> 
                   <div class="row">
                       <div class="col-dm-4 col-sm-4">
                       <img style="width:100%" src="public/storage/cover_images/{{$post->cover_image}}" height="250px" alt="cover image">
                       <br> <br> <br>
                       </div>
                       

                       <div class="col-dm-8 col-sm-8">
                            <h3><a href="/admin/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Written  {{$post->created_at->diffForHumans()}} by <strong>{{$post->admin->firstname}}</strong></small>
                            <hr><br> <br>
                       </div>
                   </div>
               </div>
        @endforeach
            
               {{ # Adding links to next and back page to pagination;
               $posts->links()}}
    @else
        {{'No post found'}}
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