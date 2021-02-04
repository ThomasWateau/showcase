<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Lendme\OpenClose\Area;

use Lendme;
use Lendme\OpenClose\Shape;

/**
 * Description of AreaCalculator
 *
 * @author thomas
 */
class AreaCalculator {
    public function calculate(ShapeInterface $shapes)
    {
        foreach ($shapes as $shape) {
            $area[] = $shape->area();
        }
        
        return array_sum($area);
    }
}
