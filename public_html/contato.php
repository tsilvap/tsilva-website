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
<div data-aos="fade-up">
  <h2>Contato</h2>
  <address>
    Você pode entrar em contato comigo através de:
    <ul>
      <li><b>Email (de preferência):</b>
        <a href="mailto:thiagodasilva@protonmail.com">thiagodasilva@protonmail.com</a></li>
      <li><b>Telefone celular:</b>
        Pergunte-me por e-mail. :-)</li>
    </ul>
  </address>
</div>
HTML;

require_once '../base.php';
