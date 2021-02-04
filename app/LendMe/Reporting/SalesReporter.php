<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SalesReporter
 *
 * @author thomas
 */

namespace Lendme\Reporting;

use Lendme\Repositories\SalesRepository;

class SalesReporter {
    
    /**
     * 
     * @var $repository
     */
    protected $repository = null;
    
    
    public function __construct(SalesRepository $repository) 
    {
        $this->repository = $repository;
    }
    
    
    /**
     * 
     * @param type $start_date
     * @param type $end_date
     */
    public function between($start_date, $end_date, SalesOutputInterface $formatter)
    {
        $sales  = $this->repository->between($start_date, $end_date);
        
        return $formatter->output($sales);
    }
    
}
