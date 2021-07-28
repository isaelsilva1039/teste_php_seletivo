<?php 

class Questoes {

    public function SeculoAno($ano){

        // divisão ano por 100
        $seculo = $ano / 100;

        // verificação se caso a divisão não de exata, aredondo pra menos e incremento mais 1
        if(is_float($seculo)){
            $seculo=floor($seculo);
            $seculo ++ ;
        } else {
            // se a divisão de exata, so retorna o valor da divisão 
            return "O ano ".$ano." e do Seculo ". $seculo;
        }

        return "O ano ".$ano." e do Seculo ". $seculo;
    }

    


}


// instacia da class
$seculo = new Questoes();
echo $seculo->SeculoAno(2021); 
