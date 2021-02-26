<?php

class Auth_model
{
    private $table = "user";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDataUser($data)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE email=:email";
        $this->db->query($query);
        $this->db->bind("email", $data["email"]);

        return $this->db->single();
    }

    public function insertRegistration($data)
    {
        $query = "INSERT INTO " . $this->table . " VALUES('',:name,:email,:password,:image,:id_role)";

        $password = password_hash($_POST["password1"], PASSWORD_DEFAULT);

        $this->db->query($query);
        $this->db->bind("name", $data["name"]);
        $this->db->bind("email", $data["email"]);
        $this->db->bind("password", $password);
        $this->db->bind("image", "default.jpg");
        $this->db->bind("id_role", 1);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
