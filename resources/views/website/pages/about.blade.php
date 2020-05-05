@extends('layouts.app')

<head>

<style>
    /* The hero image */
    .heyo-image {
      /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("/image/images/IT-Banner.jpg");
    
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
            left: 30%;
            transform: translate(-50%, -50%);
            color: white;
        }

        .fa{
            color: midnightblue;
        }

    
    
    </style>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/etrain/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/etrain/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/etrain/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/etrain/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/etrain/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/etrain/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/etrain/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/etrain/style.css">
    
    
</head>
    
@section('content')




    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" id="bootstrap-css"> --}}

    


    <div class="heyo-image">
        <div class="heyo-text">
            <h1 >About Us</h1>
            <p style="color:white !important">Bringing IT dreams to reality</p>
            <a href="/register" class="btn btn-primary">Register Now!</a>
        </div>
    </div>

    <br> <br>
    <div class="container " >
        <div class="row col-md-10">

            <div>
                
                <h1 style="color:#0B0A49 !important"> About Findworka Academy</h1>
                <!-- Post Content -->
                <p class="lead">Findworka academy is an international IT institution founded  by <a href="www.findworka.com">Findworka</a> with the goal of creating next leading IT gurus in the world </p>

                <p> Findworka academy was birthed in the year 2018. It was founded to create a platform for students who are in interested in becoming the next guru in the IT industry, To help them grow and bring their dreams to reality </p>
                    
                <p> We have successfully run a two complete sessions with each session producing well baked and informed IT personels. We have successfully guided non-IT persons into becoming award winning IT gurus  </p>
                    
                <p> We equip our students well to know the latest trends in the IT industry. We take them to leading IT companines in the country to have office hours so as to have idea of how it is in the IT industry so as to prepare them for the journey ahead</p>
                    
                <p> We link our students up with successful IT companies in the country for internship after their course for better exposure into the IT world </p>
                <hr>

            </div>

            <section id="features" class="feature_part">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-xl-3 align-self-center">
                            <div class="single_feature_text ">
                                <h2>Additional <br> Features</h2>
                                <p>Findworka Academy is the best online and offline IT institution
                                    that can and will propell you to that big stage you've been 
                                dreaming about in the IT industry  </p>
                                <a href="#" class="btn_1">Read More</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"></span>
                                    <h4 style="color:#0B0A49 ">Experienced Tutors</h4>
                                    <p>Our Tutors are experienced IT gurus who have paid their
                                        prices and have been practitcing IT for a long time</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"></span>
                                    <h4 style="color:#0B0A49 ">Conducive Learning Space</h4>
                                    <p>Our offline classes are held at our conference hall in our company
                                        with full cpomfortability for our students</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="single_feature">
                                <div class="single_feature_part single_feature_part_2">
                                    <span class="single_service_icon style_icon"></span>
                                    <h4 style="color:#0B0A49 ">Well Explanatory Resources</h4>
                                    <p>We share well explanatory learning resources to our students 
                                        and provide full guide on their usage </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br> <br> 

                    <div class="row">
                        <div class="col-sm-6 col-xl-3">
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"></span>
                                    <h4 style="color:#0B0A49 ">Access to Internet</h4>
                                    <p>There is free wifi for our students and standby electricity supply
                                        during class hours to make sure they have easy acces to the internet </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"></span>
                                    <h4 style="color:#0B0A49 ">Project Supervision</h4>
                                    <p>At the end of each session, each of our students will be given a project 
                                        to work on with full supervision of the tutor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="single_feature">
                                <div class="single_feature_part single_feature_part_2">
                                    <span class="single_service_icon style_icon"></i></span>
                                    <h4 style="color:#0B0A49 ">Internship Placement</h4>
                                    <p>After a successful session, our students arre posted to top IT country
                                        for internship so as to put their skills into practice and learn more from senior colleagues</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                <!-- Blog Post Content Column -->
            <div >

                <hr>

                <h1> About Findworka</h1>
                <!-- Post Content -->
                <p class="lead">We launched in 2016 as a platform for hiring artisans and semi-skilled workers. </p>

                <p> In 2017, we morphed into a digital services-only freelance platform where users could find, connect with, hire and pay diversely skilled digital professionals. We offered a secured escrow service and our users loved it. </p>
                    
                <p>    Currently, we build technology products and extend the engineering capacities of ambitious companies using our network of pre-vetted talents.</p>
                    
                <p>    By tech products, we mean desktop apps, web portals, mobile apps, animations, graphic designs, AI and blockchain solutions, copywriting and more. We have a tested and reliable project management approach that combines the best of agile and scrum on our products. From start to finish, we ensure that the development experience is as satisfying as the completed product. </p>
                    
                <p>    Our mission is to empower today’s companies and workers with the technology and opportunities needed to succeed in the evolving digital economy. </p>
                <hr>
            </div>

        

                            
            
        </div>
    </div>  


    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!--Include the above in your HEAD tag ---------->
@endsection


