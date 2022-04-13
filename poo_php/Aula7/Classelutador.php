<?php
    class Lutador{
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;
        public function __construct($no,$na,$id,$al,$pe,$vi,$de,$em){
            $this->setNome($no);
            $this->setNacionalidade($na);
            $this->setIdade($id);
            $this->setAltura($al);
            $this->setPeso($pe);
            $this->setVitorias($vi);
            $this->setDerrotas($de);
            $this->setEmpates($em);
        }
        public function apresentar(){
            echo "<p>-------------------------------------------------------------------------</p>";
            echo "<p>CHEGOU A HORA!<br> O Lutador ".$this->getNome();
            echo " veio diretamente de ".$this->getNacionalidade();
            echo "<br>tem ".$this->getIdade()." anos, ".$this->getAltura()." metros e pesa ".$this->getPeso()."Kg";
            echo "<br>Ele tem ".$this->getVitorias()." vitórias, ".$this->getDerrotas()." derrotas e ".$this->getEmpates()." empates.</p>";
            echo "<p>-------------------------------------------------------------------------</p>";
        }
        public function status(){
            echo "<p>------------------------------------------------------------------------</p>";
            echo "<p>".$this->getNome()." é um peso ".$this->getCategoria()."<br>";
            echo "já ganhou ".$this->getVitorias()." vezes,";
            echo " perdeu ".$this->getDerrotas()." vezes e ";
            echo " empatou ".$this->getEmpates()." vezes!</p>";
            echo "<p>-------------------------------------------------------------------------</p>";
        }
        public function ganharLuta(){
            $this->setVitorias($this->getVitorias()+1);
        }
        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas()+1);
        }
        public function empatarLuta(){
            $this->setEmpates($this->getEmpates()+1);
        }
        public function setNome($n){
            $this->nome = $n;
        }
        public function setNacionalidade($n){
            $this->nacionalidade = $n;
        }
        public function setIdade($i){
            $this->idade = $i;
        }
        public function setAltura($a){
            $this->altura = $a;
        }
        public function setPeso($p){
            $this->peso = $p;
            $this->setCategoria();
        }
        public function setCategoria(){
            if($this->getPeso()<52.2){
                $this->categoria = "Inválido";
            }elseif($this->getPeso()<=70.3){
                $this->categoria = "Leve";
            }elseif($this->getPeso()<=83.9){
                $this->categoria = "Médio";
            }elseif($this->getPeso()<=120.2){
                $this->categoria = "Pesado";
            }else{
                $this->categoria = "Inválido";
            }
        }
        public function setVitorias($v){
            $this->vitorias = $v;
        }
        public function setDerrotas($d){
            $this->derrotas = $d;
        }
        public function setEmpates($e){
            $this->empates = $e;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getNacionalidade(){
            return $this->nacionalidade;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function getAltura(){
            return $this->altura;
        }
        public function getPeso(){
            return $this->peso;
        }
        public function getCategoria(){
            return $this->categoria;
        }
        public function getVitorias(){
            return $this->vitorias;
        }
        public function getDerrotas(){
            return $this->derrotas;
        }
        public function getEmpates(){
            return $this->empates;
        }
    }
?>