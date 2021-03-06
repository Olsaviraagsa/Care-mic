<?php

class Database
{
    private $host = DB_HOST;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $db_name = DB_NAME;

    private $dbh; //database handler
    private $stmt; //statement

    public function __construct()
    {
        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name; //data source name

        $option = [
            PDO::ATTR_PERSISTENT => true, //membuat koneksi db terjaga terus
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO($dsn, $this->username, $this->password, $option);
        } catch (PDOException $e) {
            die($e->getmessage());
        }
    }

    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT; //mengubah tipe menjadi int
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL; //tipe boolean
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL; //value null
                    break;
                default:
                    $type = PDO::PARAM_STR; //default tipenya string
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute()
    {
        $this->stmt->execute();
    }

    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }
}
