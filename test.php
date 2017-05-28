<?php

$password = "test";

function generate_hash($password, $cost=11){
  $salt=substr(base64_encode(openssl_random_pseudo_bytes(17)),0.22);
  $salt=str_replace("+",".",$salt);
  $param='$'.implode('$',array("2y",str_pad($cost,2,"0",STR_PAD_LEFT),
    $salt));
    
    return crypt($password, $param);
}

function validate_pw($password, $hash){
   return crypt($password, $hash)==$hash;
}

//AuthenticatorPetProject
$test = 'loremipsum';

echo substr(sha1($test),1,5;

?>
