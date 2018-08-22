<?php

class Cliente {

    private $nome;
    private $sobrenome;
    private $data_nascimento;
    private $cpf;
    private $sexo;
    private $cep;
    private $logradouro;
    private $observacoes;
    private $bairro;
    private $cidade;
    private $estado;
    private $email;


    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        if(is_nan($nome)){
            $this->nome = $nome;
            return true;
        }    
      return false;
    }

    public function getSobrenome(){
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome){
        if(is_nan($sobrenome)){
            $this->sobrenome = $sobrenome;
            return true;
        }
      return false;
    }

    public function getData(){
        return $this->data_nascimento;
    }

    public function setData($data_nascimento){
        $this->data_nascimento = $data_nascimento
    }
    
    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    
    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function getCep(){
        return $this->cep;
    }

    public function setCep($cep){
        $this->cep = $cep;
    }
    
    public function getLogradouro(){
        return $this->logradouro;
    }

    public function setLogradouro($logradouro){
        $this->logradouro = $logradouro;
    }

    public function getObservacoes(){
        return $this->observacoes;
    }

    public function setObservacoes($observacoes){
        $this->observacoes = $observacoes;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function setBairro($bairro){
        $this->bairro = $bairro;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }
}