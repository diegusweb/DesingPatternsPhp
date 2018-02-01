<?php
/**
 * Created by PhpStorm.
 * User: DIego
 * Date: 1/31/2018
 * Time: 9:07 PM
 */

namespace DesingPatternsPhp\AbstractFactory;



class holaa
{
    public function demo(){
        $figuraFactory = FactoryProducer::getFactory("Figura");

        $circulo = $figuraFactory->getFigura("Circulo");

        $circulo->dibujar();
    }

    public function otro(){
        $demo = new Rectagulo();
        $demo->dibujar();
    }
}


$de = new holaa();

$de->demo();