<?php
/**
 * Created by PhpStorm.
 * User: DIego
 * Date: 1/31/2018
 * Time: 8:24 PM
 */

namespace AbstractFactory;


class Circulo implements FiguraGeometrica
{

    public function dibujar()
    {
        echo "Esto en un circulo";
    }
}