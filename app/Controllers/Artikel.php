<?php

class Artikel extends Controller
{
    public function index()
    {
        $data['title'] = 'Articles';
        $this->view("templates/header_aflog", $data);
        $this->view("templates/sidebar");
        $this->view("templates/topbar");
        $this->view("artikel/index");
        $this->view("templates/footer_aflog");
    }

    public function single_artikel()
    {
        $data['title'] = 'Single Article';
        $this->view("templates/header_aflog", $data);
        $this->view("templates/sidebar");
        $this->view("templates/topbar");
        $this->view("artikel/single_artikel");
        $this->view("templates/footer_aflog");
    }

    public function addNewArticle()
    {
        if ($this->model("Article_model")->insertArticle($_POST) > 0) {
            Flasher::setFlash("success", "New Article Just Added", "");
            header("Location: " . BASE_URL . "/consultan/con_addArticle");
        } else {
            Flasher::setFlash("danger", "Failed to add your article", "");
            header("Location: " . BASE_URL . "/consultan/con_addArticle");
        }
    }

    public function deleteArticle($id)
    {

        if ($this->model("Article_model")->deleteArticle($id) > 0) {
            Flasher::setFlash("success", "Your article has been deleted", "");
            header("Location: " . BASE_URL . "/consultan/con_artikel");
        } else {
            Flasher::setFlash("danger", "Failed to delete your article", "");
            header("Location: " . BASE_URL . "/consultan/con_artikel");
        }
    }

    public function edit()
    {
        if ($this->model("Article_model")->editArticle($_POST) > 0) {
            Flasher::setFlash("success", "Your article has been changed", "");
            header("Location: " . BASE_URL . "/consultan/artikel");
        } else {
            Flasher::setFlash("danger", "Failed to change your article", "");
            header("Location: " . BASE_URL . "/consultan/artikel");
        }
    }

    public function search()
    {
        $data['title'] = 'Articles';
        $data = $this->model('Article_model')->searchArticle();
        $this->view("templates/header_aflog", $data);
        $this->view("templates/sidebar");
        $this->view("templates/topbar");
        $this->view("artikel/index");
        $this->view("templates/footer_aflog");
    }
}
