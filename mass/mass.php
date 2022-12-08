<?php
echo '<pre>';
$mas = [];


// foreach(range(1,3) as $i){
//     $mas1=[];
//     foreach (range(1, 3) as $i) {
//         $mas1[] = rand(0, 3);
//     }
//     $mas[] = $mas1;
// }



foreach(range('A','C')as $i1){
    foreach(range(0,2)as $i2){
        $mas[$i1][$i2] = rand(0, 3);
    }
}
// skaitymas 
foreach($mas as $val1){
    foreach($val1 as $val2){
        echo "<h2>$val2</h2>";
    }
}

print_r($mas);


// keitimas su rosyklem
foreach($mas as &$val1){
    foreach($val1 as &$val2){
        $val2 = 10;
    }
}

print_r($mas);


foreach($mas as $si1 => $val1){
    foreach($val1 as $i2 => $val2){
        $mas[$i1][$i2] = 25;
    }
}
print_r($mas);

$masA = ['A', 'B', 'C', 'V'];
$masB = ['C', 'r', 't', 'V'];
// kas bendro 
print_r(array_intersect($masA, $masB));


// palyginimas galima lygint A su B ir atvirksciai
print_r(array_diff($masA, $masB));
print_r(array_diff($masB, $masA));


// Sukeicia vietom indeksus su reikslmem
print_r(array_flip($masA));


print_r(array_flip(array_flip($masB)));