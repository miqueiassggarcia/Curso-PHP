<?php
    require_once "classePessoa.php";
    class Professor extends Pessoa{
        private $especialidade;
        private $salario;
        public function mudarTrabalho($t){
            $this->setEspecialidade($t);
        }
        public function setEspecialidade($e){
            $this->especialidade = $e;
        }
        public function setSalario($s){
            $this->salario = $s;
        }
        public function getEspecialidade(){
            return $this->especialidade;
        }
        public function getSalario(){
            return $this->salario;
        }
    }
?>