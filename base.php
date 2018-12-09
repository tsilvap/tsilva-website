<!DOCTYPE html>
  <html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Thiago da Silva</title>

    <meta name="description" content="Site pessoal de um desenvolvedor web.">
    <meta name="keywords" content="desenvolvedor, desenvolvimento, web, pessoal">
    <meta name="author" content="Thiago da Silva">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Code+Pro&text=Thiago%20da%20Silva">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
  </head>
  <body>
    <div class="page-wrapper">
      <header>
        <a class="logo" href="/">Thiago da Silva</a>
        <nav class="navbar">
          <a class="nav-button" href="hobby.php">Interesses</a>
          <a class="nav-button" href="cv.php">Currículo</a>
          <a class="nav-button" href="contato.php">Contato</a>
        </nav>
      </header>
      <main>

<?= $content ?>

      </main>
      <footer>
        <ul>
          <li><a href="https://github.com/tsilvap"><i class="fab fa-github"></i> GitHub</a> • <a href="https://www.linkedin.com/in/thiago-da-silva-268827176/"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
          <li><a href="https://github.com/tsilvap/tsilva-website">Código-fonte desta página no meu <i class="fab fa-github"></i> GitHub.</a>
        </ul>
      </footer>
    </div>
  </body>
</html>
