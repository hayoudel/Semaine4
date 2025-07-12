<?php 
function echange ($str1 , $str2) {
    $chaine = $str1;
    $str1 = $str2 ;
    $str2 = $chaine ; 
    echo $str1 ;
    echo $str2 ;


}

$a = echange('de' , 'a');
echo $a

?>