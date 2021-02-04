<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Lendme;

interface ConnectionInterface
{
    public function connect();
}


class DbConnection implements ConnectionInterface
{
    public function connect()
    {
    }
}

class PasswordReminder
{
    private $db_connection;
    
    public function __construct(ConnectionInterface $db_connection)
    {
        $this->db_connection = $db_connection;
    }
}
