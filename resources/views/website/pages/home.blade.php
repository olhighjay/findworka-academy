@extends('layouts.app')

    <head>


        <link rel="stylesheet" href="css/etrain/style.css">    

        
        
        
        <style type="text/css">
            
            h2 {
                color: #0c2e60 !important;
                text-align: center;
                text-transform: uppercase;
                font-family: inherit;
                /* font-weight: bold; */
                position: relative;
                margin: 25px 0 50px;
                font-weight: 700 !important;
                font-size: 30px;
                line-height: 40px;
            }
            h2::after {
                content: "";
                width: 100px;
                position: absolute;
                margin: 0 auto;
                height: 3px;
                background: #ca0909;
                left: 0;
                right: 0;
                bottom: -10px;
            }
            .jcarousel {
                width: 650px;
                margin: 0 auto;
                padding-bottom: 50px;
            }
            .jcarousel .jitem {
                color: #999;
                font-size: 14px;
                text-align: center;
                overflow: hidden;
                min-height: 340px;
            }
            .jcarousel .jitem a {
                color: #eb7245;
            }
            .jcarousel .jimg-box {
                width: 145px;
                height: 145px;
                margin: 0 auto;
                border-radius: 50%;
            }
            .jcarousel .jimg-box img {
                width: 100%;
                height: 100%;
                display: block;
                border-radius: 50%;
            }
            .jcarousel .testimonial {	
                padding: 30px 0 10px;
            }
            .jcarousel .overview {	
                text-align: center;
                padding-bottom: 5px;
            }
            .jcarousel .overview b {
                color: #333;
                font-size: 15px;
                text-transform: uppercase;
                display: block;	
                padding-bottom: 5px;
            }
            .jcarousel .star-rating i {
                font-size: 18px;
                color: #ffdc12;
            }
            .jcarousel .carousel-control {
                width: 30px;
                height: 30px;
                border-radius: 50%;
                background: #999;
                text-shadow: none;
                top: 4px;
            }
            .carousel-control i {
             
                font-size: 20px;
                margin-right: 2px;
            }
            .carousel-control.left {
                left: auto;
                right: 40px;
            }
            .carousel-control.right i {
                margin-right: -2px;
            }
            .carousel .carousel-indicators {
                bottom: 15px;
            }
            .carousel-indicators li, .carousel-indicators li.active {
                width: 11px;
                height: 11px;
                margin: 1px 5px;
                border-radius: 50%;
            }
            .carousel-indicators li {	
                background: #e2e2e2;
                border-color: transparent;
            }
            .carousel-indicators li.active {
                border: none;
                background: #888;		
            }
            </style>




    </head>
