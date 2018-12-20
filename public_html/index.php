<?php

$navItems = <<<HTML
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
HTML;

$content = <<<HTML
<div class="row align-items-center">
  <div class="col-12 col-sm-6" data-aos="fade-up">
    <h2>Olá!</h2>

    <p>Eu sou o Thiago. Eu tenho 20 anos, e faço desenvolvimento web. Eu trabalho com HTML, CSS, bastante JavaScript e um pouco de PHP.</p>

    <p>Eu amo código aberto, e já corrigi bugs no <a href="https://github.com/mozilla/pdf.js">PDF.js</a> da Mozilla.</p>

    <p>No momento estou procurando um emprego nesta área. Se você está procurando um desenvolvedor apaixonado pela web e
      aberto para aprender coisas novas, vamos conversar, entre em contato.</p>
  </div>
  <div class="col-12 col-sm-6" data-aos="fade-up" data-aos-delay="500">
    <div class="card">
      <img src="images/notebook.jpeg" alt="Notebook e livro sobre mesa" class="card-img" />
    </div>
  </div>
</div>

HTML;

require_once '../base.php';
