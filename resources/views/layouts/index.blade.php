<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark mb-5 ">
        <div class="collapse navbar-collapse d-flex justify-content-center " id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white font-weight-bold h1" href="/">HOME</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link text-danger" href="/users">Users</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-danger" href="/projet">Projet</a>
            </li> --}}
          </ul>
        </div>
      </nav>




<div class="container">

  @yield('content')
</div>







</body>
</html>