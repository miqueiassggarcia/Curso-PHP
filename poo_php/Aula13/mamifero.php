<?php
    require_once "animal.php";
    class Mamifero extends Animal{
        protected $corPelo;
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