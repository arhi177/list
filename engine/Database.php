<?php

namespace App\Engine;

use Predis\Client;

class Database {

    public function __construct()  {
        $this->redis = new Client([
            'scheme'    => 'tcp',
            'host'      => '127.0.0.1',
            'port'      => '6379',
            'database'  => 0
        ]);
    }

    protected function set($table, $key, $data) {
        $this->redis->HSET($table, $key, $data);
    }
        
    protected function get($table, $key) {
        return $this->redis->HGET($table, $key);
    }

    protected function vals($table) {
        return $this->redis->hvals($table);
    }
    
    protected function del( $table,  $key) 
    {
        $this->redis->HDEL($table, $key);
    }
}