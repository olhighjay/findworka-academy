@extends('layouts.app')

<head>

<style>
    /* The hero image */
    .heyo-image {
      /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
      background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.3)), url("/storage/images/cms13.jpg");
    
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


    <section class="learning_part">
        <div class="container">
        <div class="row align-items-sm-center align-items-lg-stretch">
        <div class="col-md-7 col-lg-7">
        <div class="jj">
        <img src="/storage/images/cms2.jpg" width="480px" alt="">
        </div>
        <br>
        <h1 style="color:#0C2164 !important">Content Management System Web Design</h1>
        <p >A content management system is a system used to manage the content of the site. </p>
        <p> We define customized CMS based websites which enable our clients to easily remove, edit or add the content on self-basis. </p>
        <p> The page based on content management system platforms like Joomla or WordPress has become one of the most powerful tools today. </p>
        <br>
        <br>
        <div class="box ">
            <h3 style="text-align:center; margin-left:-70px"><b>PRICE: N30,000</b></h3>
          <a class="btn btn-default" style="width:70%; border-radius:20px !important; margin-left:8% " href="/register"><strong>Enroll Now </strong></a>
       </div>
        </div>


        <div class="col-md-5 col-lg-5">
        <div class="learning_member_text">
            <br>
            <br>

            <p> We produce experts in building structures using content management system which is suitable for any kind of business, whether 
                it is a small scale or a corporate. We teach customized CMS building services best suitable to clients' requirement.</p>
            <p>It is an emblematically said that no one knows more about a man's business than he does. </p>
            <p>  So keeping that insight in mind CMS Web Development is created. </p> 
            <p> CMS imparts the super power to formulate the requisite changes to the owner of the business any time without the help of a single technical leader. </p> 
            <p> We produce CMS designers that can craft the CMS application development 
              to give the excellent power control to clients, which allows them to modify the content like the latest news, 
              your blogs, new product line or product price etc.</p> 
            <p> By using this CMS one can also manage blogs, 
              images, image descriptions and more importantly the content of a website. </p>

  
        <br>
        <br>
        <br>
        <br>
        <br>
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
