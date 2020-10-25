<?php

require 'vendor/autoload.php';


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

class Person extends Database {

    private $table = 'clients';

    public $id;
    public $name;
    public $age;

    private function json() { return json_encode($this); }

    public function save() {
        $this->set($this->table, $this->id, $this->json());
    }
    
    public function find() {
        $obj = json_decode($this->get($this->table, $this->id));
        $this->name = $obj->name;
        $this->age = $obj->age;
    }

    public function all($objects = []) {
        $hVals = $this->vals($this->table);
        foreach ($hVals as $item)
            $objects[] = json_decode($item);
        return $objects;
    }

    public function remove($id) {
        $this->del($this->table, $id);
    }

    public function info() {     
    }
}
