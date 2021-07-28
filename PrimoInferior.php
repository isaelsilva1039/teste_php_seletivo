<?php

class Teste2{

        public function  ehprimo($num){
            $num;
            $divisores = 0;
            
            for($count=2; $count<$num; $count++)
                if($num % $count == 0){
                    echo "Multiplicar por $count<br />";
                    $divisores++;
             }
            
            if($divisores) {
                return false;
            } 
            else {
                return true;
            }
            
        }

        public function maiorNumeroPriomoInferior($numeroVerificando){
            $eprimor = $this->ehprimo($numeroVerificando);
            if (!$eprimor) {
                return "Numero Não e primo";
                exit();
            }
            $maiorNumeroPrimoInferior = 0;
            for ($i= 2; $i <= $numeroVerificando  ; $i++) { 
                if($this->ehprimo($i)){
                    if($i > $maiorNumeroPrimoInferior)
                        $maiorNumeroPrimoInferior =  $i;
                }
            } 
            return "Maior Numero primo inferior a $numeroVerificando e " . $maiorNumeroPrimoInferior;
        }
    
    




    }

    $Questo = new Teste2();
//    echo $Questo->ehprimo(5)."<br>";
   echo $Questo->maiorNumeroPriomoInferior(13);

?>