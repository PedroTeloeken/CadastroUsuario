<?php

require("Database.php");
require("Entity.php");

class Service {

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getById($id) {
        $results = $this->db->execute("SELECT id, email FROM users WHERE id=$id");
        print_r($results);
    }

    public function getAll() {
        $results = $this->db->execute("SELECT id, email FROM users");
        $list = [];
        foreach($results as $r) {
            $list[] = new Entity($r);
        }
        return $list;
    }

    public function delete($id) {
        $this->db->execute("DELETE FROM users WHERE id=$id");
    }
}