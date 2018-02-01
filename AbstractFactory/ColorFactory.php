<?php
/**
 * Created by PhpStorm.
 * User: DIego
 * Date: 1/31/2018
 * Time: 8:31 PM
 */

namespace DesingPatterns\AbstractFactory;


class ColorFactory extends AbstractFactory
{

    function getFigura($figura)
    {
        // TODO: Implement getFigura() method.
    }

    function getColor($color)
    {
        switch ($color){
            case "Rojo":
                $color = new Rojo();
                break;
            case "Azul":
                $color = new Azul();
                break;
            case "Verde":
                $color = new Verde();
                break;
        }

        return $color;
    }
}