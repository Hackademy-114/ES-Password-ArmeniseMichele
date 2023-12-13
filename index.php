<?php
// almeno 8 caratteri
// almeno un carattere numerico
//almeno una maiuscola
//almeno un carattere speciale


function checkLenght($string){
    if (strlen($string) >= 8){
        return true;
    }
    // echo "password troppo corta" . "\n";
    return false;
}


function checkUpper($string){
    for ($i=0; $i < strlen($string) ; $i++) { 
     if (ctype_upper($string[$i])) {
        return true;
     }
    }
    echo "la password deve contenere almeno un carattere maiuscolo" . "\n";
    return false;
 }
 



 function checkNumber($string){
    for ($i=0; $i < strlen($string) ; $i++) { 
        if (is_numeric($string[$i])) {
           return true;
        }
       }
       echo "la password deve contenere almeno un carattere numerico" . "\n";
       return false;
    }





    function checkSpecials($string){
        $specials = ['(', ')', '!', '?', '£', '%' ];
        for ($i=0; $i < strlen($string) ; $i++) { 
            if (in_array($string[$i], $specials)) {
               return true;
            }
           }
           echo "la password deve contenere almeno un carattere speciale" . "\n";
    
           return false;
        }

        function checkFinal($string){
            $lenght = checkLenght($string);
            $upper = checkUpper($string);
            $number = checkNumber($string);
            $specials = checkSpecials($string);
            
            if ($lenght && $upper && $number && $specials ) {
                echo "password valida" . "\n";
                return true;
            }
                return false;
            
        };

        do {
            $password = readline('Inserire password:');
        } while (!checkFinal( $password));


?>