<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/crud_yt/models/pessoa.php';


$nome = $_POST['nome'];

$pessoa = new Pessoa();

$pessoa->setNome($nome);

$pessoa->criar();

header('Location: /crud_yt/index.php');
exit();