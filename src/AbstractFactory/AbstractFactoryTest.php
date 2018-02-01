<?php
/**
 * Created by PhpStorm.
 * User: DIego
 * Date: 1/31/2018
 * Time: 8:42 PM
 */

namespace DesingPatternsPhp\AbstractFactory;


use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function test2(){
        $figuraFactory = FactoryProducer::getFactory("Figura");

        $circulo = $figuraFactory->getFigura("Circulo");

        $circulo->dibujar();
    }

    public function test3(){
        $colorFactory = FactoryProducer::getFactory("Color");

        $circulo = $colorFactory->getColor("Rojo");

        $circulo->fill();
    }
}