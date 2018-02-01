<?php
/**
 * Created by PhpStorm.
 * User: DIego
 * Date: 1/31/2018
 * Time: 8:26 PM
 */

namespace DesingPatternsPhp\AbstractFactory;


class Rojo implements Color
{

    public function fill()
    {
        echo "Este es el color rojo";
    }
}

class Verde implements Color
{

    public function fill()
    {
        echo "Este es el color Verde";
    }
}

class Azul implements Color
{

    public function fill()
    {
        echo "Este es el color Azul";
    }
}