<?php

namespace App\Entity;

use App\Engine\Database;

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
