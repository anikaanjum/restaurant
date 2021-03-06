<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/')}}">Home
            </a>
          </li>
          <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
            <a class="nav-link" href="{{url('about')}}">About</a>
          </li>
          <li class="nav-item @if(Request::is('service')) active @endif">
            <a class="nav-link" href="{{url('service')}}">Services</a>
          </li>
          <li class="nav-item @if(Request::is('contact')) active @endif">
            <a class="nav-link" href="{{url('contact')}}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>