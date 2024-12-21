<?php 
function Gen($length = 10){
    $string ="12345678910abcdefghigklmnopqrstuwxyz";
    $chars_len = strlen($string);
    $random_chars = "";
    for ($i=0; $i < $length; $i++) { 
        $random_chars .= $string[rand(0,$chars_len - 1)];
    }
    return $random_chars;
}
 echo "The Capctha Code is:" . Gen();

?>