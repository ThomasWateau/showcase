<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Lendme\Reporting;

/**
 * Description of HtmlOutput
 *
 * @author thomas
 */
class HtmlOutput implements SalesOutputInterface 
{
    /**
     * 
     * @param float $sales
     * @return string
     */
    public function output($sales) 
    {
        return '<h1>Sales: ' . $sales . ' </h1>';
    }
}
