
<head>
{{-- <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Testimonial Carousel</title> --}}
<link href="{{ asset('css/testimonial.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans" rel="stylesheet">
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
/* body {
	font-family: "Open Sans", sans-serif;
} */

</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-center m-auto jay">
			<h2>Testimonials</h2>
			<div id="myCarousel" class="carousel carousel1 slide" data-ride="carousel">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators carousel-indicators1">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="item carousel-item active">
						<div class="img-box"><img  src="/image/images/ileri.jpeg" alt=""></div>
						<p class="testimonial">From the deepest part of my heart, I want to thank Findworka academy for the transformational 
                            works they do on their students like me which has helped me to acquire thinga I've achieved in the IT world.</p>
                        <p class="overview"><b>Adebayo Ileriayo</b>, Back-end Dev. </p>
					</div>
					<div class="item carousel-item">
						<div class="img-box"><img src="/image/images/mato.jpeg" alt=""></div>
						<p class="testimonial">Findworka academy never fails. A try will convince anybody. They make learning of programing as simple as learning A, B, C 
                            and they give full support to their students durimg amd after their time at the academy</p>
                        <p class="overview"><b>Mato Martins</b>, Back-end Dev.</p>
					</div>
					<div class="item carousel-item">
						<div class="img-box"><img src="/image/images/eje.jpeg" alt=""></div>
						<p class="testimonial">I enrolled into findworka academy having no idea about backend or any programing at all. I was totally a novice that had no idea whatsoever about programming but Findworka academy picked me up and made me a big shot in te IT industry</p>
                        <p class="overview"><b>Bosipo Afeedufona</b>, Back-end Dev.</p>
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
		</div>
	</div>
</div>
</body>
</html>                                		                            