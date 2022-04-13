<?php
    require_once "classePessoa.php";
    class Funcionario extends Pessoa{
        private $setor;
        private $trabalhando;
        public function mudarTrabalhando(){
            $this->setTrabalhando(!$this->getTrabalhando());
        }
        public function setSetor($s){
            $this->setor = $s;
        }
        public function setTrabalhando($t){
            $this->trabalhando = $t;
        }
        public function getSetor(){
            return $this->setor;
        }
        public function getTrabalhando(){
            return $this->trabalhando;
        }
    }
?>