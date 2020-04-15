@extends('layouts.app')

<head>

<style>
    /* The hero image */
    .heyo-image {
      /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
      background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.3)), url("/image/images/mad12.jpg");
    
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
      top: 60%;
      left: 25%;
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
            <h1>MOBILE APP DEVELOPMENT</h1>
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
        <div class="jj">
        <img src="/image/images/mad3.png" width="430px" style="margin-left:50px" alt="">
        </div>
        <br>
        <br>
        <br>
        <br>
        <h1 style="color:#0C2164 !important">Mobile App Development</h1>
        <p >Mobile development refers to creating applications and any other kind of software development specific to mobile devices, 
            including tablets and smart watches. </p>
        <p>    Mobile development seeks to optimize functionality and user experience on mobile devices, 
            as there are important differences between mobile and desktop UX. Stay current on all things mobile development, 
            including Swift, Kotlin, and JavaScript. </p>
        <p>    Whether you develop iOS, Android or Windows apps, our courses prepare you to write clean code. </p>
         
        <br>
        <div class="box ">
          <h3 style="text-align:center; margin-left:-70px"><b>PRICE: N100,000</b></h3>
          <a class="btn btn-default" style="width:70%; border-radius:20px !important; margin-left:8% " href="/register"><strong>Enroll Now </strong></a>
       </div>
        </div>


        <div class="col-md-5 col-lg-5">
        <div class="learning_member_text">
          <h4 style="color:#0C2164 !important">What is Moble App Development? </h4>
          <p>
            Mobile app development is the act or process by which a mobile app is developed for mobile devices, such as personal digital assistants, 
            enterprise digital assistants or mobile phones. </p>
          <p>  These applications can be pre-installed on phones during manufacturing platforms, or delivered as web applications using 
            server-side or client-side processing (e.g., JavaScript) to provide an "application-like" experience within a Web browser. </p>
          <p>  Application software developers also must consider a long array of screen sizes, hardware specifications, 
            and configurations because of intense competition in mobile software and changes within each of the platforms. </p>
           <br>

          <p>  Mobile app development has been steadily growing, in revenues and jobs created. </p>
          <p>  A 2013 analyst report estimates there are 529,000 direct app economy jobs within the EU then 28 members (including the UK), 
            60 percent of which are mobile app developers.</p> 
  
        <br>
        

        <br>
        <br>
        <br>


        <div class="jj">
          <img src="/image/images/findworka-map.jpg" width="300px" alt="">
        </div>

        </div>
        </div>
        </div>
        </div>
        </section>

        


@endsection
