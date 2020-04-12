@extends('layouts.app')

<head>

    <style>
        /* The hero image */
        .heyo-image {
        /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("/storage/images/bnn8.jpg");
        
        /* Set a specific height */
        height: 80%;
        
        /* Position and center the image to scale nicely on all screens */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
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
    
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">


</head>

@section('content')
    

  <body>

    <div class="heyo-image" style="margin-top: -20px">
        <div class="heyo-text">
            <h1 >Contact us</h1>
            <p>Bringing IT dreams to reality</p>
            <a href="/register" class="btn btn-primary">Register Now!</a>
        </div>
    </div>
    <br>
    <br>

    
    <br>
    <br>
    <br>
    <br>
    <br>

    

<div class="container form" style="background-color:#EBEBF3">
    <h2 class="text-center" >Contact Form</h2>
	
</div>
<br>
<br>
<br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  </body>
</html>



@endsection