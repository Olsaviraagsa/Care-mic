<?php

class Article_model
{
    private $table = "artikel";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insertArticle($data)
    {
        $query = "INSERT INTO " . $this->table . " VALUES(
            '',:judul,:isi,:tanggal,:id_role
        )";
        $judul = $data["title"];
        $isi = $data["content"];
        $tanggal = date("Y-m-d H:i:s");
        $id_role = $_SESSION["userdata"]["id_role"];

        $this->db->query($query);
        $this->db->bind("judul", $judul);
        $this->db->bind("isi", $isi);
        $this->db->bind("tanggal", $tanggal);
        $this->db->bind("id_role", $id_role);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getArticles()
    {
        $query = "SELECT * FROM " . $this->table;

        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getArticleById($id)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id=:id";

        $this->db->query($query);
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function deleteArticle($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id=:id";

        $this->db->query($query);
        $this->db->bind("id", $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editArticle($data)
    {
        $query = "UPDATE " . $this->table . " SET
            title = :judul,content = :isi,tanggal= :tanggal,id_role = :id_role,
            WHERE id=:id";

        $judul = $data["title"];
        $isi = $data["content"];
        $tanggal = date("Y-m-d H:i:s");
        $id_role = $_SESSION["userdata"]["id_role"];

        $this->db->query($query);
        $this->db->bind("judul", $judul);
        $this->db->bind("isi", $isi);
        $this->db->bind("tanggal", $tanggal);
        $this->db->bind("id_role", $id_role);
        $this->db->bind("id", $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function searchArticle()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM " . $this->table . " WHERE title LIKE :keyword";

        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }
}
