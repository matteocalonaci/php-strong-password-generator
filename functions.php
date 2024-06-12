<?php
function getPassword($caratteri, $inputUtente, $password){
    for ($i=0; $i < $inputUtente; $i++){
        $selezione = rand(0,3);
        $last = strlen($caratteri[$selezione]) -1;
        $password .= $caratteri[$selezione][rand(0,$last)];
    };
   return $password;
}
?>