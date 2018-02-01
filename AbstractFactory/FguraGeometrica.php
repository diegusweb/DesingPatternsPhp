<?php
/**
 * Created by PhpStorm.
 * User: DIego
 * Date: 1/31/2018
 * Time: 8:22 PM
 */

namespace DesingPatterns\AbstractFactory;


interface FiguraGeometrica
{
    public function dibujar();
}

interface Color
{
    public function fill();
}