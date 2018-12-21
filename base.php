<!DOCTYPE html>
  <html lang="pt-BR">
  <head>
    <!-- Tags meta obrigatórias -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <meta name="description" content="Site pessoal de um desenvolvedor web." />
    <meta name="keywords" content="desenvolvedor, desenvolvimento, web, pessoal" />
    <meta name="author" content="Thiago da Silva" />

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
    <!-- Animate on Scroll -->
    <link rel="stylesheet" href="css/aos/aos.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome/all.min.css" />
    <!-- Source Code Pro para o logo -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Code+Pro&amp;text=Thiago%20da%20Silva" />
    <!-- Estilos próprios -->
    <link rel="stylesheet" href="css/style.css" />

    <title>Thiago da Silva</title>
  </head>
  <body>
    <div class="page-wrapper d-flex flex-column">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top">
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

      <div class="content container d-flex flex-column flex-grow-1 justify-content-center">
        <?= $content ?>
      </div>

      <footer>
        <div class="container">
          <div class="d-flex justify-content-center text-center">
            <ul>
              <li>
                <a href="https://github.com/tsilvap"><i class="fab fa-github icon-large"></i></a>
                <a href="https://www.linkedin.com/in/thiago-da-silva-268827176/"><i class="fab fa-linkedin-in icon-large"></i></a>
                <a href="#"><i class="fab fa-google-plus-g icon-large"></i></a>
              </li>
              <li><a href="https://github.com/tsilvap/tsilva-website">Código-fonte desta página no meu GitHub.</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>

    <!-- jQuery primeiro, depois Popper.js, depois JS Bootstrap -->
    <script src="js/jquery/jquery.slim.min.js"></script>
    <script src="js/popper.js/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Animate on Scroll -->
    <script src="js/aos/aos.js"></script>
    <script>AOS.init({
      duration: 1000,
      once: true,
    });</script>

    <!-- Scripts próprios -->
    <script src="js/script.js"></script>
  </body>
</html>
