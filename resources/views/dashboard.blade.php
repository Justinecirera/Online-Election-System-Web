<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@section('title', 'E-Lection')</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset ('css/landingpage.css') }}">

    </head>
    <body class="antialiased">
                <!-- Jumbotron -->
    <div class="jumbotron" style="background-image: url({{ asset('assets/img/Background.png')}}">
      <img class="lnu" src="{{ asset( 'assets/img/LNU.png') }}" alt="Description of the image">
      <p class="lead">ONLINE ELECTION</p>
      <hr class="my-4">
    </div>

    <!-- Features Section -->
    <section class="features">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title">Feature 1</h5>
                <p class="card-text">Provide the school with....</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title">Feature 2</h5>
                <p class="card-text">The platform enables....</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Feature 3</h5>
                <p class="card-text">Enables students to.... </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonials Section -->
<section class="testimonials">
    <div class="container">
      <h2 class="mb-5">Testimonials</h2>
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card">
            <div class="card-body">
              <p class="card-text">""</p>
              <p class="card-title">- Name</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card">
            <div class="card-body">
              <p class="card-text">""</p>
              <p class="card-title">- Name</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card">
            <div class="card-body">
              <p class="card-text">""</p>
              <p class="card-title">- Name</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <footer class="bg-dark text-white py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-2 mb-lg-0">
          <h5>About Us</h5>
          <p class="mb-0">E-lection is an online election system for Leyte Normal University</p>
        </div>
        <div class="col-lg-3">
          <h5>Links</h5>
          <ul class="list-unstyled">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="col-lg-3">
          <h5>GET NOTIFIED FOR LATEST UPDATE</h5>
          <p>Subscribe to our mailing list to receive updates on new resources:</p>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Email">
            <button class="btn btn-primary" type="button">Submit</button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 text-center mt-3">
          <p>&copy; 2023 Leyte Normal University. All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>

        </div>
    </body>
</html>