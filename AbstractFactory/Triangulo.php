<?php
/**
 * Created by PhpStorm.
 * User: DIego
 * Date: 1/31/2018
 * Time: 8:23 PM
 */

namespace DesingPatterns\AbstractFactory;


class Triangulo implements FiguraGeometrica
{

    public function dibujar()
    {
        echo "Esto es un triangulo";
    }
}