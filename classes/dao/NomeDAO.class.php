<?php

require_once __DIR__ ."/../modelo/Nome.class.php";

class NomeDAO {
    
    private function getConexao(){
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "db_cadastro_cliente";
        $conexao = new PDO("mysql:host=$servidor; dbname=$banco",$usuario, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexao;
    }

    public function findAll(){
        
        $sql = "SELECT * FROM tb_nomes";
        $statement = $this->getConexao()->prepare($sql);
        $statement->execute();
        $row = $statement->fetchAll();
        $nomes = array();
        
        foreach ($result as $row){
            $nome = new Nome();
            $nome->setId($row['nom_id']);
            $nome->setNome($row['nom_nome']);
            array_push($nomes, $nome);
        }
        return $nomes;
    }

    public function findById($id){

        $sql = "SELECT * FROM tb_nomes WHERE nom_id = $id";
        $statement = $this->getConexao()->prepare($sql);
        $statement->execute();
        $row = $statement->fetch();
        $nome = new Nome();
        $nome->setId($row['nom_id']);
        $nome->setNome($row['nom_nome']);
        return $nome;
    }

    public function save(Nome $nome){
        if ($nome->getId() == null){
            $this->insert($nome);
        } else {
            $this->update($nome);
        }
    }
    
    private function insert(Nome $nome){
        $sql = "INSERT INTO tb_nomes (nom_nome)
            VALUES ({$nome->getNome()})";
        try{    
            $this->getConexao()->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    private function update(Nome $nome){
    $sql = "UPDATE tb_nomes SET nom_nome = {$nome->getNome()}
    WHERE nom_id ={$nome->getId()}";

        try{    
            $this->getConexao()->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
        
    public function remove($id){
    $sql = "DELETE FROM tb_nomes WHERE nom_id = $id";
        try{    
            $this->getConexao()->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }    
    }
}