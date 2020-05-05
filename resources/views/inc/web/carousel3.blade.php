<head>
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
  
  
  <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="overlay"></div>
            <!--Indicators-->
        {{-- <ol class="carousel-indicators carousel-indicators--round">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol> --}}
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item item slides active">
                <div class="slide-1">
                    <div class="hero">
                        <hgroup>
                            <h1>Bringing IT to the World</h1>        
                            <h3>Making IT skills easy to acquire for the masses</h3>
                        </hgroup>
                        <a href="/about#features"><button class="btn btn-hero btn-lg" role="button">See all features</button></a>
                    </div>
                </div>
                {{-- <div class="carousel-caption">
                    <h3 class="h3-responsive">BRINGING IT TO THE WORLD</h3>
                    <p> Making IT skills easy to Acquire for the Masses</p>
                    <button role="button" class="btn btn-primary">See all features</button>
                </div> --}}
            </div>
            
            <div class="carousel-item item slides active">
                <div class="slide-2"></div>
                    <div class="hero">        
                        <hgroup>
                            <h1>Simplifying IT</h1>        
                            <h3>Making IT as simple to assimilate as possible</h3>
                        </hgroup>       
                        <a href="/about#features"><button class="btn btn-hero btn-lg" role="button">See all features</button></a>
                    </div>
                </div>
            </div>

            <div class="carousel-item item slides active">
                <div class="slide-3"></div>
                    <div class="hero">        
                        <hgroup>
                            <h1>Building Digital World Leaders</h1>        
                            <h3>Training the next World leading digital Gurus</h3>
                        </hgroup>
                        <a href="/about#features"><button class="btn btn-hero btn-lg" role="button">See all features</button></a>
                    </div>
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