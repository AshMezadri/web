<?php

    class Pessoa{
        public $id; 
        public $nome;
        public $email;
        public $senha;
        public function setAll($id, $nome, $email, $senha){
            $this->id=$id;
            $this->nome=$nome;
            $this->email=$email;
            $this->senha=$senha;
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
    }
?>