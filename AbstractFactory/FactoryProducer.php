<?php
/**
 * Created by PhpStorm.
 * User: DIego
 * Date: 1/31/2018
 * Time: 8:34 PM
 */

namespace DesingPatterns\AbstractFactory;


class FactoryProducer
{
    public static function getFactory($factory){
        //$factoryObject;

        switch ($factory){
            case "Figura":
                $factoryObject = new FiguraFactory();
                break;
            case "Color":
                $factoryObject = new FiguraFactory();
                break;
        }

        return $factoryObject;
    }
}