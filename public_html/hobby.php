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
<div class="row justify-content-center">
  <div class="d-flex col-12 col-md-6 align-self-center justify-content-center">
    <div data-aos="fade-up">
      <p>Meus interesses incluem xadrez, e música.</p>

      <p>Você pode me desafiar no <a href="https://lichess.org/@/Tsilva"><i class="fas fa-chess-knight"></i> Lichess.</a></p>

      <p>Entre os álbuns que tenho escutado ultimamente, estão <a href="https://en.wikipedia.org/wiki/American_Football_(1999_album)">American Football - American Football (1999)</a>, <a href="https://en.wikipedia.org/wiki/Head_over_Heels_(Cocteau_Twins_album)">Cocteau Twins - Head over Heels (1983)</a>, <a href="https://en.wikipedia.org/wiki/Henry%27s_Dream">Nick Cake &amp; The Bad Seeds - Henry's Dream (1992)</a>, e <a href="https://en.wikipedia.org/wiki/Traveling_Wilburys">Traveling Wilburys - Traveling Wilburys, Volume 1 (1988)</a>.</p>
    </div>
  </div>

  <div class="d-flex col-12 col-sm-9 col-md-6 col-xl-4 align-self-center justify-content-center">
    <table class="album-grid">
      <tr>
        <td data-aos="fade-up" data-aos-delay="100">
          <a href="https://en.wikipedia.org/wiki/American_Football_(1999_album)"><span class="card"><img class="card-img" src="images/af.jpg" alt="American Football album cover"></span></a>
        </td>
        <td data-aos="fade-up" data-aos-delay="200">
          <a href="https://en.wikipedia.org/wiki/Head_over_Heels_(Cocteau_Twins_album)"><span class="card"><img class="card-img" src="images/hoh.jpg" alt="Head Over Heels album cover"></span></a>
        </td>
      </tr>
      <tr>
        <td data-aos="fade-up" data-aos-delay="300">
          <a href="https://en.wikipedia.org/wiki/Henry%27s_Dream"><span class="card"><img class="card-img" src="images/hd.jpg" alt="Henry's Dream album cover"></span></a>
        </td>
        <td data-aos="fade-up" data-aos-delay="400">
          <a href="https://en.wikipedia.org/wiki/Traveling_Wilburys"><span class="card"><img class="card-img" src="images/tw.jpg" alt="Traveling Wilburys album cover"></span></a>
        </td>
      </tr>
    </table>
  </div>
</div>
HTML;

require_once '../base.php';
