<?php
    class Caneta{
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function rabiscar(){
            if($this->tampada == true){
                echo '<p>ERRO! Não é possível rabiscar</p>';
            }else{
            echo '<p>Estou rasbicando...</p>';
            }
        }
        public function tampar(){
            $this->tampada = true;
        }
        public function destampar(){
            $this->tampada = false;
        }
    }
?>