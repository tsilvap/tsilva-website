<!DOCTYPE html>
  <html lang="pt-BR">
  <head>
    <!-- Tags meta obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Animate on Scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

    <title>Thiago da Silva</title>

    <meta name="description" content="Site pessoal de um desenvolvedor web.">
    <meta name="keywords" content="desenvolvedor, desenvolvimento, web, pessoal">
    <meta name="author" content="Thiago da Silva">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Code+Pro&text=Thiago%20da%20Silva">
  </head>
  <body>
    <div class="page-wrapper d-flex flex-column">
      <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
        <div class="container">
          <a class="navbar-brand position-relative" href="index.php">Thiago da Silva</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Expandir/ocultar barra de navegação">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <?= $navItems ?>
            </ul>
          </div>
        </div>
      </nav>

      <div class="content container flex-grow-1">
        <?= $content ?>
      </div>

      <footer class="">
        <div class="container">
          <div class="d-flex justify-content-center text-center">
            <ul>
              <li><a href="https://github.com/tsilvap"><i class="fab fa-github icon-large"></i></a> <a href="https://www.linkedin.com/in/thiago-da-silva-268827176/"><i class="fab fa-linkedin-in icon-large"></i></a> <a href="#"><i class="fab fa-google-plus-g icon-large"></i></a></li>
              <li><a href="https://github.com/tsilvap/tsilva-website">Código-fonte desta página no meu GitHub.</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>

    <!-- jQuery primeiro, depois Popper.js, depois JS Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Animate on Scroll -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init({
      duration: 1000,
      once: true,
    });</script>

    <script src="js/script.js"></script>
  </body>
</html>
