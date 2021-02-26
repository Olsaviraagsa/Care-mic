<?php

class Con_model
{
    private $table = "konsultan";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function edit($email)
    {
        $query = "UPDATE " . $this->table . "SET email=:email, name=:name WHERE email=:email";

        $this->db->query($query);
        $this->db->bind("email", $email);
        $this->db->bind("name", ($_POST['name']));

        $this->db->execute();
        $this->db->rowCount();
    }

    public function searchArticle()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM " . $this->table . " WHERE judul LIKE :keyword";

        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }
}
