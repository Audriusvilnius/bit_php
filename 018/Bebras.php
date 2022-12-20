<?php

class Bebras
{
    public
        $color = 'Brown';
    private $age = 32;
    private $isLive = true;


    public function age(): string //cia realiai geteriai
    {
        return $this->age;
    }
    public function setAge(int $newAge): void //Seteris su parametrai
    {
        if ($newAge > 40) {
            $this->isLive = false;
        }
        $this->age = $newAge;
    }


    public function color(): string
    {
        return $this->isLive ? $this->color : 'Black';
    }
    public function isLive(): bool
    {
        return $this->isLive;
    }
}

//

// <!DOCTYPE html>
// <html lang="en">

// <head>
//     <meta charset="UTF-8">
//     <meta http-equiv="X-UA-Compatible" content="IE=edge">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
// </head>

// <body>

// </body>

// </html>