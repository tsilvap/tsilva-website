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
<div class="row">
  <div class="col-12 col-lg-8 pb-5" data-aos="fade-up">
    <h3>Conhecimentos Técnicos</h3>
    <h5>Desenvolvimento web</h5>
    <ul>
      <li><b>HTML:</b> HTML5, HTML semântico e acessibilidade.</li>
      <li><b>CSS:</b> CSS3, Flexbox, layout responsivo com media queries, Bootstrap, Sass/SCSS.</li>
      <li><b>Javascript:</b> Javascript vanilla, sintaxe ES6.</li>
      <li><b>PHP:</b> Programação de lógica back-end com PHP 7, aderindo às melhores práticas.</li>
      <li><b>Git:</b> Git para controle de versão, integração com a plataforma GitHub.</li>
    </ul>
    <h5>Sistemas operacionais</h5>
    <ul>
      <li>
        <b>GNU/Linux:</b> Vivência em Debian GNU/Linux, fluência no terminal com shell Bash, conhecimento intermediário de
        programação Bash.
      </li>
      <li><b>Windows:</b> Conhecimento intermediário em Windows e Powershell.</li>
    </ul>
    <h5>Edição de textos</h5>
    <ul>
      <li><b>Planilhas:</b> LibreOffice Calc, Microsoft Excel.</li>
      <li><b>Tipografia:</b> LaTeX, Microsoft Word.</li>
    </ul>
  </div>

  <div class="col-12 col-lg-4 pb-5" data-aos="fade-up" data-aos-delay="50">
    <h3>Idiomas</h3>
    <h5>Português</h5>
    <p>Leitura, escrita, e fala nativa.</p>
    <h5>Inglês</h5>
    <p>Leitura, escrita, e fala fluente.</p>
  </div>
</div>

<div class="row pb-5" data-aos="fade-up" data-aos-delay="100">
  <div class="col-12">
    <h3>Experiência Profissional</h3>
  </div>
  <div class="col-12 col-lg-3">
    <h5>
      Monitor<br />
      <small class="text-muted">Colégio Dom Jaime Câmara <span class="badge badge-light">Set 2017—Dez 2017</span></small>
    </h5>
  </div>
  <div class="col-12 col-lg-9">
    <p>
      Ministrando aulas de reforço e resolução de dúvidas para alunos do Ensino Médio, nas disciplinas de Matemática,
      Física e Química.
    </p>
  </div>
  <div class="col-12 col-lg-3">
    <h5>
      Assistente Administrativo<br />
      <small class="text-muted">Tractebel Energia <span class="badge badge-light">Ago 2015—Fev 2016</span></small>
    </h5>
  </div>
  <div class="col-12 col-lg-9">
    <p>
      Trabalhando no Departamento Financeiro na sede da Tractebel, com a organização e arquivamento de documentos e
      boletos dentro do prazo de pagamento.
    </p>
  </div>
</div>

<div class="row pb-5" data-aos="fade-up">
  <div class="col-12">
    <h3>Educação</h3>
  </div>
  <div class="col-12 col-lg-3">
    <h5>
      Universidade Federal de Santa Catarina<br />
      <small class="text-muted">Engenharia Elétrica (pausado) <span class="badge badge-light">2016—2017</span></small>
    </h5>
  </div>
  <div class="col-12 col-lg-9">
    <p>
      Fui um dos dois estudantes a tirarem nota máxima no exame de admissão do PAM (o outro era um estudante de
      mestrado).
    </p>
    <p>
      Eventualmente percebi que minha paixão é desenvolvimento e ciências da computação, e meu objetivo agora é cursar
      em Stanford.
    </p>
  </div>
  <div class="col-12 col-lg-3">
    <h5>
      Colégio Dom Jaime Câmara<br />
      <small class="text-muted">Ensino Médio <span class="badge badge-light">2011—2014</span></small>
    </h5>
  </div>
  <div class="col-12 col-lg-9">
    <p>
      Incentivei meu colégio a participar de diversas olimpíadas de conhecimento, como a de Física e de Informática.
    </p>
    <p>
      Obtive excelentes resultados nas olimpíadas, inclusive obtendo a primeira colocação geral no estado de SC nas
      olimpíadas de Matemática e de Química.
    </p>
  </div>
</div>

<div class="row pb-5" data-aos="fade-up">
  <div class="col-12">
    <h3>Olimpíadas</h3>
    <h5>
      XVIII Olimpíada Brasileira de Química<br />
      <small class="text-muted">Edição 2013</small>
    </h5>
    <p>Medalha de bronze, 1º lugar em Santa Catarina.</p>
    <h5>
      XVII Olimpíada Regional de Matemática<br />
      <small class="text-muted">Edição 2014</small>
    </h5>
    <p>Medalha de ouro, 1º lugar em Santa Catarina.</p>
  </div>
</div>
HTML;

require_once '../base.php';
