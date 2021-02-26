<?php

class Forums_model
{
    private $table = "forum";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insertTopic($data)
    {
        $query = "INSERT INTO " . $this->table . " VALUES(
            '',:judul,:isi,:tanggal,:id_user
        )";
        $judul = $data["title"];
        $isi = $data["content"];
        $tanggal = date("Y-m-d H:i:s");
        $id_user = $_SESSION["userdata"]["id_user"];

        $this->db->query($query);
        $this->db->bind("judul", $judul);
        $this->db->bind("isi", $isi);
        $this->db->bind("tanggal", $tanggal);
        $this->db->bind("id_user", $id_user);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getTopics()
    {
        $query = "SELECT * FROM " . $this->table;

        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getTopicById($id)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id=:id";

        $this->db->query($query);
        $this->db->bind("id", $id);
        return $this->db->single();
    }
}
