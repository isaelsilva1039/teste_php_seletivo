<?php 
    class arayStore{

        public function arrayStore(){
            
            // Geração Array automatica 
            for ($i=0; $i < 20; $i++) { 
               $array [] = rand(1, 10);
               echo $array[$i]. "-";
            }

            $countValues = array_count_values($array);
            $max = max($countValues);
            
            $filtered = array_filter($countValues, function($value) use($max){ return $value == $max;});
            
            echo '<pre>';
            var_dump($filtered);
       }
    }
    
    $a = new arayStore();
    echo $a->arrayStore();


?>