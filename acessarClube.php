<?php

// A quantidade de cards pode variar, pois vai depender do número de clubes que o usuário possui.

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
<nav class="navbar" style="background-color: #180a25;" id="nav1">
        <div class="container-md"></div>
          <a class="navbar-brand" href="www.instagram.com"><img src="img/logoinstagram.png" width="20px" height="20px" class="d-inline-block align-text-top"></a>
          <a class="navbar-brand" href="www.facebook.com"><img src="img/logofacebook.png" width="20px" height="20px" class="d-inline-block align-text-top"></a>
          </div>
        </div>
      </nav>

      <nav class="navbar sticky-top" style="background-color: #d6abda;">
        <div class="container-fluid">
            <img class="navbar" src="img/imaginari.png" alt="">
            <form class="d-flex">
            <a href="cadastroClube.php"><button class="btn btn-outline-dark" type="button">Entrar em mais clubes</button></a>
    <div class="dropdown">
  <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  <img src="img/usuario.png" width="20px" height="20px">
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="cadastroClube.php">Cadastrar-se em mais clubes</a></li>
    <li><a class="dropdown-item" href="#">Sair</a></li>
  </ul>
</div>
       </form>
       </div>
      </nav>

<div id="contclubes">
<div class="row row-cols-1 row-cols-md-5 g-4">
<div class="col"></div>  
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
  <div class="col"></div>  
</div>
</div>
    
</body>
</html>