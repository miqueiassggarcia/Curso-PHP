<?php
    require_once "classePessoa.php";
    require_once "publicacao.php";
    class Livro implements publicacao{
        private $titulo;
        private $autor;
        private $totpaginas;
        private $pagatual;
        private $aberto;
        private $leitor;
        public function __construct($t,$a,$tp,$l){
            $this->setTitulo($t);
            $this->setAutor($a);
            $this->settotPagina($tp);
            $this->setpagAtual(0);
            $this->setAberto(false);
            $this->setLeitor($l);
        }
        public function detalhes(){
            echo "<hr>Livro ".$this->getTitulo()." escrito por ".$this->getAutor();
            echo "<br>Páginas: ".$this->gettotPagina()." Atual: ".$this->getpagAtual();
            echo "<br>Sendo lido por ".$this->getLeitor()->getNome();
        }
        public function abrir(){
            $this->setAberto(true);
        }
        public function fechar(){
            $this->setAberto(false);
        }
        public function folhear($p){
            if($p>$this->gettotPagina()){
                $this->setpagAtual($this->gettotPagina());
            }else{
                $this->setpagAtual($p);
            }
        }
        public function avancarPag(){
            if($this->gettotPagina()>$this->getpagAtual()){
                $this->setpagAtual($this->getpagAtual()+1);
            }else{
                echo "<p>O livro acabou</p>";
            }
        }
        public function voltarPag(){
            if($this->getpagAtual()>0){
                $this->setpagAtual($this->getpagAtual()-1);
            }else{
                echo "<p>Inicio do livro</p>";
            }
        }
        private function setTitulo($t){
            $this->titulo = $t;
        }
        private function setAutor($a){
            $this->autor = $a;
        }
        private function settotPagina($tp){
            $this->totpaginas = $tp;
        }
        private function setpagAtual($pa){
            $this->pagatual = $pa;
        }
        private function setAberto($a){
            $this->aberto = $a;
        }
        private function setLeitor($l){
            $this->leitor = $l;
        }
        private function getTitulo(){
            return $this->titulo;
        }
        private function getAutor(){
            return $this->autor;
        }
        private function gettotPagina(){
            return $this->totpaginas;
        }
        private function getpagAtual(){
            return $this->pagatual;
        }
        private function getAberto(){
            return $this->aberto;
        }
        private function getLeitor(){
            return $this->leitor;
        }
    }
?>