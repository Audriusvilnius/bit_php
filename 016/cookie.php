<?php

setcookie(
    'bebras',
    'bebras ne zebras',
    
    time()+3600 //- galiojimo kikass
    //time() -3600 //setinam atgal alaika kad prdingtu
);
//cookio nega;lima istrint is serverio overvraitinimas usprejusiu laiku
//Sesion galioja kol seesija vyksta(bet gali ir netrint)
echo '<pre>';

print_r($_COOKIE);

?>