<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/crud_yt/models/pessoa.php';

$id = $_POST['id'];
$nome = $_POST['nome'];

$pessoa = new Pessoa($id);

$pessoa->setNome($nome);

$pessoa->atualizar();

header('Location: /crud_yt/index.php');
exit();
