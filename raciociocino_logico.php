<?php 

    class Exercicio{
        private $nome; 
        private $idade;
        private $cargo;
        private $salariobruto;

        public function getNome($nome){
            $this->nome = $nome;
        }

        public function setNome(){
            return $this->nome;
        }

        public function getidade($idade){
            $this->idade = $idade;
        }

        public function setIdade(){
            return $this->idade;
        }

        public function getCargo($cargo){
            $this->cargo = $cargo;
        }

        public function setCargo(){
            return $this->cargo;
        }

        public function getSalarioBruto($salariobruto){
            $this->salariobruto = $salariobruto;
        }

        public function setSalarioBruto(){
            return $this->salariobruto;
        }

        public function calcularSalarioComReajustesIimpostos(){
            $reajuste      = $this->salariobruto * 0.38;
            $gatrificacao  = $this->salariobruto * 0.2;
            $salarioTotal  = $this->salariobruto + $reajuste + $gatrificacao;
            $salarioiquido = $salarioTotal - 0.15*$salarioTotal;
            $salarioTotalAtualizado = number_format($salarioTotal,"2",",",".");
            $salarioiquido          = number_format($salarioiquido,"2",",",".");
            $array = [
                'nome'=>$this->nome,
                'idade'=>$this->idade,
                'salarioBruto' => $salarioTotalAtualizado , 
                "salarioLiquido"=>$salarioiquido
            ];
            return $array;
        }

        public function quantosDiasJaViveu($dia ,$mes  ,$ano){
            $dias = 365 * $ano + 30 * $mes +  $dia  ;      
            return $dias;
        }

        public function salarioLiquidos($horas , $dependentes){
            $salariobruto = 12 * $horas + 40 *$dependentes;
            $inss = $salariobruto * 0.085;
            $irrf = $salariobruto * 0.05;
            $salarioquido = $salariobruto -$inss - $irrf;

            $array =[
                'nome'         => $this->nome,
                'salarioBruto' => $salariobruto,
                'INSS'         =>$inss,
                'irrf'         =>$irrf,
                'salarioLiquid'=>$salarioquido
            ];   
            return $array;
        }
    }

    $e = new Exercicio();

    $e->getNome("isael ");
   var_dump($e->salarioLiquidos(220,2));

?>