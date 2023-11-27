<?php

class Pessoa{
    public $id; 
    public $nome;
    public $email;
    public $data; 
    public $telefone; 
    public $senha;

    public function setAll($id, $nome, $email, $data, $telefone, $senha){
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->data = $data;
        $this->telefone = $telefone;
        $this->senha = $senha;
    }

    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function getData(){
        return $this->data;
    }

    public function getTelefone(){
        return $this->telefone;
    }
}

?>