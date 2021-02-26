<?php

class Consultan extends Controller
{
    public function index()
    {
        $data["title"] = "My Profile";
        $this->view("templates/con_header", $data);
        $this->view("templates/con_sidebar");
        $this->view("templates/con_topbar");
        $this->view("consultan/index");
        $this->view("templates/con_footer");
    }

    public function con_edit()
    {
        $data["title"] = "Edit Profile";
        $this->view("templates/con_header", $data);
        $this->view("templates/con_sidebar");
        $this->view("templates/con_topbar");
        $this->view("consultan/con_edit", $data);
        $this->view("templates/con_footer");

        if ($this->model("Con_model")->edit($_POST) > 0) {
            Flasher::setFlash("success", "Edit Profile Successfully", "");
            header("Location: " . BASE_URL . "/consultan/");
        } else {
            Flasher::setFlash("danger", "Edit Profile failed!", "");
            header("Location: " . BASE_URL . "/consultan/");
        }
    }

    public function con_changepass()
    {
        $data["title"] = "Change Password";
        $this->view("templates/con_header", $data);
        $this->view("templates/con_sidebar");
        $this->view("templates/con_topbar");
        $this->view("consultan/con_changepass");
        $this->view("templates/con_footer");
    }

    public function con_forums()
    {
        $data["title"] = "Forums";
        $this->view("templates/con_header", $data);
        $this->view("templates/con_sidebar");
        $this->view("templates/con_topbar");
        $this->view("consultan/con_forums");
        $this->view("templates/con_footer");
    }

    public function con_singleforum()
    {
        $data["title"] = "Single Forum";
        $this->view("templates/con_header", $data);
        $this->view("templates/con_sidebar");
        $this->view("templates/con_topbar");
        $this->view("consultan/con_singleforum");
        $this->view("templates/con_footer");
    }

    public function con_addTopic()
    {
        $data["title"] = "Add a Topic";
        $this->view("templates/con_header", $data);
        $this->view("templates/con_sidebar");
        $this->view("templates/con_topbar");
        $this->view("consultan/con_addTopic");
        $this->view("templates/con_footer");
    }

    public function con_artikel()
    {
        $data['title'] = "Articles";
        $data = $this->model("Article_model")->getArticles();

        $this->view("templates/con_header", $data);
        $this->view("templates/con_sidebar");
        $this->view("templates/con_topbar");
        $this->view("consultan/con_artikel", $data);
        $this->view("templates/con_footer");
    }

    public function con_singleArticle($id)
    {
        $data = $this->model("Article_model")->getArticleById($id);
        $this->view("templates/con_header");
        $this->view("templates/con_sidebar");
        $this->view("templates/con_topbar");
        $this->view("consultan/con_singleArticle", $data);
        $this->view("templates/con_footer");
    }

    public function con_addArticle()
    {
        $data["title"] = "Add an Article";
        $this->view("templates/con_header", $data);
        $this->view("templates/con_sidebar");
        $this->view("templates/con_topbar");
        $this->view("consultan/con_addArticle");
        $this->view("templates/con_footer");
    }

    public function logout()
    {
        session_destroy();
        header("Location: " . BASE_URL . "/login");
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
