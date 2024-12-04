<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nyelviskola - @yield('title')</title>
    <link rel="stylesheet" href="assets/ccs/style.css">
    <link rel="stylesheet" href="assets/ccs/bootstrap.min.css">
    <script src="assets/js/bootstrap.bundle.js"></script>
</head>
<body>
<header>
    <h1>AIZEN SOSUKE</h1>
</header>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Főoldal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/angol">Angol</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/nemet">Német</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/orosz">Orosz</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')

  <footer class="container-fluid text-center p-3">
    <h4><u>Footer címsor</u></h4>
    <p><a href="#">Link1</a> || <a href="#">Link2</a></p>
</footer>
</body>
</html>
