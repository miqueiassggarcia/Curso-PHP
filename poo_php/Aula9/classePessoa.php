<?php
    class Pessoa{
        private $nome;
        private $idade;
        private $sexo;
        public function fazerAniver(){
            $this->setIdade($this->getIdade()+1);
        }
        public function __construct($n,$i,$s){
            $this->setNome($n);
            $this->setIdade($i);
            $this->setSexo($s);
        }
        private function setIdade($i){
            $this->idade = $i;
        }
        private function getIdade(){
            return $this->idade;
        }
        private function setNome($n){
            $this->nome = $n;
        }
        public function getNome(){
            return $this->nome;
        }
        private function setSexo($s){
            $this->sexo = $s;
        }
        private function getSexo(){
            return $this->sexo;
        }
    }
?>