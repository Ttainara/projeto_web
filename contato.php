<?php
require_once __DIR__ . "/src/autoload.php";

session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fale Conosco</title>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
          crossorigin="anonymous"/>
</head>

<body>

<!-- Header-->
<nav class="navbar navbar-expand-lg bg-light shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo-site.png" alt="Ravissant Jóias" width="75px"/>
        </a>
    </div>
</nav>

<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-10 mx-auto col-lg-10">
            <form class="p-4 p-md-5 border rounded-3 bg-purple text-center shadow p-3 mb-5">

                <!--Título do Form-->
                <p class="h2 mb-3">Fale conosco</p>
                <p class="mb-3">Preencha e nossa equipe entrará em contato:</p>

                <!--Inputs-->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control w-100" id="inputContatoName" required />
                    <label for="inputContatoName">Nome completo</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control w-100" id="inputContatoEmail" required />
                    <label for="inputContatoEmail">E-mail</label>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mensagem</label>
                    <textarea class="form-control w-100" id="campoMensagem" rows="5" placeholder="Deixe sua mensagem"></textarea>
                </div>

                <!--Botão de enviar mensagem-->
                <button class="btn btn-lg btn-dark mt-4 shadow-lg w-100" type="submit" id="botaoEnviarMensagem">Enviar mensagem</button>
            </form>
        </div>
    </div>
</div>

<footer class="text-center text-lg-start bg-light text-muted">
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05)">© Todos os direitos reservados.</div>
</footer>

<script src="js/contato.js"></script>

</body>
</html>