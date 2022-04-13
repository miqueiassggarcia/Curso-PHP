<?php
    class Pessoa{
        private $nome;
        private $idade;
        private $sexo;
        public function __construct($nome,$idade,$sexo){
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
        }
        public function fazerAniv(){
            $this->setIdade($this->getIdade()+1);
        }
        public function setNome($n){
            $this->nome = $n;
        }
        public function setIdade($i){
            $this->idade = $i;
        }
        public function setSexo($s){
            $this->sexo = $s;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function getSexo(){
            return $this->sexo;
        }
    }
?>