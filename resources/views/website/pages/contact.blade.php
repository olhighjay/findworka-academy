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

    <link rel="stylesheet" href="css/etrain/style.css">

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

    <section id="contact">
       <div class="container">
           <h3 class="text-center" style="color:#0B0A49 !important">Contact us</h3>
           <p class="text-center w-75 m-auto">We run a 24/7 support center that is always ready to relate 
               with our students and clients. You can reach us anytime through any of our contact info below</p>
           <div class="row">
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-phone fa-5x mb-3 " aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">call us</h4>
                    <p>    (+234) 703 670 6789,    (+234) 817 161 1434</p>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">Office Address</h4>
                   <address>  2 Connal Rd, Yaba. Lagos. Nigeria</address>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">office Address 2</h4>
                    <address>Ajao estate, Lagos, Nigeria </address>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-3 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">email</h4>
                    <p>    info@findworka.com</p>
                  </div>
                </div>
             </div>
           </div>
       </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>

    

<div class="container form" style="background-color:#EBEBF3">
    <h2 class="text-center" >Contact Form</h2>
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5 " style="margin-left:55px">


                    <!--Form with header-->

                    <form action="mail.php" method="post">
                        <div class="card border-primary formul">
                            <div class="card-header p-0 formu">
                                <div class=" text-white text-center py-2 formu">
                                    <h3><i class="fa fa-envelope" style="color:white"></i> Send us a message</h3>
                                    <p class="m-0">Write your message in the form below</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" id="body" name="body" placeholder="Message Body"></textarea>
                                    </div>
                                </div>

                                <div class="text-center" style=" justify-content-center">
                                    <input type="submit" value="Send" class="btn btn-info btn-block py-2 btn1" style="width:50%">
                                </div>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->


                </div>
	</div>
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