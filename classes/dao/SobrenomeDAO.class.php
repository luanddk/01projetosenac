<?php

require_once __DIR__ ."/../modelo/Sobrenome.class.php";

class SobrenomeDAO {
    
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
        
        $sql = "SELECT * FROM tb_sobrenomes";
        $statement = $this->getConexao()->prepare($sql);
        $statement->execute();
        $row = $statement->fetchAll();
        $sobrenomes = array();
        
        foreach ($result as $row){
            $sobrenome = new Sobrenome();
            $sobrenome->setId($row['sob_id']);
            $sobrenome->setSobrenome($row['sob_nome']);
            array_push($sobrenomes, $sobrenome);
        }
        return $sobrenomes;
    }

    public function findById($id){

        $sql = "SELECT * FROM tb_sobrenomes WHERE sob_id = $id";
        $statement = $this->getConexao()->prepare($sql);
        $statement->execute();
        $row = $statement->fetch();
        $sobrenome = new Sobrenome();
        $sobrenome->setId($row['sob_id']);
        $sobrenome->setSobrenome($row['sob_nome']);
        return $sobrenome;
    }

    public function save(Sobrenome $sobrenome){
        if ($sobrenome->getId() == null){
            $this->insert($sobrenome);
        } else {
            $this->update($sobrenome);
        }
    }
    
    private function insert(Sobrenome $sobrenome){
        $sql = "INSERT INTO tb_sobrenomes (sob_nome)
            VALUES ({$sobrenome->getSobrenome()})";
        try{    
            $this->getConexao()->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    private function update(Sobrenome $sobrenome){
    $sql = "UPDATE tb_sobrenomes SET sob_nome = {$sobrenome->getSobrenome()}
    WHERE sob_id ={$sobrenome->getId()}";

        try{    
            $this->getConexao()->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
        
    public function remove($id){
    $sql = "DELETE FROM tb_sobrenomes WHERE sob_id = $id";
        try{    
            $this->getConexao()->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }    
    }
}