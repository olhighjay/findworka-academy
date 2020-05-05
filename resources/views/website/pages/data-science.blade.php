@extends('layouts.app')

<head>

<style>
    /* The hero image */
    .heyo-image {
      /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
      background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.3)), url("/image/images/ds7.png");
    
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
      left: 30%;
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


    <div class="heyo-image" >
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
              <img src="/image/images/cms1.png" width="480px" alt="">
            </div>
            <br>
            <br>
            <br>
            <br>
            <h1 style="color:#0C2164 !important">Data Science</h1>
            <p >As the world entered the era of big data, the need for its storage also grew. 
              It was the main challenge and concern for the enterprise industries until 2010. </p>
            <p>  The main focus was on building framework and solutions to store data.
              Now when Hadoop and other frameworks have successfully solved the problem of storage, 
              the focus has shifted to the processing of this data. </p>
            <p>   Data Science is the secret sauce here. All the ideas which you see in Hollywood sci-fi movies 
              can actually turn into reality by Data Science. 
              Data Science is the future of Artificial Intelligence. </p>
            <p>  Therefore, it is very important to understand what is Data Science and how can it add value to your business. </p>
              
            <br>
            <div class="box ">
              <h3 style="text-align:center; margin-left:-70px"><b>PRICE: N180,000</b></h3>
              <a class="btn btn-default" style="width:70%; border-radius:20px !important; margin-left:8% " href="/register"><strong>Enroll Now </strong></a>
            </div>
          </div>
          <br>

          <div class="col-md-5 col-lg-5">
            <div class="learning_member_text">
              <br>
              <br>
              <br>
              <h4 style="color:#0C2164 !important">What is Data Science? </h4>
              <p>
                Use of the term Data Science is increasingly common, but what does it exactly mean? What skills do you 
                need to become Data Scientist? What is the difference between BI and Data Science? How are decisions and 
                predictions made in Data Science? </p>
              <p>These are some of the questions that will be answered further. </p>
                
              <p>  First, let’s see what is Data Science. Data Science is a blend of various tools, algorithms, 
                and machine learning principles with the goal to discover hidden patterns from the raw data. </p>
              </p>  How is this different from what statisticians have been doing for years? </p>
                
              <p>  The answer lies in the difference between explaining and predicting.  </p>
      
              <br>
      

      
              <p>In the end, it won’t be wrong to say that the future belongs to the Data Scientists. 
                It is predicted that by the end of the year 2018, there will be a need of around one million Data Scientists. </p>
              <p>  More and more data will provide opportunities to drive key business decisions. 
                It is soon going to change the way we look at the world deluged with data around us. 
                Therefore, a Data Scientist should be highly skilled and motivated to solve the most complex problems. </p>
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
