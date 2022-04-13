<?php
    require_once "classeAnimal.php";
    class Ave extends Animal{
        private $corPena;
        public function locomover(){
            echo "<p>Voando</p>";
        }
        public function alimentar(){
            echo "<p>Comer frutas</p>";
        }
        public function emitirSom(){
            echo "<p>Som de ave</p>";
        }
        public function fazerNinho(){
            echo "<p>Fazendo ninho</p>";
        }
        public function getCorPena(){
                return $this->corPena;
        }
        public function setCorPena($corPena){
                $this->corPena = $corPena;
                return $this;
        }
    }
?>