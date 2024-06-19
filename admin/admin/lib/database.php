<?php

include("./config/config.php");

class Database
{
    public $host   = DB_HOST;
    public $user   = DB_USER;
    public $pass   = DB_PASS;
    public $dbname = DB_NAME;

    public $link;
    public $error;

    public function __construct()
    {
        $this->connectDB();
    }

    private function connectDB()
    {
        try {
            $this->link = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->pass);
            $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->link->exec("set names utf8");
        } catch (PDOException $e) {
            $this->error = "Connection fail: " . $e->getMessage();
            return false;
        }
    }

    public function select($query)
    {
        $stmt = $this->link->query($query);
        if ($stmt) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }

    public function selectdc($query)
    {
        return $this->select($query); // Sử dụng lại phương thức select
    }

    public function insert($query)
    {
        $stmt = $this->link->exec($query);
        return $stmt ? true : false;
    }

    public function update($query)
    {
        return $this->insert($query); // Sử dụng lại phương thức insert
    }

    public function delete($query)
    {
        return $this->insert($query); // Sử dụng lại phương thức insert
    }
}