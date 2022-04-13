<?php
    require_once "mamifero.php";
    class Cachorro extends Mamifero{
        public function enterrarOsso(){
            echo "<p>Enterrando osso</p>";
        }
        public function abanarRabo(){
            echo "<p>Abanando rabo</p>";
        }
        public function emitirSom(){
            echo "<p>Latindo</p>";
        }
    }
?>