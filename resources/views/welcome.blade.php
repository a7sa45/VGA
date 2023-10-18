
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The Graduate Project">
    <meta name="author" content="Abdulhadi Ayed AlShahrani - 441804723">
    <meta name="generator" content="Hugo 0.101.0">
    <title>VGA - The Graduate Project</title>

    

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


    <style>
        html {
  font-size: 14px;
}
@media (min-width: 768px) {
  html {
    font-size: 16px;
  }
}

.container {
  max-width: 960px;
}

.pricing-header {
  max-width: 700px;
}

.card-deck .card {
  min-width: 220px;
}

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
   
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">VGA</h5>
  <nav class="my-2 navbar-expand-md my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="#">About us</a>
  </nav>
  @guest
    <a class="btn btn-outline-primary" href="/login">Login</a>
    <a class="btn btn-outline-dark ml-1" href="/register">Register</a>
  @endguest
  @auth
  <a class="btn btn-outline-primary" href="/home">hi, {{ Auth::user()->name }}</a>
  @endauth
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Visualize Graph Algorithms</h1>
  <p class="lead">Welcome to Visualize Graph Algorithms, your gateway to simplifying the world of graph algorithms through intuitive visualization.</p>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Editor</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">Edit grahp</h1>
        <p>Edit your grahp in our website</p>
        <br><br><br>
        <a type="button" href="/editor" class="btn btn-lg btn-block btn-outline-primary">Start Edit</a>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Tutorials</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">Find Tutorial</h1>
        <p>We have a good tutorials for you</p>
        <br><br><br>
        <a type="button" href="/tutorials" class="btn btn-lg btn-block btn-primary">Get started</a>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Teacher</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">Find Teacher</h1>
        <p>Stady with Teacher</p>
        <br><br><br>
        <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
      </div>
    </div>
  </div>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="/docs/4.6/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">&copy; VGA 2023</small>
      </div>
      <div class="col-6 col-md">
        <ul class="list-unstyled text-small">
          <img src="{{ asset('images/university-logo.png') }}" alt="" height="100" srcset="">
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Team</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Abdulhadi Ayed</a></li>
          <li><a class="text-muted" href="#">Ali Grman</a></li>
          <li><a class="text-muted" href="#">Hisham</a></li>
          <li><a class="text-muted" href="#">Ahmed</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>


    
  </body>
</html>
