<?php
/**
 * Created by PhpStorm.
 * User: DIego
 * Date: 1/31/2018
 * Time: 8:27 PM
 */

namespace DesingPatternsPhp\AbstractFactory;


abstract class AbstractFactory
{
    abstract function getFigura($figura);
    abstract function getColor($color);
}