<?php

// cards com imagens botoes e descricao

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar em um clube do livro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
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
            <a class="nav-link active" aria-current="page" href="clubes_cadastrados.html">Meus clubes do livro</a>
          </li>
      </div>
    </div>
  </ul>
  </nav>
</br>


<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="https://media.glamourmagazine.co.uk/photos/61389d4c30654311017f6e8b/16:9/w_320%2Cc_limit/best.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Clube de Romance</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer text-center">
      <a href="clubeRomance.php"><button class="btn btn-outline-dark" type="button">Acessar clube</button></a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://media.glamourmagazine.co.uk/photos/61389d4c30654311017f6e8b/16:9/w_320%2Cc_limit/best.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Clube de Fantasia</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer text-center">
      <a href="algumClube.php"><button class="btn btn-outline-dark" type="button">Acessar clube</button></a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="https://media.glamourmagazine.co.uk/photos/61389d4c30654311017f6e8b/16:9/w_320%2Cc_limit/best.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Clube de Mistério</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer text-center">
      <a href="algumClube.php"><button class="btn btn-outline-dark" type="button">Acessar clube</button></a>
      </div>
    </div>
  </div>
</div>
    
</body>
</html>