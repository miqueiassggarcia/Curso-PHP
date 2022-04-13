<?php
    require_once "mamifero.php";
    class Canguru extends Mamifero{
        public function usarBolsa(){
            echo "<p>Usando bolsa</p>";
        }
        public function locomover(){
            echo "<p>Pulando</p>";
        }
    }
?>