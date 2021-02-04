<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Square
 *
 * @author thomas
 */

namespace Lendme\OpenClose\Circle;

use Lendme;
use \Lendme\OpenClose\Shape;

class Circle implements ShapeInterface {
    
    public $radius = 0;
    
    public function __construct($radius)
    {     
        $this->radius = $radius;       
    }
     
    public function area() 
    {
        $this->radius * $this->radius * pi();
    }
}
