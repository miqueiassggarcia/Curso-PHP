<?php
    require_once "classePessoa.php";
    class Aluno extends Pessoa{
        private $matric;
        private $curso;
        public function cancelarMatr(){
            $this->setMatric(false);
        }
        public function setMatric($m){
            $this->matric = $m;
        }
        public function setCurso($c){
            $this->curso = $c;
        }
        public function getMatric(){
            return $this->matric;
        }
        public function getCurso(){
            return $this->curso;
        }
    }
?>