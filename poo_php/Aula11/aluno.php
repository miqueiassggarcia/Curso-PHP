<?php
    require_once "classePessoa.php";
    class Aluno extends Pessoa{
        protected $matricula;
        protected $curso;
        function __construct($n,$i,$s,$m,$c){
            $this->setNome($n);
            $this->setIdade($i);
            $this->setSexo($s);
            $this->setMatricula($m);
            $this->setCurso($c);
        }
        public function pagarMensal(){
            echo "<p>Pagando mesalidade do aluno {$this->nome}</p>";
        }
        public function getMatricula(){
                return $this->matricula;
        }
        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }
        public function getCurso(){
            return $this->curso;
        }
        public function setCurso($curso){
            $this->curso = $curso;
        }
    }
?>