<?php
require_once(__DIR__ . "/./Conexao.class.php");
require_once(__DIR__ . "/../modelo/Sexo.class.php");
require_once(__DIR__ . "/../modelo/Bairro.class.php");
require_once(__DIR__ . "/../modelo/Cidade.class.php");
require_once(__DIR__ . "/../modelo/UnidadeFederativa.class.php");

class ClienteDAO {
    
    private $conexao;
    function __construct() {
        $this->conexao = Conexao::get();
    }

    private function insert(Cliente $cliente) {
        $sql = "INSERT INTO tb_clientes (cli_nome, cli_sobrenome, cli_data, cli_sex_id, cli_cpf, 
                            cli_uf_id, cli_cid_id, cli_bai_id, 
                            cli_cep, cli_logradouro, cli_observacoes, 
                            cli_email) 
        VALUES (:nome, :sobrenome, :nascimento, :sexo, :cpf, 
                :estado, :cidade, :bairro, 
                :cep, :logradouro, :observacoes, :email)";
        try {
            $nome = $cliente->getNome();
            $sobrenome = $cliente->getSobrenome();
            $nascimento = $cliente->getData();
            $sexo = $cliente->getSexo()->getId();
            $cpf = $cliente->getCpf();
            $estado = $cliente->getUnidadeFederativa()->getId();
            $cidade = $cliente->getCidade()->getId();
            $bairro = $cliente->getBairro()->getId();
            $statement = $this->conexao->prepare($sql);
            $statement->bindParam(':nome', $nome);
            $statement->bindParam(':sobrenome', $sobrenome);
            $statement->bindParam(':nascimento', $nascimento);
            $statement->bindParam(':sexo', $sexo);
            $statement->bindParam(':cpf', $cpf);
            $statement->bindParam(':estado', $estado);
            $statement->bindParam(':cidade', $cidade);
            $statement->bindParam(':bairro', $bairro);
            $statement->execute();
            return $this->findById($this->conexao->lastInsertId());
        } catch(PDOException $e) {
            echo $e->getMessage();
            return null;
        }
    }

    private function update(Cliente $cliente) {
        $sql = "UPDATE tb_clientes SET cli_nome=:nome WHERE cli_id=:id";
        try {
            $statement = $this->conexao->prepare($sql);
            $nome = $cliente->getNome();
            $id = $cliente->getId();
            $statement->bindParam(':nome', $nome);
            $statement->bindParam(':id', $id);
            $statement->execute();
            return $this->findById($id);
        } catch(PDOException $e) {
            echo $e->getMessage();
            return null;
        }
    }
    
    public function save(Cliente $cliente) {
        if (is_null($marca->getId())) {
            return $this->insert($cliente);
        } else {
            return $this->update($cliente);
        }
    }

    public function remove($id) {
        $sql = "DELETE FROM tb_clientes WHERE cli_id=:id";
        try {
            $statement = $this->conexao->prepare($sql);
            $statement->bindParam(':id', $id);
            $statement->execute();
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function findAll() {
        $sql = "SELECT * FROM tb_clientes";
        $statement = $this->conexao->prepare($sql);
        $statement->execute();
        $rows = $statement->fetchAll();
        $clientes = array();
        foreach ($rows as $row) {
            $cliente = new Cliente();
            $cliente->setId($row['cli_id']);
            $cliente->setNome($row['cli_nome']);
            array_push($clientes, $cliente);
        }
        return $clientes;
    }

    public function findById($id) {
        $sql = "SELECT * FROM tb_clientes WHERE cli_id=:id";
        $statement = $this->conexao->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $row = $statement->fetch();
        $cliente = new Cliente();
        $cliente->setId($row['cli_id']);
        $cliente->setNome($row['cli_nome']);
        return $cliente;
    }
}