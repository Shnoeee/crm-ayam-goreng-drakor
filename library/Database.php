<?php 

class Database {

    public function __construct() {
        $this->koneksi('localhost', 'root', '', 'project_crm');
    }

    public function koneksi($host, $username, $password, $db){
        $this->conn = new mysqli($host, $username, $password, $db);
        if($this->conn->connect_error > 0){
            echo 'Koneksi error!';
        }
    }

    public function query($q){
        return $this->conn->query($q);
    }

    public function escape($e){
        return $this->conn->real_escape_string($e);
    }

    public function object($o){
        return (object)$o;
    }

}