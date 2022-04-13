<?php
    require_once "classeAnimal.php";
    class Mamifero extends Animal{
        private $corPelo;
        public function locomover(){
            echo "<p>Correndo</p>";
        }
        public function alimentar(){
            echo "<p>Mamando</p>";
        }
        public function emitirSom(){
            echo "<p>Som de mamifero</p>";
        }
        public function getCorPelo(){
                return $this->corPelo;
        }
        public function setCorPelo($corPelo){
                $this->corPelo = $corPelo;
                return $this;
        }
    }
?>