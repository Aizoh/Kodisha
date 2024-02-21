@extends('layouts.real-estate')

@section('content')
<div class="property-index">
  <div class="container-fluid">
  {{-- <section class="hero" style="background-image:url('{{asset('img/search-background.jpg')}}');">
      <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-6 mx-auto">
          <div class="hero-caption">
            <div>
              <h2 class="caption-text">Discover a place <br> You love to live.</h2>
              <br>
              <form action="{{route('property.search')}}" method="GET">
                <div class="hero-search-bx">
                    <input type="text" placeholder="Naradevi, Kathmandu" name="property" class="navbar-search-input" autofocus>
                    <button type="submit" class="hero-search-button">
                      <i class="fas fa-search"></i>
                    </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    <div id="carouselExampleIndicators" class="carousel slide hero" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/img20.jpg" alt="First slide">
          
          <div class=" carousel-caption hero-caption ">
            <div>
              <h2 class="caption-text">Discover a place <br> You love to live.</h2>
              <br>
              <form action="{{route('property.search')}}" method="GET">
                <div class="hero-search-bx">
                    <input type="text" placeholder="Naradevi, Kathmandu" name="property" class="navbar-search-input" autofocus>
                    <button type="submit" class="hero-search-button">
                      <i class="fas fa-search"></i>
                    </button>
                </div>
              </form>
            </div>
          </div>

        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/bg3-hse.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/search-background.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
      <!-- Carousel End -->
    <section class="feature-section py-5">
      <div class="container">
        <h2 class="feature-hdr page-header my-4 text-center">See how Nepestate can help</h2>
        <div class="row text-center">
          <div class="col-sm-12 col-md-4">
            <a class="feature-item card" href="#">
              <i class="fas fa-house-user fa-3x fa-primary w-auto"></i>
              <div class="card-body">
                <h3 class="card-title">Buy a home</h3>
                <p class="card-body">with over a million+ homes in sale available on the website. Nepestate can match you with a house you will want to call home.</p>
                <button class="primary-btn">Find a home</button>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md-4">
            <a class="feature-item card" href="">
              <i class="fas fa-hotel fa-3x fa-primary"></i>
              <div class="card-body">
                <h3 class="card-title">Rent a home</h3>
                <p class="card-body">with over 23+ filters and custom keyword search,Nepesate can help you easily find a rented house.</p>
                <button class="primary-btn">Find a rental</button>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md-4">
            <a class="feature-item card" href="">
              <i class="fas fa-people-carry fa-3x fa-primary"></i>
              <div class="card-body">
                <h3 class="card-title">See neighbourhoods</h3>
                <p class="card-body">with over a million+ neighbourhoods in sale available on the website. Nepestate can match you with a house you will want to call home.</p>
                <button class="primary-btn">Learn more</button>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="guides-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div class="guides-item">
              <p class="guides-hdr">Nepestate Guides</p> 
              <p class="guides-text">Everything you need to know <br>
                when looking at different types of homes for sale all in <br>
                types of homes for sale all in one place.
              </p>
              <br>
              <button class="secondary-btn">See all the guides</button>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="guides-list">
              <div class="guides-item">
                <div class="guides-row">
                  <div class="guides-col"><i class="fas fa-house-user fa-3x fa-primary w-auto"></i></div>
                  <div class="guides-col">  <p class="guides-hdr">Buyers Guides</p> 
                  <a href="{{route('property.index')}}" class="secondary-link">How to buy 
                    <i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="guides-item">
                <div class="guides-row">
                  <div class="guides-col">
                    <i class="fas fa-hotel fa-3x fa-primary"></i>
                  </div>
                  <div class="guides-col">  
                    <p class="guides-hdr">Renters Guides</p> 
                    <a href="{{route('property.index')}}" class="secondary-link">How to rent
                    <i class="fas fa-arrow-right"></i></a></div>
                </div>
              </div>
              <div class="guides-item">
                <div class="guides-row">
                  <div class="guides-col"><i class="fas fa-people-carry fa-3x fa-primary"></i></div>
                  <div class="guides-col">  
                    <p class="guides-hdr">Sellers Guides</p> 
                    <a href="{{route('property.index')}}" class="secondary-link">How to sell
                    <i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection


@push('js')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('lib/parallax/parallax.min.js')}}"></script>
    <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
@endpush


@push('css')
<style>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</style>
@endpush

