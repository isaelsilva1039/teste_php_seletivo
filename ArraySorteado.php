<?php 

    class arayStore{

        public function arrayStore(){

            $a [] = rand(0, 10);
            $a [] = rand(0, 10);
            $a [] = rand(0, 10);
            $a [] = rand(0, 10);
            $a [] = rand(0, 10);
            $a [] = rand(0, 10);
            $a [] = rand(0, 10);
            $a [] = rand(0, 10);
            $a [] = rand(0, 10);
            $a [] = rand(0, 10);
            $a [] = rand(0, 10);
            $a [] = rand(0, 10);
            $a [] = rand(0, 10);
            $a [] = rand(0, 10);
            $a [] = rand(0, 10);
            $a [] = rand(0, 10);
            $a [] = rand(0, 10);
            $a [] = rand(0, 10);
            $a [] = rand(0, 10);
            $a [] = rand(0, 10);

           var_dump(array_unique($a));
           echo $a[0][1];

     }
    }
   $a = new arayStore();
   $a->arrayStore();
?>