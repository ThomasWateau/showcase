<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Lendme\Reporting;

/**
 *
 * @author thomas
 */
interface SalesOutputInterface {
    /**
     * 
     * @param float $sales
     * @return mixed string or json 
     */
    public function output($sales);
}
