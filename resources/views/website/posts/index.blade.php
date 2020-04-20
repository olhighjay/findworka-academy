@extends('layouts.app')

<head>
    
    <style>
        /* The hero image */
        .heyo-image {
        /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
        /* background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("/image/images/bnn8.jpg"); */
        
        /* Set a specific height */
        height: 80%;
        
        /* Position and center the image to scale nicely on all screens */
        background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: center;
        }
        
        /* Place text in the middle of the image */
        .heyo-text {
            text-align: left;
            position: absolute;
            top: 50%;
            left: 20%;
            transform: translate(-50%, -50%);
            color: white;
        }

            #contact .card:hover i,#contact .card:hover h4{
            color: crimson;
        }

        .fa{
            color: midnightblue;
        }

        .formu{
            background-color: #03274A !important;
            border-top-left-radius: 20px  !important;
            border-top-right-radius: 20px  !important;
        }

        div.card{
            width: 90%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .formul{
            border-radius: 20px  !important;
        }

        .btn1{
            border-radius: 10px  !important;
            margin-left: 23%
        }

        div#wrapperHeader {
        width:100%;
        height: 400px; /* height of the background image? */
        background:url(images/header.png) repeat-x 0 0;
        text-align:center;
        position: center;
        repeat: no-repeat;
        size: cover;
        position: center;
        }

        div#wrapperHeader div#header {
        width:1000px;
        height:400px;
        margin:0 auto;
        }

        div#wrapperHeader div#header img {
        width:100%; /* the width of the logo image */
        height:100%; /* the height of the logo image */
        /* margin:0 auto; */
        }

        div.blog{
            margin-top: 100px;
        }
    
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <link rel="stylesheet" href="css/etrain/style.css">

</head>

@section('content')
    

  <body>

 <!--   <div class="heyo-image" style="margin-top: -20px">
        <div class="heyo-text">
            <h1 >Contact us</h1>
            <p>Bringing IT dreams to reality</p>
            <a href="/register" class="btn btn-primary">Register Now!</a>
        </div>
    </div>  -->

    
    
        <div id="wrapperHeader" class= "heo-image" style="margin-top: -20px; position:center">
            <div id="header">
                @if($lastPost->cover_image != 'https://findworkaacad.s3.amazonaws.com/images/cover_images/noimage.jpg')
                    <img class= "heo-image" src="/image/cover_images/{{$lastPost->cover_image}}"  alt="">
                @else 
                    <img src="/image/cover_images/blog2.jpg" alt="">
                @endif
            </div>
            <h1 style="text-align:center; color:#0C2164 !important">Blog Posts</h1>
        </div>
        
    
    
    <br>
    <br>

    <div class="container blog">
        @if(count($posts)>0)
        @foreach($posts as $post)
               <div class=""> 
                   <div class="row">
                       <div class="col-dm-4 col-sm-4">
                       <img style="width:100%" src="{{$post->cover_image}}" height="250px" alt="cover image">
                       <br> <br> <br>
                       </div>
                       

                       <div class="col-dm-8 col-sm-8">
                            <h3 style="color:#0C2164 !important">{{$post->title}}</h3>
                            <p>{!!str_limit($post->body, 250)!!}</p> <a href="/blog/{{$post->title}}" >Read more</a>
                            
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
   
    <br>
    <br>
    <br>
    <br>
    <br>

    


<br>
<br>
<br>


  </body>
</html>



@endsection

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->