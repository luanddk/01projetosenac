<?php

class Sobrenome {

    private $id;
    private $sobrenome;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getSobrenome(){
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome){
        if(is_nan($sobrenome)){
            $this->sobrenome = $sobrenome;
            return true;
        } else {
      return false;
        }
    }

}