<?php
    require_once "Classelutador.php";
    class Luta{
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;
        private function setDesafiado($d){
            $this->desafiado = $d;
        }
        private function setDesafiante($d){
            $this->desafiante = $d;
        }
        private function setRounds($r){
            $this->rounds = $r;
        }
        private function setAprovada($p){
            $this->aprovada = $p;
        }
        private function getDesafiado(){
            return $this->desafiado;
        }
        private function getDesafiante(){
            return $this->desafiante;
        }
        private function getRounds(){
            return $this->rounds;
        }
        private function getAprovada(){
            return $this->aprovada;
        }
        function marcarLuta($l1,$l2){
            if($l1->getCategoria()==$l2->getCategoria()&&$l1->getNome()<>$l2->getNome()){
                   $this->setAprovada(true);
                   $this->setDesafiado($l1);
                   $this->setDesafiante($l2);
            }else{
                $this->setAprovada(false);
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
        }
        function lutar(){
            if($this->getAprovada()){
                $this->getDesafiado()->apresentar();
                $this->getDesafiante()->apresentar();
                $vencedor = rand(0,2);
                switch($vencedor){
                    case 0 :
                    echo "<p>Empatou!</p>";
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                    break;
                    case 1 :
                    echo "<p>O {$this->getDesafiado()->getNome()} ganhou!</p>";
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->perderLuta();
                    break;
                    case 2 :
                    echo "<p>O {$this->getDesafiante()->getNome()} ganhou!</p>";
                    $this->getDesafiado()->perderLuta();
                    $this->getDesafiante()->ganharLuta();
                }
            }else{
                echo "<p>A luta não pode acontecer</p>";
            }
        }
    }
?>