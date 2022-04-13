<?php
    require_once "aluno.php";
    class Bolsista extends Aluno{
        private $bolsa;
        public function pagarMensal(){
            echo "<p>{$this->getNome()} é bolsista! Então paga com desconto!</p>";
        }
        public function renovarBolsa(){
           echo "<p>Bolsa renovada</p>";
        }
        public function getBolsa(){
            return $this->bolsa;
        }
        public function setBolsa($bolsa){
            $this->bolsa = $bolsa;
        }
    }
?>