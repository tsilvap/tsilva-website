<?php

$navItems = <<<HTML
<li class="nav-item">
  <a class="nav-link" href="index.php">Home</a>
</li>
<li class="nav-item active">
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
<div class="content-wrapper">
  <div class="paragraph-wrapper">
    <p>Meus interesses incluem xadrez, e música.

    <p>Você pode me desafiar no <a href="https://lichess.org/@/Tsilva"><i class="fas fa-chess-knight"></i> Lichess.</a>

    <p>Entre os álbuns que tenho escutado ultimamente, estão <a href="https://en.wikipedia.org/wiki/American_Football_(1999_album)">American Football - American Football (1999)</a>, <a href="https://en.wikipedia.org/wiki/Head_over_Heels_(Cocteau_Twins_album)">Cocteau Twins - Head over Heels (1983)</a>, <a href="https://en.wikipedia.org/wiki/Henry%27s_Dream">Nick Cake &amp; The Bad Seeds - Henry's Dream (1992)</a>, e <a href="https://en.wikipedia.org/wiki/Traveling_Wilburys">Traveling Wilburys - Traveling Wilburys, Volume 1 (1988)</a>.
  </div>

  <table class="album-grid">
    <tr>
      <td><a href="https://en.wikipedia.org/wiki/American_Football_(1999_album)"><img class="album-cell" src="images/American Football Deluxe_icon.jpg" alt="American Football album cover"></a>
      <td><a href="https://en.wikipedia.org/wiki/Head_over_Heels_(Cocteau_Twins_album)"><img class="album-cell" src="images/Head Over Heels_icon.jpeg" alt="Head Over Heels album cover"></a>
    </tr>
    <tr>
      <td><a href="https://en.wikipedia.org/wiki/Henry%27s_Dream"><img class="album-cell" src="images/Henry's Dream_icon.jpg" alt="Henry's Dream album cover"></a>
      <td><a href="https://en.wikipedia.org/wiki/Traveling_Wilburys"><img class="album-cell" src="images/Traveling Wilburys_icon.jpeg" alt="Traveling Wilburys album cover"></a>
    </tr>
  </table>
</div>

HTML;

require_once '../base.php';
