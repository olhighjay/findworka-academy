<head>
  <link href="{{ asset('css/carousel2.css') }}" rel="stylesheet">

</head>


<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators carousel-indicators--round">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="">
          <img class="d-block w-100 darkened-image" src="/image/images/bnn4.jpg"
            alt="First slide">
          <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption text-center">
          <h1>BRINGING IT TO THE WORLD</h1>
          <p  class="lead" style="color: white;"> Making IT skills easy to Acquire for the Masses</p>
          <button role="button" class="btn btn-primary">See all features</button>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="">
          <img class="d-block w-100 darkened-image" src="/image/images/bnn5.jpg"
            alt="Second slide">
          <div class="mask rgba-black-strong"></div>
        </div>
        <div class="carousel-caption text-center">
          {{-- <h3 class="h3-responsive">BUILDING DIGITAL WORLD LEADERS</h3> --}}
          <h1>BUILDING DIGITAL WORLD LEADERS</h1>
          <p  class="lead" style="color: white;">Training the Next World LEADING Tech Gurus</p>
          <button role="button" class="btn btn-primary">See all features</button>
        </div>
        
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="">
          <img class="d-block w-100 darkened-image" src="/image/images/bnn3.jpg"
            alt="Third slide">
          <div class="mask rgba-black-slight"></div>
        </div>
        <div class="carousel-caption">
          <h1>SIMPLIFYING IT</h1>
          <p  class="lead" style="color: white;">Making IT as Simple to Assimilate as Possible</p>
          <button role="button" class="btn btn-primary">See all features</button>
        </div>
      </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->