<?php

$navItems = <<<HTML
<li class="nav-item">
  <a class="nav-link" href="index.php">Home</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="hobby.php">Interesses</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="cv.php">Currículo</a>
</li>
<li class="nav-item active">
  <a class="nav-link" href="contato.php">Contato</a>
</li>
HTML;

$content = <<<HTML
<div class="align-self-center" data-aos="fade-up">
  <div class="card">
    <img src="images/contato.jpg" alt="Contato" class="card-img-top" />
    <div class="card-body">
      <h2 class="card-title">Contato</h2>
      <address class="card-text">
        Você pode entrar em contato comigo através de:
        <ul>
          <li>
            <b>Email (de preferência):</b>
            <a href="mailto:thiagodasilva@protonmail.com">thiagodasilva@protonmail.com</a>
          </li>
          <li>
            <b>Telefone celular:</b> Pergunte-me por e-mail. :-)
          </li>
        </ul>
      </address>
    </div>
  </div>
</div>
HTML;

require_once '../base.php';
