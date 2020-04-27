<?php

include "servicos/servicoMensagemSessao.php";
include "srvicos/servicosValidacao.php";
include "servicos/servicoCategoriaCompetidos";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

header('location:index2.php');



