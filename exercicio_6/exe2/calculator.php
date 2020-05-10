<?php
class Calculator {
    
    function sum($value1,$value2) {
        
        return  $value1+$value2;  
    }

    function sub($value1,$value2) {
        
        return  $value1-$value2;  
    }

    function mult($value1,$value2) {
        
        return  $value1*$value2;  
    }

    function div($value1,$value2) {
        if($value2 == 0){
            return "Operação inválida!";
        }
        return  $value1/$value2;  
    }
}