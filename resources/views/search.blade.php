<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
 @import url('https://fonts.googleapis.com/css?family=Rubik:300,400,700&display=swap');

/* Core Styles */

*,
*:before,
*:after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html {
  font-family: 'Rubik', sans-serif;
  font-size: 16px;
  font-weight: 400;
}

body {
    background: #efefef;
}

section {
  text-align: center;
  padding: 1.5em 1em;
}


.row {
  max-width: 960px;
  width: 100%;
  margin: 0 auto;
}

.heading {
    margin-bottom: 1em;
}

.figure {
  background: #1d1d1d;
  display: inline-block;
  margin: 10px;
  max-width: 280px;
  min-width: 230px;
  overflow: hidden;
  position: relative;
  text-align: center;
  width: 100%;
}

.figure * {
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease;
}

section.section-2 {
  color: #efefef;
}

.section-2 .figure {
  background: #ffffff;
  color: #1d1d1d;
}

.section-2 .figure img {
  vertical-align: top;
  max-width: 100%;
  backface-visibility: hidden;
}

.section-2 .figure figcaption {
  position: absolute;
  background-color: #efefef;
  z-index: 1;
  top: 50%;
  left: 50%;
  padding: 5px 20px;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  line-height: 1.1em; /* 1.1em */
  overflow: hidden;
  height: 44px;
  width: 150px;
}

.section-2 .figure h3 {
  text-transform: uppercase;
  font-size: 0.9em;
  margin: 0;
  letter-spacing: 2px;
}

.section-2 .figure h3.hover {
  color: #efefef;
  font-weight: 700;
}

.section-2 .figure a {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
}

.section-2 .figure .title {
  transform: translatey(50%);
}
.section-2 .figure .hover {
  transform: translatey(50%);  
}

.section-2 .figure:hover > img,
.section-2 .figure.hover > img {
  opacity: 0;
}

.section-2 .figure:hover figcaption,
.section-2 .figure.hover figcaption {
  background-color: #1d1d1d;
}

.section-2 .figure:hover .title,
.section-2 .figure.hover .title {
  -webkit-transform: translateY(-150%);
  transform: translateY(-150%);
}

.section-2 .figure:hover .hover, 
.section-2 .figure.hover .hover {
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
}
.header {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 1em;
    }   
    /* Additional responsive styles */
.search-form {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 10px;
}

.form-label {
    font-weight: bold;
    margin-bottom: 5px;
}

.input-group {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.form-control {
    flex: 1;
    padding: 8px;
    border: 1px solid #ced4da;
    border-radius: 4px;
}

.btn-primary {
    background-color: #007bff;
    border: none;
    color: #fff;
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.2s;
}

.btn-primary:hover {
    background-color: #0056b3;
}
ul {
    margin: 0px;
    padding: 0px;
}
.footer-section {
  background: #151414;
  position: relative;
}
.footer-cta {
  border-bottom: 1px solid #373636;
}
.single-cta i {
  color: #ff5e14;
  font-size: 30px;
  float: left;
  margin-top: 8px;
}
.cta-text {
  padding-left: 15px;
  display: inline-block;
}
.cta-text h4 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 2px;
}
.cta-text span {
  color: #757575;
  font-size: 15px;
}
.footer-content {
  position: relative;
  z-index: 2;
}
.footer-pattern img {
  position: absolute;
  top: 0;
  left: 0;
  height: 330px;
  background-size: cover;
  background-position: 100% 100%;
}
.footer-logo {
  margin-bottom: 30px;
}
.footer-logo img {
    max-width: 200px;
}
.footer-text p {
  margin-bottom: 14px;
  font-size: 14px;
      color: #7e7e7e;
  line-height: 28px;
}
.footer-social-icon span {
  color: #fff;
  display: block;
  font-size: 20px;
  font-weight: 700;
  font-family: 'Poppins', sans-serif;
  margin-bottom: 20px;
}
.footer-social-icon a {
  color: #fff;
  font-size: 16px;
  margin-right: 15px;
}
.footer-social-icon i {
  height: 40px;
  width: 40px;
  text-align: center;
  line-height: 38px;
  border-radius: 50%;
}
.facebook-bg{
  background: #3B5998;
}
.twitter-bg{
  background: #55ACEE;
}
.google-bg{
  background: #DD4B39;
}
.footer-widget-heading h3 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 40px;
  position: relative;
}
.footer-widget-heading h3::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -15px;
  height: 2px;
  width: 50px;
  background: #ff5e14;
}
.footer-widget ul li {
  display: inline-block;
  float: left;
  width: 50%;
  margin-bottom: 12px;
}
.footer-widget ul li a:hover{
  color: #ff5e14;
}
.footer-widget ul li a {
  color: #878787;
  text-transform: capitalize;
}
.subscribe-form {
  position: relative;
  overflow: hidden;
}
.subscribe-form input {
  width: 100%;
  padding: 14px 28px;
  background: #2E2E2E;
  border: 1px solid #2E2E2E;
  color: #fff;
}
.subscribe-form button {
    position: absolute;
    right: 0;
    background: #ff5e14;
    padding: 13px 20px;
    border: 1px solid #ff5e14;
    top: 0;
}
.subscribe-form button i {
  color: #fff;
  font-size: 22px;
  transform: rotate(-6deg);
}
.copyright-area{
  background: #202020;
  padding: 25px 0;
}
.copyright-text p {
  margin: 0;
  font-size: 14px;
  color: #878787;
}
.copyright-text p a{
  color: #ff5e14;
}
.footer-menu li {
  display: inline-block;
  margin-left: 20px;
}
.footer-menu li:hover a{
  color: #ff5e14;
}
.footer-menu li a {
  font-size: 14px;
  color: #878787;
}
</style>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>

<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section long_section px-0">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="navbar-brand" href="{{ url('/') }}">
    <span>Luxe Haven</span>
</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=""> About</a>
              </li>
              <li class="nav-item">
                <!-- <a class="nav-link" href="">Furnitures</a> -->
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="quote_btn-container">
            <a href="">
              <span>
                Login
              </span>
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
            <form class="form-inline">
              <!-- <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button> -->
            </form>
          </div>
        </div>
      </nav>
    </header>
    <section>
    <div class="container">
        @if(isset($hotels))
    <div class="row">
        <div class="col-md-12">
            <h2>{{ $hotels[0]->hotel_name }} Hotel</h2>
        </div>
        @forelse($hotels as $hotel)
            @foreach ($hotel->rooms as $room)
                @if ($room->available)
                    <div class="col-md-4">
                        <section class="section-2">
                            <figure class="figure">
                                <img src="{{ asset('storage/' . $room->photo) }}" class="img-fluid" alt="Room Photo">
                                <figcaption>
                                    <h3 class="title mb-2" style="color: green">{{ $room->room_type }}</h3>
                                    <h3 class="hover">
                                        <a href="{{ route('bookings.create', ['hotel' => $hotel->id, 'room' => $room->id]) }}">Book Room</a>
                                    </h3>
                                </figcaption>
                            </figure>
                        </section>
                    </div>
                @endif
            @endforeach
        @empty
            <div class="col-md-12">
                <p>No hotels available for the provided city.</p>
            </div>
        @endforelse
    </div>
@endif

    </div>
  </div>
  <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>No.86(E), Zayar Thiri Street. Kamayut Township</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>9876543210 0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>mail@info.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2023, All Right Reserved <a href="#"></a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>