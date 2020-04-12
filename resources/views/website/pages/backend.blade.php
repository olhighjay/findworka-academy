@extends('layouts.app')

<head>

<style>
    /* The hero image */
    .heyo-image {
      /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
      background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.3)), url("/storage/images/be1.jpg");
    
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
      top: 70%;
      left: 20%;
      transform: translate(-50%, -50%);
      color: white;
    }

    .rectangle{
      background-color: crimson;
      border-radius:10px;
      margin-top:50px;
      width: 40%;
      height: 35px;
      margin-left:15%;
      color:white;
    }

    body{
      color:0C2164 !important;
    }

    
/* 
    .btn{
      background-color: #E42E15 !important;
    }

    .btn:hover{
      background-color:indianred !important;
    } */

    
    
    </style>
    <link rel="stylesheet" href="css/etrain/style.css">
    
</head>
    
@section('content')


    <div class="heyo-image" style="margin-top: -20px">
        <div class="heyo-text">
            <a href="#" class="btn btn-primary">Download Curriculum</a>
        </div>
    </div>
    <br>
    <br>
    <br>


    <section class="learning_part">
        <div class="container">
        <div class="row align-items-sm-center align-items-lg-stretch">
        <div class="col-md-7 col-lg-7">
        <div class="bb">
        <img src="/storage/images/be9.jpg" width="480px" alt="">
        </div>
        <br>
        <br>
        <br>
        <br>
        <h1 style="color:#0C2164 !important">Back end Development</h1>
        <h4 style="color:#0C2164 !important">What is Back end Development? </h4>
        <p style="color:0C2164 !important">Back end Development refers to the server side of development where you are primarily focused on how the site works. 
          Making updates and changes in addition to monitoring functionality of the site will be your primary responsibility. </p>

        <p>This type of web development usually consists of three parts: a server, an application, and a database. 
          Code written by back end developers is what communicates the database information to the browser. </p>
        <p>Anything you can’t see easily 
          with the eye such as databases and servers is the work of a back end developer.  
          Back end developer positions are often called programmers or web developers..</p>
          
        <br>
        <br>
        <br>
        <div class="box ">
          <h3 style="text-align:center; margin-left:-70px"><b>PRICE: N150,000</b></h3>
          <a class="btn btn-default tt" style="width:70%; border-radius:20px !important; color:white !important; margin-left:8% " href="/register"><strong>Enroll Now </strong></a>
       </div>
        </div>


        <div class="col-md-5 col-lg-5">
        <div class="learning_member_text">
          <h4 style="color:#0C2164 !important">Back end Programming Languages </h4>
          <p>Many back end developers know front end languages such as HTML and CSS but need to use languages such as Java, PHP, Ruby on Rails, 
            Python, and .Net to get the back end job done. </p>
          <p>Back end developers are most focused on a site’s responsiveness and speed.</p> 
          <p>These languages are used to create dynamic sites which 
            are different from static sites in that these types of websites store database information. </p> 
          <p>Content on the site is constantly changing 
            and updating. Examples of dynamic sites include Facebook, Twitter, and Google Maps. </p>
  
        <br>
        

        <h4 style="color:#0C2164 !important"> Back end Development Jobs </h4>
        <p>According to PayScale, the national average starting salary for back end developers is about $70k. </p> 
        <p> The salary ranges from about 
          $38k-$117k based on experience, location, and industry. </p>
        <p> According to SimplyHired, in NYC, starting salary is about $87k with an 
          approximate range to $120k. Again, not too shabby. </p>
        <br>
        <br>


        <div class="aa">
          <img src="/storage/profile_pictures/findworka-map.jpg" width="300px" alt="">
        </div>

        </div>
        </div>
        </div>
        </div>
        </section>

        


@endsection
