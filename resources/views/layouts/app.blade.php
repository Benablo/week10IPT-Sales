<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('js/bootstrap.min.js') }}">
        <title>Document</title>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Week 10 IPT-Sales</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= url('/') ?>">Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/units">Units</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/categories">Categories</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/merchandices">Merchandices</a>
          </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">

        @yield('content')

    </body>
</html>