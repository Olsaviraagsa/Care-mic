<?php

class Forums extends Controller
{
    public function index()
    {
        $data['title'] = 'Support Forums';
        $data = $this->model("Forums_model")->getTopics();

        $this->view("templates/header_aflog", $data);
        $this->view("templates/sidebar");
        $this->view("templates/topbar");
        $this->view("forums/index", $data);
        $this->view("templates/footer_aflog");
    }

    public function singleforum($id)
    {
        $data['title'] = 'Single Forum';
        $data = $this->model("Forums_model")->getTopicById($id);

        $this->view("templates/header_aflog", $data);
        $this->view("templates/sidebar");
        $this->view("templates/topbar");
        $this->view("forums/singleforum", $data);
        $this->view("templates/footer_aflog");
    }

    public function addTopic()
    {
        $data['title'] = 'Add a Topic';
        $data = $this->view("templates/header_aflog", $data);
        $this->view("templates/sidebar");
        $this->view("templates/topbar");
        $this->view("forums/AddTopic", $data);
        $this->view("templates/footer_aflog");
    }

    public function addNewTopic()
    {
        if ($this->model("Forums_model")->insertTopic($_POST) > 0) {
            Flasher::setFlash("success", "Your Topic Just Added in Discussion Forum", "");
            header("Location: " . BASE_URL . "/forums/AddTopic");
        }
    }
}
