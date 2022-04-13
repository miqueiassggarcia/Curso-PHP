<?php
    abstract class Pessoa{
        protected $idade;
        protected $sexo;
        protected $nome;
        public final function fazerAniver(){            
                $this->setIdade($this->getIdade()+1);
        }
        public function getIdade(){
                return $this->idade;
        }
        public function setIdade($idade){
                $this->idade = $idade;
        }
        public function getSexo(){
                return $this->sexo;
        }
        public function setSexo($sexo){
                $this->sexo = $sexo;
        }
        public function getNome(){
                return $this->nome;
        }
        public function setNome($nome){
                return $this->nome = $nome;
        }
    }
?>
