<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/style.css" />
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/responsive.css" />

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom">
      <div class="container">
        <a class="navbar-brand navBtnBlack fs-3" href="#">MediMart Shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="offset-lg-3 text-center">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link navBtnBlack" aria-current="page" href="{{ route('viewHomepage') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navBtnBlack" href="{{ route('viewProductPage') }}">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navBtnBlack" aria-current="page" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navBtnBlack" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link navBtnBlack" aria-current="page" href="#">Orders</a>
              </li>
          </div>
          <div class="col-lg-4 text-end btn-lg">
            <a href="#"><i class="fa-solid fa-user me-3" style="color: #000050;"></i></a>
            <i class="fa-solid fa-cart-shopping me-3" style="color: #000050;"></i>
            <i class="fa-solid fa-magnifying-glass" style="color: #000050;"></i>
          </div>

        </div>
      </div>
    </nav>
  </header>