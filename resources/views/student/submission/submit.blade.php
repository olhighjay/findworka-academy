@extends('layouts.stu.stu')

@section('content')
    <!-- Header Message -->
    @section('header-message')
        <h3> Submit assignment </h3>
    @endsection


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <br> <br>

 
        <div class="container" style="width:75%">
            <b> Assignment Question </b> <br> 
            {!!$assignment->body!!}
        </div>
        <hr>

        @if($submission->user_id== $student->id)
            <h3 class="container" style="color:red">You have already submitted a solution to this assignment!</h3>
        @else 
            <form class="form-group" action="/assignments/{{$assignment->id}}/submitted" method="POST" enctype="multipart/form-data">
                @csrf
                <div class= "container" style="width:75%">
                    <label for="title"><b>Title</b></label>
                    <input id="title" class="form-control" type="text" name="title" placeholder="Assignment Title">
                    <br>
                
                    
                    <label for="body"><b>Note</b></label>
                    <textarea id="body" class="form-control" type="textarea" name="body" placeholder="Assignment body"></textarea>
                    <br>

                    <label for="solution"><b>Solution</b></label>
                    <input id="solution" class="form-control" type="file" name="solution" >
                    <br>    
                
                    <div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
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