<?php

class Nome {

    private $id;
    private $nome;

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
        if(is_nan($nome)){
            $this->nome = $nome;
            return true;
        } else {
      return false;
        }      
    }
}   