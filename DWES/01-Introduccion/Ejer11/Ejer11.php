<?php
$text1 = $_GET["text1"];

function concatenar($text1, $text2 = 'Anonimo'){
    return $text1 . ' ' . $text2;
}

require "Ejer11.view.php";

?>