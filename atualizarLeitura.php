<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acessar clubes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

  <div class="forms_log">
    <form>
      <div class="form-group row">
        <div class="d-flex align-items-center justify-content-center h-100">
          <div class="d-flex flex-column">
            <div class="row g-5">
              <h3 class="text-center">Histórico de leitura</h3>
              <input type="number" class="form-control" id="paginaslidas" placeholder="Número de páginas lidas">
              <textarea class="form-control" id="textareaAtualizacao" rows="7" placeholder="Escreva o que está achando do livro aqui"></textarea><br>
</div>
            <div class="d-grid gap-2">
              <button class="btn btn-outline-dark" type="submit" name="pub_atualizacao" id="cadastrar">Publicar atualização</button>
          </div>
        </div>
      </div>
    </form>
  </div>

</body>

</html>