@extends('layouts.app')

<head>

<style>
    /* The hero image */
    .heyo-image {
      /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
      background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.3)), url("/image/images/fe1.jpg");
    
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
            <h1>FRONT END DEVELOPMENT</h1>
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
            <br>
            <br>
        <img src="/image/images/be5.jpg" width="320px" style="margin-left:50px" alt="">
        </div>
        <br>
        <br>
        <br>
        <br>
        <h1 style="color:#0C2164 !important">Front end Development</h1>
        <h4>What is Front end Development?</h4>
        <p >Front end development manages everything that users visually see first in their browser or application. 
            Front end developers are responsible for the look and feel of a site.  </p>
        <p>  Front end development is mostly focused on what some may coin the "client side" of development. 
            Front end developers will be engaged in analyzing code, design, and debugging applications along with ensuring a seamless user experience. 
        <p> You manage what people first see in their browser. </p>
            As a front end developer you are responsible for the look, feel and ultimately design of the site. </p>
         
        <br>
        <div class="box ">
          <h3 style="text-align:center; margin-left:-70px"><b>PRICE: N120,000</b></h3>
          <a class="btn btn-default" style="width:70%; border-radius:20px !important; margin-left:8% " href="/register"><strong>Enroll Now </strong></a>
       </div>
        </div>


        <div class="col-md-5 col-lg-5">
        <div class="learning_member_text">
          <br>
          <h4 style="color:#0C2164 !important">Front end Programming Languages </h4>
          <p>
            Front end languages include HTML, CSS, and Javascript. While JQuery is going out of style (modern browsers can now do the same work, 
            but much more quickly than jQuery), many legacy projects still use JavaScript library, so don't be surprised to see it on a 
            bootcamp's curriculum. </p> 
          <p>  You’ll also learn tons about responsive design along with typography, layouts, grid system, and color theory. 
            When anticipating types of projects you’ll work on as a front end developer, think creating and redesigning websites. </p>
          <p>  In order to be a front end developer (sometimes even called a Javascript developer) you do not need back end development skills. </p>
            <br>
            <br>
          <p>  Sites created by front end developers won’t interact with information stored on a database in order to be functional. <p>
          <p>  The content will be “fixed,” meaning that large pieces of new data will not be constantly uploaded. 
            Small business owners and restaurants usually have great examples of static sites.</p>
  
        <br>
        

        <br>
        <br>
        <br>


        <div class="jj">
          <img src="/image/profile_pictures/findworka-map.jpg" width="300px" alt="">
        </div>

        </div>
        </div>
        </div>
        </div>
        </section>

        


@endsection
