<?php
/**
 * Created by PhpStorm.
 * User: DIego
 * Date: 1/31/2018
 * Time: 8:25 PM
 */

namespace DesingPatternsPhp\AbstractFactory;


class Rectagulo implements FiguraGeometrica
{

    public function dibujar()
    {
        echo "Esto en un rectangulo";
    }
}