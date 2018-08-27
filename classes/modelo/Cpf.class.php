<?php

class Cpf{

    private $id;
    private $cpf;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getCpf(){
        return $this->data;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
}