@section('content')
    @include('inc.web.carousel')



    <!--::header part start::-->
  
    <!-- Header part end-->


    <!-- banner part start-->
  
    <!-- banner part start-->

    
    <!-- feature_part start-->
    <br> <br> <br> <br> <br>
    <section class="feature_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2 style="color:#0B0A49 ">We Provide <br> the Best</h2>
                        <p>Findworka Academy is the best online and offline IT institution
                            that can and will propell you to that big stage you've been 
                        dreaming about in the IT industry </p>
                        <a href="/about#features" class="btn_1">Know More</a>
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
        </div>
    </section>
    <!-- feature part end-->

    <!-- about us part start-->
    <section class="learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-7 col-lg-7">
                    <div class="learning_img">
                        <img src="storage/images/learning.png" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="learning_member_text">
                        <h5>About us</h5>
                        <h2>Making Learning IT
                            Easy and Fun</h2>
                        <p>Findworka academy is an international 
                            IT institution founded by Findworka with the goal of creating next leading IT gurus in the world</p>
                        <ul>
                            <li><span class="ti-pencil-alt"></span>It was founded to create a platform for students 
                                who are in interested in becoming the next guru in the IT industry. </li>
                            <li><span class="ti-ruler-pencil"></span>To help them grow and bring their dreams to reality
                                night.</li>
                        </ul>
                        <a href="/about" class="btn_1">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us part end-->

    <!-- member_counter counter start -->

    <!-- member_counter counter end -->


    <!--::programmes_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Just For You</p>
                        <h2>Our Programmes</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="storage/images/ds8.png" style="border-top-left-radius:30px; border-top-right-radius:30px" height="250px"  width="100%" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="/back-end" class="btn_4" style="border-radius:20px">Web Development</a>
                            <h4>₦150,000</h4>
                            <a href="/back-end"><h3>Back end Development</h3></a>
                            <p>Back end Development refers to the server side of development 
                                where you are primarily focused on how the site works.</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="/storage/images/animate_icon/icon_5.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5>Our Tutors</h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="storage/images/bnn44.jpg" style="border-top-left-radius:30px; border-top-right-radius:30px"  height="250px" width="100%" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="/cms" class="btn_4" style="border-radius:20px">Web Design</a>
                            <h4>₦30,000</h4>
                            <a href="/cms"><h3>CMS Web Design</h3></a>
                            <p>We produce experts in building structures using content 
                                management system which is suitable for any kind of business.. </p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="/storage/images/animate_icon/icon_3.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">Our Tutors</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="storage/images/ds5.jpg" style="border-top-left-radius:30px; border-top-right-radius:30px"  
                        height="250px" width="100%" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="/data-science" class="btn_4" style="border-radius:20px"> Data Analysis</a>
                            <h4>₦180,000</h4>
                            <a href="/data-science"><h3>Data Science</h3></a>
                            <p>As the world entered the era of big data, the need for its storage also grew. 
                                It was the main challenge and concern for the..</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="/storage/images/animate_icon/icon_5.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">Our Tutors</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <br> <br> <br> <br> <br>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="assets/storage/images/ds1.jpg" style="border-top-left-radius:30px; border-top-right-radius:30px" height="250px"  width="100%" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="/front-end" class="btn_4" style="border-radius:20px">Web Development</a>
                            <h4>₦120,000</h4>
                            <a href="/front-end"><h3>Front end Development</h3></a>
                            <p>Front end development manages everything that users visually see
                                 first in their browser or application. </p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src=" /storage/images/animate_icon/icon_5.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">Our Tutors</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="assets/storage/images/ds3.jpg" style="border-top-left-radius:30px; border-top-right-radius:30px"  height="250px" width="100%" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="/mobile" class="btn_4" style="border-radius:20px">App Development</a>
                            <h4>₦100,000</h4>
                            <a href="/mobile"><h3>Mobile App Development</h3></a>
                            <p>Mobile development refers to creating applications and any other 
                                kind of software development specific to mobile devices.. </p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="/storage/images/animate_icon/icon_5.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">Our Tutors</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="assets/storage/images/ui9.jpg" style="border-top-left-radius:30px; border-top-right-radius:30px"  height="250px" width="100%" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="/ui-ux" class="btn_4" style="border-radius:20px"> Design</a>
                            <h4>₦70,000</h4>
                            <a href="/ui-ux"><h3>UI/UX Design</h3></a>
                            <p>User interface design (UI) or user interface 
                                engineering is the design of user interfaces for machines and software, ..</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="/storage/images/animate_icon/icon_3.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">Our Tutors</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="/storage/images/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::programmes_part end::-->


    <!-- learning part start-->
    
    <!-- learning part end-->
    

    <!--::review_part start::-->
    
    <!--::blog_part end::-->


    <br> <br> <br> <br> <br> <br> <br>

    <!-- TESTIMONIAL START -->
    <hr> <br>
    <section class="testimonial_part">
        <div class="section_title">
            <h2>Testimonials</h2>
        </div>
        <div id="myCarousel" class="jcarousel slide" data-ride="carousel">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>   
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">		
                <div class="jitem carousel-item active">
                    <br>
                    <div class="jimg-box"><img src="/storage/images/ileri.jpeg" alt=""></div>
                    <p class="testimonial">From the deepest part of my heart, I want to thank Findworka academy for the transformational 
                        works they do on their students like me which has helped me to acquire thinga I've achieved in the IT world.</p>
                    <p class="overview"><b>Adebayo Ileriayo</b>Back-end Dev. gradutae at <a href="#">Findworka Academy</a></p>
                    <div class="star-rating">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="jitem carousel-item">
                    <br>
                    <div class="jimg-box"><img src="/storage/images/mato.jpeg" alt=""></div>
                    <p class="testimonial">Findworka academy never fails. A try will convince anybody. They make learning of programing as simple as learning A, B, C 
                        and they give full support to their students durimg amd after their time at the academy</p>
                    <p class="overview"><b>Mato Martins</b>Back-end Dev. gradutae at <a href="#">Findworka Academy</a></p>
                    <div class="star-rating">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="jitem carousel-item">
                    <br>
                    <div class="jimg-box"><img src="/storage/images/eje.jpeg" alt=""></div>
                    <p class="testimonial">I enrolled into findworka academy having no idea about backend or any programing at all. I was totally a novice that had no idea whatsoever about programming but Findworka academy picked me up and made me a big shot in te IT industry</p>
                    <p class="overview"><b>Bosipo Afeedufona</b>Back-end Dev. gradutae at <a href="#">Findworka Academy</a></p>
                    <div class="star-rating">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                        </ul>
                    </div>
                </div>		
            </div>
            <!-- Carousel controls -->
            <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </section>
    <!-- End Testimonial -->
    <hr>





    <!--::BLOG PART start::-->
    <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Our Blog</p>
                        <h2>Students Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-sm-6 col-lg-4 col-xl-4">
                        <div class="single-home-blog">
                            <div class="card">
                                <img src="/storage/cover_images/{{$post->cover_image}}" height="250px" width="100%" class="card-img-top" alt="blog">
                                <div class="card-body">
                                    <a href="/blog/{{$post->title}}" class="btn_4" style="border-radius:15px">{{$post->category}}</a>
                                    <a href="/blog/{{$post->title}}">
                                        <h5 class="card-title" >{{$post->title}}</h5>
                                    </a>
                                    <p>{!!str_limit($post->body, 150)!!}</p>
                                    <ul>
                                        <li> <span class="ti-comments"></span>Written By</li>
                                        <li> <span class="ti-heart"></span>{{$post->admin->firstname}}/li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--::Blog Part end::-->


    <!-- footer part start-->

    <!-- footer part end-->

    


    
@endsection


   