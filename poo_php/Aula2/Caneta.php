<?php
    class Caneta{
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;

        function rabiscar(){
            if($this->tampada == true){
                echo '<p>ERRO! Não é possível rabiscar</p>';
            }else{
            echo '<p>Estou rasbicando...</p>';
            }
        }
        function tampar(){
            $this->tampada = true;
        }
        function destampar(){
            $this->tampada = false;
        }
    }
?>