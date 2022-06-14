<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acessar clubes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css" />

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="" width="70" height="70">
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="clubes_cadastrados.html">Home</a>
          </li>
          <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="clubes_cadastrados.html">Action</a></li>
      <li><a class="dropdown-item" href="entrar_clube.php">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Separated link</a></li>
    </ul>
  </li>
      </div>
    </div>
  </ul>
  </nav>


  
</br>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <!-- parte dos cards do carrossel -->
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="img/imagem1.png" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">Clube de Romance</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer text-center">
      <button class="btn btn-outline-dark" type="submit" name="cadastrar" id="cadastrar">Cadastrar-se no clube</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/imagem2.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Clube de Fantasia</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer text-center">
      <button class="btn btn-outline-dark" type="submit" name="cadastrar" id="cadastrar">Cadastrar-se no clube</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/imagem1.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Clube Chick Lit</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer text-center">
      <button class="btn btn-outline-dark" type="submit" name="cadastrar" id="cadastrar">Cadastrar-se no clube</button>
      </div>
    </div>
  </div>
</div>
</div>
<!-- segunda parte dos cards no carrossel -->
<div class="carousel-item">
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="img/imagem2.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Clube de Terror</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer text-center">
      <button class="btn btn-outline-dark" type="submit" name="cadastrar" id="cadastrar">Cadastrar-se no clube</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/imagem1.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Clube de Mistério</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer text-center">
      <button class="btn btn-outline-dark" type="submit" name="cadastrar" id="cadastrar">Cadastrar-se no clube</button>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/imagem2.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Clube de Ficção</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer text-center">
      <button class="btn btn-outline-dark" type="submit" name="cadastrar" id="cadastrar">Cadastrar-se no clube</button>
      </div>
    </div>
  </div>
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>


</body>
</html>
