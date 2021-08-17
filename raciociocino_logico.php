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

        // calcular impostos e IRRF
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

        // calcular quantidades de dias que a pessoa ja viveu 
        public function quantosDiasJaViveu($dia ,$mes  ,$ano){
            $dias = 365 * $ano + 30 * $mes +  $dia  ;      
            return $dias;
        }

        // calcular salario liquido
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

        public function mediaAprovado($nota1,$nota2,$nota3,$nota4){

            $somaNotasGeral = $nota1 + $nota2 + $nota3 + $nota4;
            $mediabimestre  = $somaNotasGeral / 4;
            if($mediabimestre >= 7 ){
                $situacao = "Aluno $this->nome Aprovado com a media $mediabimestre";
            }else {
                $situacao = "Aluno $this->nome Reprovado com a media $mediabimestre";
            }
            return $situacao;    
        }

        public function validaçoesTriangulo($lado1,$lado2,$lado3){
            if($lado1 < $lado2 + $lado3 && $lado2 < $lado1 + $lado3  && $lado3 < $lado1 + $lado2){
              if($lado1 == $lado2 && $lado2 == $lado3){
                  $tipo = "Triango equilatro";
              }elseif(!$lado1 == !$lado2 && !$lado2 == !$lado3 && !$lado1 == !$lado3){ $tipo = "Triango escaleno";
              }else {$tipo   = "Triango isosele"; 
            }
            }else {
                $tipo = "Não e um triangulo";
            } 
        }

        public function mostraQuizePrimeiroFibonace(){
            $numerAnterior = 0 ;
            $numeroAtual   = 1 ;
            $novoNUmero    = 0 ;

            $rest = "1";
            for ($i= 1; $i < 15 ; $i++) { 
                $novoNUmero = $numerAnterior + $numeroAtual;
                $numerAnterior = $numeroAtual;
                $numeroAtual = $novoNUmero;
                $rest .= " ". $novoNUmero;
             }

             return $rest;

             

        }
    }

    $e = new Exercicio;
    echo $e->mostraQuizePrimeiroFibonace();


?>