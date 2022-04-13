<?php
    require_once "usuario.php";
    require_once "video.php";
    class Visualizacao{
        private $espectador;
        private $filme;
        public function __construct($espectador,$filme){
            $this->setEspectador($espectador);
            $this->setFilme($filme);
            $this->getEspectador()->setTotAssitido($this->getEspectador()->getTotAssitido()+1);
            $this->getFilme()->setViews($this->getFilme()->getViews()+1);
        }
        public function avaliar(){
            $this->getFilme()->setavaliacao(5);
        }
        public function avaliarNota($nota){
            $this->getFilme()->setavaliacao($nota);
        }
        public function avaliarPorc($porc){
            if($porc<=20){
                $nota=3;
            }elseif($porc<=50){
                $nota=5;
            }elseif($porc<=90){
                $nota=8;
            }else{
                $nota=10;
            }
            $this->getFilme()->setavaliacao($nota);
        }
        public function getFilme()
        {
                return $this->filme;
        }
        public function setFilme($filme)
        {
                $this->filme = $filme;
                return $this;
        }
        public function getEspectador()
        {
                return $this->espectador;
        }
        public function setEspectador($espectador)
        {
                $this->espectador = $espectador;
                return $this;
        }
    }
?>