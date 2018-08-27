<?php

class Conexao {

    public static function get(){
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "db_projetosenac";
        try{
        $conexao = new PDO("mysql:host=$servidor; dbname=$banco",$usuario, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexao;
        } catch(PDOException $e) {
            echo "Conexão falhou: {$e->getMessage()}";
        }
        return null;
    }
}