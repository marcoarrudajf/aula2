<?php

//buscando as informações de index action
include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];


defineCatCompetidor($nome, $idade);

header('location: index.php');




