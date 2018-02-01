<?php
/**
 * Created by PhpStorm.
 * User: DIego
 * Date: 1/31/2018
 * Time: 8:28 PM
 */

namespace DesingPatternsPhp\AbstractFactory;


class FiguraFactory extends AbstractFactory
{

    function getFigura($figura)
    {
        switch ($figura){
            case "Triangulo":
                $figura = new Triangulo();
                break;
            case "Circulo":
                $figura = new Circulo();
                break;
            case "Rectangulo":
                $figura = new Rectagulo();
                break;
        }

        return $figura;
    }

    function getColor($color)
    {
        // TODO: Implement getColor() method.
    }
}