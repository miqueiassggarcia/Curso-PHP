<?php
    class ContaBanco{
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;
        public function __construct(){
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p>Conta criada com sucesso!</p>";
        }
        public function abrirConta($t){
            $this->setTipo($t);
            if($t=='CC'){
                $this->setSaldo($this->getSaldo()+50);
            }elseif($t=='CP'){
                $this->setSaldo($this->getSaldo()+150);
            }
            $this->setStatus(true);
        }
        public function fecharConta(){
            if($this->getSaldo()<0){
                echo '<p>Não é possível fechar a conta por o saldo estar em debito</p>';
            }elseif($this->getSaldo()>0){
                echo '<p>Não é possível fechar a conta por ainda haver saldo na mesma</p>';
            }else{
                $this->setStatus(false);
                echo "<p>Conta de ".$this->getDono()."fechada co sucesso.</p>";
            }
        }
        public function depositar($d){
            if($this->getStatus()){
                $this->setSaldo($this->getSaldo()+$d);
                echo "<p>Deposito de R$ $d efetuado na conta de ".$this->getDono()."</p>";
            }else{
                echo '<p>Impossivel depositar saldo pois a conta está desativada</p>';
            }    
        }
        public function sacar($d){
            if($this->getStatus()){
                if($this->getSaldo()>=$d){
                    $this->setSaldo($this->getSaldo()-$d);
                    echo "<p>Saque de R$ $d efetuado na conta {$this->getDono()}</p>";
                }else{
                    echo '<p>Saldo insufuciente para efetuar saque</p>';
                }
            }else{
                echo'<p>Impossivel efetuar saque pois a conta está desativada</p>';
            }
        }
        public function pagarMensal(){
            if($this->getTipo()=='CC'){
                $tip = 12;
            }elseif($this->getTipo()=='CP'){
                $tip = 20;
            }
            if($this->getStatus()){
                if($this->getSaldo()>$tip){
                    $this->setSaldo($this->getSaldo()-$tip);
                    echo "<p>Mensalidade de R$ $tip debitada na conta de ".$this->getDono()."</p>";
                }else{
                    echo "Saldo insuficiente para concluir pagamento";
                }
            }else{
                echo "Impossivel pagar por que a conta está desativada";
            }
        }
        public function getnumConta(){
            return $this->numConta;
        }
        public function setnumConta($n){
            $this->numConta=$n;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function setTipo($t){
            $this->tipo=$t;
        }
        public function getDono(){
            return $this->dono;
        }
        public function setDono($d){
            $this->dono=$d;
        }
        public function getSaldo(){
            return $this->saldo;
        }
        public function setSaldo($s){
            $this->saldo=$s;
        }
        public function getStatus(){
            return $this->status;
        }
        public function setStatus($s){
            $this->status=$s;
        }
    }
?>