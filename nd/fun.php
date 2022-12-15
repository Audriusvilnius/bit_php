<?php

function h1(string $text): string
{
    return '<h1 style="display: inline; color: crimson;">' . $text . '</h1>';
}

function h2(string $text): string
{
    return '<h1 style="display: inline; color: crimson;">' . $text . '</h1>';
}

function h3(string $text, int $tag): string
{
    return '<h' . $tag . ' style="display: inline; color: crimson;">' . $text . '</h1><p>Tag nr: ' . $tag . '</p>';
}
function ats(): string
{
    return '<h3 style="color: red;">Skaicius n4ra sveikas!</h3>';
}
function sveikas(float $num): string
{
    $ats = 0;
    if ((int)$num != $num) {
        return ats();
    } else {
        for ($i = 1; $i < $num - 1; $i++) {
            $z = $i + 1;
            $sk = $num / $z;
            if ($sk - $sk % 10  == 0) {
                $ats++;
            }
        }
    }
    return '<h2>Skaičius dalinasi: ' . $ats . ' kartu iš sveiko skaičiaus</h2>';
}
function randSk(int $firs, int $end):array
{
    $arrayN = [];
    $arrayY =[];
    $sk=0;
    foreach(range(1, 100) as $i=>$mas){
        $array[$i] = rand($firs, $end);
        if()
        
    }
    return $array;
}




// echo '<pre>';
// $mas = get_loaded_extensions();
// print_r($mas);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <h2>1.</h2>
    <p>
        Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;
    </p>
    <?= h2('bebras') ?>
    <hr>
    <h2>2.</h2>
    <p>
        Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;
        <?= h3('bebras', 2) ?>
    </p>
    <hr>
    <h2>3.</h2>
    <p>
        Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją ir preg_replace_callback();

    </p>
    <?= preg_replace_callback('/(\d{2})(\d+)/', function ($d) {
        return h1($d[1]) . $d[2];
    }, md5(time())) ?>
    <br>
    <br>
    <?= sha1('123') ?>
    <br>
    <?= md5('ačiū') ?>
    <br>
    <?= sha1('124') ?>
    <hr>
    <h2>4.</h2>
    <p>
        4. Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;
    </p>
    <?= sveikas(19) ?>
    <h2>5.</h2>
    <p>
        5. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.
        <?php
        echo '<pre>';
        print_r(randSk(33, 77));
        echo '</pre>';  
        ?> </p>
</body>

</html>