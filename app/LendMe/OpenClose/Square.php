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

namespace Lendme\OpenClose\Square;

use Lendme;
use \Lendme\OpenClose\Shape;

class Square implements ShapeInterface {
    
    public $width = 0;
    public $height = 0;
    
    public function __construct($width, $height)
    {
        
        $this->width = $width;
        $this->height = $height;
        
    }
        
    public function area() 
    {
        return $shape->width * $shape->height;
    }
    
}
