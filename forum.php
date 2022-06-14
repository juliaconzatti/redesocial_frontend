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
  </nav>
</br>
<form>
<div class="form-group row">
        <div class="d-flex align-items-center justify-content-center h-100">
            <div class="d-flex flex-column">
<div class="row g-5">
    <h4 class="text-center">Compartilhe suas opiniões no fórum :)</h4>
  <input type="text" class="form-control" id="tituloforum" placeholder="Título da discussão">
  </div><br>
    <div class="row g-5">
  <textarea class="form-control" id="textareaForum" rows="7" placeholder="Escreva aqui"></textarea><br>
  </div><br>
  <div class="d-grid gap-2">
                        <button class="btn btn-outline-dark" type="submit" name="pub_forum" id="cadastrar">Publicar no fórum</button><br>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="card-footer text-center">
                    <a href="respostaForum.php"><button class="btn btn-outline-dark" type="button">Responder esse tópico</button></a>
                    <!--Pensar como vou fazer a resposta no fórum-->
                    </div>
</body>
</html>