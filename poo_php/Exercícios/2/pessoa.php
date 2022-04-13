<?php
    abstract class Pessoa{
        protected $nome;
        protected $idade;
        protected $sexo;
        protected $experiencia;
        protected function ganharExp($n){
            $this->setExperiencia($this->getExperiencia()+$n);
        }
        public function __construct($nome,$idade,$sexo){
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setExperiencia(0);
        }
        public function getSexo()
        {
                return $this->sexo;
        }
        public function setSexo($sexo)
        {
                $this->sexo = $sexo;
                return $this;
        }
        public function getIdade()
        {
                return $this->idade;
        }
        public function setIdade($idade)
        {
                $this->idade = $idade;
                return $this;
        }
        public function getNome()
        {
                return $this->nome;
        }
        public function setNome($nome)
        {
                $this->nome = $nome;
                return $this;
        }
        public function getExperiencia()
        {
                return $this->experiencia;
        }
        public function setExperiencia($experiencia)
        {
                $this->experiencia = $experiencia;
                return $this;
        }
    }
?>