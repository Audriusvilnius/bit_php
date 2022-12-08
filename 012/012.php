<?php

    echo '<pre>';

    $arr = ['Labas', 'Zebras', 'Avinas'];

    $j = json_encode($arr);
    file_put_contents('labas.txt', $arr);

    echo file_get_contents('labas.txt');
    
    
    //echo '<hr>';

    