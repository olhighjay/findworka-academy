@extends('layouts.app')

<head>

<style>
    /* The hero image */
    .heyo-image {
      /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
      background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.2)), url("/storage/images/ui6.jpg");
    
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
      top: 55%;
      left: 13%;
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
        <div class="jj">
        <img src="/storage/images/ui1.png" width="440px" style="margin-left:50px" alt="">
        </div>
        <br>
        <br>
        <br>
        <br>
        <h1 style="color:#0C2164 !important">UI/UX Design</h1>
        <p >User interface design (UI) or user interface engineering is the design of user interfaces for machines and software, such as computers, 
            home appliances, mobile devices, and other electronic devices, with the focus on maximizing usability and the user experience. </p>
        <p>    The goal of user interface design is to make the user's interaction as simple and efficient as possible, 
            in terms of accomplishing user goals (user-centered design). </p>
         
        <br>
        <div class="box ">
          <h3 style="text-align:center; margin-left:-70px"><b>PRICE: N70,000</b></h3>
          <a class="btn btn-default" style="width:70%; border-radius:20px !important; margin-left:8% " href="/register"><strong>Enroll Now </strong></a>
       </div>
        </div>


        <div class="col-md-5 col-lg-5">
        <div class="learning_member_text">
          <p>  Good user interface design facilitates finishing the task at hand without drawing unnecessary attention to itself. </p>
          <p>    Graphic design and typography are utilized to support its usability, influencing how the user performs certain interactions 
              and improving the aesthetic appeal of the design; design aesthetics may enhance or detract from the ability of users to use 
              the functions of the interface. </p>
          <p>    The design process must balance technical functionality and visual elements (e.g., mental model) to create a system that is 
              not only operational but also usable and adaptable to changing user needs.</p>
          
           <br>

          <p> Interface design is involved in a wide range of projects from computer systems, to cars, to commercial planes; all of these projects
            involve much of the same basic human interactions yet also require some unique skills and knowledge.  </p>
          <p>  As a result, designers tend to specialize in certain types of projects and have skills centered on their expertise, 
            whether it is a software design, user research, web design, or industrial design.</p> 
  
        <br>
        

        <br>
        <br>
        <br>


        <div class="jj">
          <img src="/storage/profile_pictures/findworka-map.jpg" width="300px" alt="">
        </div>

        </div>
        </div>
        </div>
        </div>
        </section>

        


@endsection
