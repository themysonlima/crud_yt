<?php
require_once 'conexao.php';

class Pessoa
{
    private $id_pessoa;
    private $nome;

    public static function listar()
    {
        try {
            $conexao = Conexao::conectar();
            $sql = "SELECT * FROM pessoa";
            $stmt = $conexao->prepare($sql);
            $stmt->execute();
            $lista = $stmt->fetchAll();
            return $lista;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}