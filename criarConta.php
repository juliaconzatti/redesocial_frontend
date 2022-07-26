<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar conta</title>
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
        </div>
      </nav>


    <form method="POST">
    <div class="forms_log">
    <div class="form-group row">
        <div class="d-flex align-items-center justify-content-center h-100">
            <div class="d-flex flex-column">

                <h1>Bem-vindo!✨</h1>
                <p>Cadastre-se para compartilhar suas <br>
                    leituras e fazer amigos :)</p>

                <div class="col-sm-14">
                    <div class="form-floating mb-3">
                        <input type="email" size="50" name="email" id="email" placeholder="Informe seu email" class="form-control"
                            id="floatingInput" required>
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="col-sm-14">
                        <div class="form-floating mb-3">
                            <input type="text" size="50" name="usuario" id="usuario" placeholder="Informe seu nome de usuário"
                                class="form-control" id="floatingInput" required>
                            <label for="floatingInput">Usuário</label>

                        </div>
                    </div>
                </div>
                <div class="col-sm-14">
                    <div class="form-floating mb-3">
                        <input type="password" size="50" name="senha" id="senha" placeholder="Informe sua senha"
                            class="form-control" id="floatingInput" required>
                        <label for="floatingInput">Senha</label>
                    </div>
                </div>
                <div class="col-sm-14">
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-dark" type="submit" name="cadastrarCliente" id="cadastrarCliente">Cadastrar-se</button>
                    </div>
                </div>
            </div>

        </div>
        <p class="mt-3 text-center">Já possui uma conta? <a class="bnt-link-primary" href="login.php" title=""><b>Conecte-se</b></a></p>
        </fieldset>
    </div>
    </form>
    <div>
</div>
<div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="../redesocial_backend/javascript/cadastro_scripts.js"></script>

</body>

</html>