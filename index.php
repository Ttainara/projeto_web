<?php
require_once __DIR__ . "/src/autoload.php";

session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ravissant Jóias</title>
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
<!--Navbar-->
<nav class="navbar navbar-expand-lg bg-light shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="img/logo-site.png" alt="Ravissant Jóias" width="75px"/>
    </a>
    <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">
        <li class="nav-item me-5">
          <a class="nav-link" aria-current="page" href="sobrenos.php">
            <strong>Sobre nós</strong>
          </a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link" href="produtos.php">
            <strong>Nossos produtos</strong>
          </a>
        </li>
        <form class="d-flex">
          <input class="form-control me-4"
                 type="search"
                 placeholder="Procurar..."
                 aria-label="Search"/>
        </form>
        <li class="nav-item me-2">
          <a class="nav-link" href="login.php">
            <img src="img/usuario.png" alt="Usuário" width="25px"/>
          </a>
        </li>
        <li class="nav-item me-4">
          <a class="nav-link" href="#">
            <img src="img/carrinho.png" alt="Carrinho" width="25px"/>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-bs-ride="carousel"
>
  <div class="carousel-indicators">
    <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
    ></button>
    <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
    ></button>
    <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
    ></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img
              src="img/foto-correntes-1.jpg"
              class="d-block w-100"
              alt="foto correntes e jóias 1"
      />
      <div class="carousel-caption d-none d-md-block">
        <h2 class="mudar-fundo">Brilho Eterno</h2>
        <p class="mudar-fundo">
          Nossas joias são feitas com os materiais mais finos e duradouros,
          garantindo um brilho eterno que nunca desaparece.
        </p>
        <a href="/produtos.php" class="main-btn">COMPRAR</a>
      </div>
    </div>
    <div class="carousel-item">
      <img
              src="img/foto-correntes-2.jpg"
              class="d-block w-100"
              alt="foto correntes e jóias 2"
      />
      <div class="carousel-caption d-none d-md-block">
        <h2 class="mudar-fundo">Elegância Clássica</h2>
        <p class="mudar-fundo">
          Com designs clássicos e atemporais, nossas jóias são a escolha
          perfeita para quem busca elegância e sofisticação.
        </p>
        <a href="produtos.php" class="main-btn">COMPRAR</a>
      </div>
    </div>
    <div class="carousel-item">
      <img
              src="img/foto-correntes-3.jpg"
              class="d-block w-100"
              alt="foto correntes e jóias 3"
      />
      <div class="carousel-caption d-none d-md-block">
        <h2 class="mudar-fundo">Beleza Única</h2>
        <p class="mudar-fundo">
          Cada peça de nossa coleção é única, criada com cuidado e atenção
          aos detalhes para garantir a máxima beleza e qualidade.
        </p>
        <a href="produtos.php" class="main-btn">COMPRAR</a>
      </div>
    </div>
  </div>

  <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Prévia</span>
  </button>
  <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Próximo</span>
  </button>
</div>

<div class="container">
  <h1>Jóias de ouro e de prata</h1>
  <p>Versatilidade e diversas possibilidades</p>
  <div class="linha-1"></div>
  <div class="linha-2"></div>
  <div class="image-container">
    <a href="produtos.php" class="image-link"
    ><img src="img/modelo-1.jpg" alt="foto modelo 1" id="imagem-2"
    /></a>
    <a href="produtos.php" class="image-link"
    ><img src="img/modelo-2.jpg" alt="foto modelo 2" id="imagem-2"
    /></a>
    <a href="produtos.php" class="image-link"
    ><img src="img/modelo-3.jpg" alt="foto modelo 3" id="imagem-2"
    /></a>
  </div>

  <div class="image-container">
    <a href="produtos.php" class="image-link"
    ><img src="img/modelo-4.jpg" alt="foto modelo 4" id="imagem-2"
    /></a>
    <a href="produtos.php" class="image-link"
    ><img src="img/modelo-5.jpg" alt="foto modelo 5" id="imagem-2"
    /></a>
    <a href="produtos.php" class="image-link"
    ><img src="img/modelo-6.jpg" alt="foto modelo 6" id="imagem-2"
    /></a>
  </div>
  <div class="fim-imagens"></div>
</div>

<div class="container-fluid">
  <hr />
  <h3><strong>Receba nossas novidades</strong></h3>
  <p id="p-3">
    Cadastre-se e receba em primeira mão os nossos<br />
    lançamentos, novas promoções e inspirações
  </p>
  <form class="d-flex">
    <input
            class="form-control me-2"
            type="search"
            placeholder="E-mail"
            aria-label="Search"
    />
    <button class="cadastroNovidades">Enviar</button>
  </form>
  <p style="padding-top: 15px" id="p-4">
    <a href="contato.php" class="text-decoration-none fs-6">Fale conosco</a>
  </p>
  <div class="imagens-fim">
    <i class="fa-brands fa-instagram" style="font-size: 20px"></i>
    <i class="fa-brands fa-youtube" style="font-size: 20px"></i>
    <i class="fa-brands fa-facebook" style="font-size: 20px"></i>
  </div>
</div>

<footer class="text-center text-lg-start bg-light text-muted">
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05)">© Todos os direitos reservados.</div>
</footer>

</body>
</html>
