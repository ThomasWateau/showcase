<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Lendme;


interface WorkableInterface
{
    public function work();
}

interface SleepableInterface
{
    public function sleep();
}

interface ManageableInterface
{
    public function beManaged();
}

class Captain
{
    
    public function manage(ManageableInterface $worker) 
    {
        $worker->beManaged();
    }
}

class HumanWorker implements WorkableInterface, SleepableInterface, ManageableInterface
{
    
    public function work() 
    {
        return 'human working';
    }
    
    public function sleep() 
    {
        return 'human sleeping';
    }
    
    public function beManaged() 
    {
        echo $this->work();
        
        echo $this->sleep();
    }
}



class AndroidWorker implements WorkableInterface, ManageableInterface
{
    
    public function work() 
    {
        return 'android working';
    }
    
    
    public function beManaged() 
    {
        echo $this->work();
    }
}