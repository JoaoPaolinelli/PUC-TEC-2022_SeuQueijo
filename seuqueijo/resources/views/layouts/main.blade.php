<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="/css/style.css">
  <script src="/js/script.js"></script>

</head>

<header class="container">

  <nav class="navbar navbar-expand-lg navbar-light menu-principal">
    <div class="collapse navbar-collapse imgCentral" id="navbar">
      <div class="especial">
      <a href="/" class="navbar-brand logo-projeto">
        <img src="/img/logoOficial.jpg" alt="evento">
      </a>
      </div>
    </div>


    <ul class="navbar-nav ">
      <li class="nav-item">
        <a href="/products/product" class="nav-link">Home</a>
      </li>
      <li class="nav-item">
        <a href="/products/product" class="nav-link">Produtos</a>
      </li>
      <li class="nav-item">
        <a href="/events/create" class="nav-link">Eventos</a>
      </li>
      <li class="nav-item">
        <a href="/" class="nav-link">Criar eventos</a>
      </li>
      <li class="nav-item">
        <a href="/" class="nav-link">Entrar</a>
      </li>
      <li class="nav-item">
        <a href="/" class="nav-link">Cadastrar</a>
      </li>
      <li class="nav-item">
        <a href="/contacts/contact" class="nav-link">Contato</a>
      </li>
    </ul>

  </nav>
</header>

<body>
  @yield('content')

  <footer>
    <p>Seu Queijo &copy;</p>
  </footer>

  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>




</html>