<?php
require_once(__DIR__ ."/./Conexao.class.php");
require_once(__DIR__ ."/../modelo/Sobrenome.class.php");
class SobrenomeDAO {
    
    public function findAll(){
        
        $sql = "SELECT * FROM tb_clientes";
        $statement = Conexao::get()->prepare($sql);
        $statement->execute();
        $row = $statement->fetchAll();
        $sobrenomes = array();
        
        foreach ($result as $row){
            $sobrenome = new Sobrenome();
            $sobrenome->setId($row['cli_id']);
            $sobrenome->setSobrenome($row['cli_sobrenome']);
            array_push($sobrenomes, $sobrenome);
        }
        return $sobrenomes;
    }
    public function findById($id){
        $sql = "SELECT * FROM tb_clientes WHERE cli_id = $id";
        $statement = Conexao::get()->prepare($sql);
        $statement->execute();
        $row = $statement->fetch();
        $sobrenome = new Sobrenome();
        $sobrenome->setId($row['cli_id']);
        $sobrenome->setSobrenome($row['cli_sobrenome']);
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
        $sql = "INSERT INTO tb_clientes (cli_sobrenome)
            VALUES ({$sobrenome->getSobrenome()})";
        try{    
            Conexao::get()->prepare($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
    private function update(Sobrenome $sobrenome){
    $sql = "UPDATE tb_clientes SET cli_sobrenome = {$sobrenome->getSobrenome()}
    WHERE cli_id ={$sobrenome->getId()}";
        try{    
            $this->getConexao()->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
        
    public function remove($id){
    $sql = "DELETE FROM tb_clientes WHERE cli_id = $id";
        try{    
            Conexao::get()->prepare($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }    
    }
}
