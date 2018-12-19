<?php

$navItems = <<<HTML
<li class="nav-item">
  <a class="nav-link" href="index.php">Home</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="hobby.php">Interesses</a>
</li>
<li class="nav-item active">
  <a class="nav-link" href="cv.php">Currículo</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="contato.php">Contato</a>
</li>
HTML;

$content = <<<HTML
<div class="py-3" data-aos="fade-up">
  <h2>Conhecimentos Técnicos</h2>
  <h4>Desenvolvimento web</h4>
  <ul>
  <li><b>HTML:</b> HTML5, HTML semântico e acessibilidade.</li>
  <li><b>CSS:</b> CSS3, Flexbox, layout responsivo com media queries, Bootstrap, Sass/SCSS.</li>
  <li><b>Javascript:</b> Javascript vanilla, sintaxe ES6.</li>
  <li><b>PHP:</b> Programação de lógica back-end com PHP 7, aderindo às melhores práticas.
  <li><b>Git:</b> Git para controle de versão, integração com a plataforma GitHub.
  </ul>
  <h4>Sistemas operacionais</h4>
  <ul>
  <li><b>GNU/Linux:</b> Vivência em Debian GNU/Linux, fluência no terminal com shell Bash, conhecimento
  intermediário de programação Bash.
  <li><b>Windows:</b> Conhecimento intermediário em Windows e Powershell.
  </ul>
  <h4>Edição de textos</h4>
  <ul>
  <li><b>Planilhas:</b> LibreOffice Calc, Microsoft Excel.
  <li><b>Tipografia:</b> LaTeX, Microsoft Word.
  </ul>
</div>

<div class="py-3"  data-aos="fade-up">
  <h2>Idiomas</h2>
  <h4>Português</h4>
  <p>Leitura, escrita, e fala nativa.
  <h4>Inglês</h4>
  <p>Leitura, escrita, e fala fluente.
</div>

<div class="py-3" data-aos="fade-up">
  <h2>Experiência Profissional</h2>
  <h4>Monitor</h4>
  <h4>Colégio Dom Jaime Câmara</h4>
  Set 2017—Dez 2017
  Ministrando aulas de reforço e resolução de dúvidas para alunos do Ensino Médio, nas disciplinas de Matemática,
  Física e Química.
  <h4>Assistente Administrativo</h4>
  <h4>ENGIE Brasil</h4>
  Ago 2015—Fev 2016
  Trabalhando no Departamento Financeiro na sede da Tractebel, com a organização e arquivamento de documentos e
  boletos dentro do prazo de pagamento.
</div>

<div class="py-3" data-aos="fade-up">
  <h2>Educação</h2>
  <h4>Universidade Federal de Santa Catarina</h4>
  2016—2017
  Engenharia Elétrica (pausado).

  <h4>Colégio Dom Jaime Câmara</h4>
  2011—2014
  Ensino Médio.
</div>

<div class="py-3" data-aos="fade-up">
  <h2>Olimpíadas</h2>
  <h4>XVIII Olimpíada Brasileira de Química</h4>
  Edição 2013
  Medalha de bronze (1º lugar em Santa Catarina).

  <h4>XVII Olimpíada Regional de Matemática</h4>
  Edição 2014
  Medalha de ouro (1º lugar em Santa Catarina).
</div>
HTML;

require_once '../base.php';
