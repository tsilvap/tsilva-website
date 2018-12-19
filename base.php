<!DOCTYPE html>
  <html lang="pt-BR">
  <head>
    <!-- Tags meta obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Thiago da Silva</title>

    <meta name="description" content="Site pessoal de um desenvolvedor web.">
    <meta name="keywords" content="desenvolvedor, desenvolvimento, web, pessoal">
    <meta name="author" content="Thiago da Silva">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Code+Pro&text=Thiago%20da%20Silva">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="index.php">Thiago da Silva</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Expandir/ocultar barra de navegação">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="hobby.php">Interesses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cv.php">Currículo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contato.php">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <?= $content ?>
    </div>
      <footer>
        <ul>
          <li><a href="https://github.com/tsilvap"><i class="fab fa-github"></i> GitHub</a> • <a href="https://www.linkedin.com/in/thiago-da-silva-268827176/"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
          <li><a href="https://github.com/tsilvap/tsilva-website">Código-fonte desta página no meu <i class="fab fa-github"></i> GitHub.</a>
        </ul>
      </footer>
    </div>

    <!-- jQuery primeiro, depois Popper.js, depois JS Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
