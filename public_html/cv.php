<?php

$content = <<<HTML
<h2>Conhecimentos Técnicos</h2>
<h3>Desenvolvimento web</h3>
<div class="cv-entry">
  <div class="entry-text">
    <ul>
      <li><b>HTML:</b> HTML5, HTML semântico e acessibilidade.
      <li><b>CSS:</b> CSS3, Flexbox, layout responsivo com media queries, pré-processador Sass.
      <li><b>Javascript:</b> Javascript vanilla, sintaxe ES6.
      <li><b>PHP:</b> Programação de lógica back-end com PHP 7, aderindo às melhores práticas.
      <li><b>Git:</b> Git para controle de versão, integração com a plataforma GitHub.
    </ul>
  </div>
</div>
<h3>Sistemas operacionais</h3>
<div class="cv-entry">
  <div class="entry-text">
    <ul>
      <li><b>GNU/Linux:</b> Vivência em Debian GNU/Linux, fluência no terminal com shell Bash, conhecimento
        intermediário de programação Bash.
      <li><b>Windows:</b> Conhecimento intermediário em Windows e Powershell.
    </ul>
  </div>
</div>
<h3>Edição de textos</h3>
<div class="cv-entry">
  <div class="entry-text">
    <ul>
      <li><b>Planilhas:</b> LibreOffice Calc, Microsoft Excel.
      <li><b>Tipografia:</b> LaTeX, Microsoft Word.
    </ul>
  </div>
</div>

<h2>Idiomas</h2>
<h3>Inglês</h3>
<p>Leitura, escrita, e fala fluente.

<h2>Experiência Profissional</h2>
<h3>Monitor</h3>
<h3>Colégio Dom Jaime Câmara</h3>
<div class="cv-entry">
  <div class="entry-date">
    Set 2017—Dez 2017
  </div>
  <div class="entry-text">
    Ministrando aulas de reforço e resolução de dúvidas para alunos do Ensino Médio, nas disciplinas de Matemática,
    Física e Química.
  </div>
</div>

<h3>Assistente Administrativo</h3>
<h3>ENGIE Brasil</h3>
<div class="cv-entry">
  <div class="entry-date">
    Ago 2015—Fev 2016
  </div>
  <div class="entry-text">
    Trabalhando no Departamento Financeiro na sede da Tractebel, com a organização e arquivamento de documentos e
    boletos dentro do prazo de pagamento.
  </div>
</div>

<h2>Educação</h2>
<h3>Universidade Federal de Santa Catarina</h3>
<div class="cv-entry">
  <div class="entry-date">
    2016—2017
  </div>
  <div class="entry-text">
    Engenharia Elétrica (pausado).
  </div>
</div>

<h3>Colégio Dom Jaime Câmara</h3>
<div class="cv-entry">
  <div class="entry-date">
    2011—2014
  </div>
  <div class="entry-text">
    Ensino Médio.
  </div>
</div>

<h2>Olimpíadas</h2>
<h3>XVIII Olimpíada Brasileira de Química</h3>
<div class="cv-entry">
  <div class="entry-date">
    Edição 2013
  </div>
  <div class="entry-text">
    Medalha de bronze (1º lugar em Santa Catarina).
  </div>
</div>

<h3>XVII Olimpíada Regional de Matemática</h3>
<div class="cv-entry">
  <div class="entry-date">
    Edição 2014
  </div>
  <div class="entry-text">
    Medalha de ouro (1º lugar em Santa Catarina).
  </div>
</div>

HTML;

require_once '../base.php';
