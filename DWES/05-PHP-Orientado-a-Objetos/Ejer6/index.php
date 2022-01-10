<?php

function dividir($numero1,$numero2){
    if ($numero2 == 0) {
        throw new Exception("El segundo numero no pede ser 0");
    }
    else{
        return $numero1/$numero2;
    }
}


echo dividir(7,2). "<br>";
try{
    echo dividir(29,0) ;
}
catch (Exception $e){
    echo $e->getMessage();
}

?>