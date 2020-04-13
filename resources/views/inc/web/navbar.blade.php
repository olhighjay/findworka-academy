<nav class="navbar navbar-expand-md navbar-dark  shadow-sm" style="background-color: navy" >
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="/image/images/findworka-logo1.png" width="120" height="30"  alt="Findworka academy logo">
    </a>



    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Programmes
          </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/back-end">Back-end Development</a>
              <a class="dropdown-item" href="/cms">CMS Web Design</a>
              <a class="dropdown-item" href="/data-science">Data Science</a>
              <a class="dropdown-item" href="/front-end">Front-end Development</a>
              <a class="dropdown-item" href="/mobile">Mobile App Development</a>
              <a class="dropdown-item" href="/ui-ux">UX & Product Design</a>
            </div> 
    <!--  <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Sessions</a> -->
            
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/blog">Blog</a>
        </li>
      </ul>
      
      <!-- Right Side Of Navbar -->
      <div  class="pull-right" style="float: right;">
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->firstname }} 
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" >
                      <a class="dropdown-item" href="/dashboard">
                          View Profile
                      </a>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
        </ul>
      </div>
    </div>
  </div>
</nav>
