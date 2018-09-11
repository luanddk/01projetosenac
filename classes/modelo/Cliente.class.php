<?php

require_once(__DIR__ . "/./Sexo.class.php");
require_once(__DIR__ . "/./UnidadeFederativa.class.php");
require_once(__DIR__ . "/./Cidade.class.php");
require_once(__DIR__ . "/./Bairro.class.php");


class Cliente {

    private $id;
    private $nome;
    private $sobrenome;
    private $data;
    private $sexo;
    private $cpf;
    private $cep;
    private $unidadefederativa;
    private $cidade;
    private $bairro;
    private $logradouro;
    private $observacao;
    private $email;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getSobrenome(){
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }

    public function getData(){
        return $this->data;
    }

    public function setData($data){
        $this->data = $data;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo(Sexo $sexo){
        $this->sexo = $sexo;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getCep(){
        return $this->cep;
    }

    public function setCep($cep){
        $this->cep = $cep;
    }

    public function getUnidadeFederativa(){
        return $this->unidadefederativa;
    }

    public function setUnidadeFederativa(UnidadeFederativa $unidadefederativa){
        $this->unidadefederativa = $unidadefederativa;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade(Cidade $cidade){
        $this->cidade = $cidade;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function setBairro(Bairro $bairro){
        $this->bairro = $bairro;
    }

    public function getLogradouro(){
        return $this->logradouro;
    }

    public function setLogradouro($logradouro){
        $this->logradouro = $logradouro;
    }

    public function getObservacao(){
        return $this->observacao;
    }

    public function setObservacao($observacao){
        $this->observacao = $observacao;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }
}