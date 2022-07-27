<?php

class Entity {

    public $id;
    public $email;

    public function __construct($r)
    {
        $this->id = (int)$r["id"];
        $this->email = $r["email"];
    }
    
}