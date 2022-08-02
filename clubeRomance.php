<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acessar clubes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="estilo.css" />

</head>
<body>

<!--cada clube terá sua própria página-->

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
    <div class="dropdown">
  <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  <img src="img/usuario.png" width="20px" height="20px">
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="cadastroClube.php">Cadastrar-se em mais clubes</a></li>
    <li><a class="dropdown-item" href="acessarClube.php">Meus clubes</a></li>
    <li><a class="dropdown-item" href="#">Sair</a></li>
  </ul>
</div>
       </form>
        </div>
      </nav>

      <div class="container">
  <div class="row">
    <div class="col" id="divesq">
      <h3 class="text-left">Livro do mês:</h3>
          <a href="clubeRomance.php">
            <img src="https://images-na.ssl-images-amazon.com/images/I/81AFV9waKfL.jpg" width="200px" height="300px">
          </a>
          <div id="btnBaixar">
          <a href="livros/thelovehypothesis.pdf" download="livrodomes"><button class="btn btn-outline-dark" type="button">Fazer download</button></a>
      </div>
        </div>

    <div class="col" id="divdir">
<div>
<h3 class="text-left">Descricão:</h3>
<p class="text-break text-start">Praise for Tweet Cute “From meme wars to social media marketing, Lord accurately depicts various sides of today's online culture. 
  Amid all the digital hoopla is an engaging story about family loyalty and pursuing one's own passions.</p>
<div class="d-grid gap-2 col-6 mx-autot">
  <a href="atualizarLeitura.php"><button class="btn btn-primary" type="button">Atualizar leitura</button></a>
  <a href="forum.php"><button class="btn btn-success" type="button">Acessar fórum</button></a>
  <a href="..."><button class="btn btn-danger" type="button">Sair deste clube</button></a>
</div>
</div>
  </div>
</div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" 
crossorigin="anonymous"></script>
    <script src="https://momentjs.com/downloads/moment.min.js"></script>
    <script src="../redesocial_backend/javascript/logout.js"></script>
  <script src="../redesocial_backend/javascript/scripts.js"></script>
  <script src="../redesocial_backend/javascript/login_scripts.js"></script>


</body>
</html>
