<?php

class Database {

    private $conn;

    private function connect() {
        $this->conn =  new mysqli("localhost" , "root" , "" , "cadastroUsers");
    }

    private function close() {
        $this->conn->close();
    }

    public function execute($sql) {
        $this->connect();
        $resultObject = $this->conn->query($sql);

        if (!($resultObject instanceof mysqli_result)) return;

        // Se for um mysqli_result...
        $resultArray = [];
        while($r = mysqli_fetch_array($resultObject)) {
            $resultArray[] = $r;
        }
        $this->close();
        return $resultArray;
    }

}


?>