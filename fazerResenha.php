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

<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <img src="img/logo.png" alt="" width="70" height="70">
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="acessarClube.php">Meus clubes do livro</a>
              </li>
          </div>
        </div>
      </ul>
      </nav>
    </br>

<form>
<div class="form-group row">
        <div class="d-flex align-items-center justify-content-center h-100">
            <div class="d-flex flex-column">
<div class="row g-5">
    <h3 class="text-center">Faça sua resenha aqui!</h3>
  <input type="text" class="form-control" id="tituloresenha" placeholder="Título da resenha">
  </div><br>
    <div class="row g-5">
  <textarea class="form-control" id="textareaResenha" rows="7" placeholder="Escreva aqui a sua opinião sobre o livro"></textarea><br>
  </div><br>
  <div class="d-grid gap-2">
                        <button class="btn btn-outline-dark" type="submit" name="pub_resenha"
                            id="cadastrar">Publicar resenha</button><br>
                    </div>
                    </div>
                    </div>
                    </div>
</form>

</body>
</html>