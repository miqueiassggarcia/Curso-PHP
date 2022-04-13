<?php
    require_once "pessoa.php";
    class Usuario extends Pessoa{
        private $login;
        private $totAssitido;
        public function assistirMaisUm(){
            $this->setTotAssitido($this->getTotAssitido()+1);
        }
        public function __construct($nome,$idade,$sexo,$login){
            parent::__construct($nome,$idade,$sexo);
            $this->setLogin($login);
            $this->setTotAssitido(0);
        }
        public function getTotAssitido()
        {
                return $this->totAssitido;
        }
        public function setTotAssitido($totAssitido)
        {
                $this->totAssitido = $totAssitido;
                return $this;
        }
        public function getLogin()
        {
                return $this->login;
        }
        public function setLogin($login)
        {
                $this->login = $login;
                return $this;
        }
    }
?>