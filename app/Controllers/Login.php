<?php

class Login extends Controller
{
    public function index()
    {
        $data['title'] = 'Care.mic - Login';
        $this->view("templates/header", $data);
        $this->view("login/index");
        $this->view("templates/footer");
    }

    public function registration()
    {
        $data['title'] = 'Care.mic - Registration';
        $this->view("templates/header", $data);
        $this->view("login/registration");
        $this->view("templates/footer");
    }

    public function getRegister()
    {
        if ($_POST["password1"] != $_POST["password2"]) {
            Flasher::setFlash("danger", "", "Password don't match!");
            header("Location: " . BASE_URL . "/login/registration");
        }

        if ($this->model("Auth_model")->insertRegistration($_POST)) {
            Flasher::setFlash("success", "", "Your Account has been created. Please Login");
            header("Location: " . BASE_URL . "/login");
        }
    }

    public function getLogin()
    {
        $data = $this->model("Auth_model")->getDataUser($_POST);
        if ($data) {
            if (password_verify($_POST["password"], $data["password"])) {
                $_SESSION["userdata"] = $data;
                if ($data['role_id'] == 1) {
                    header("Location: " . BASE_URL . "/User");
                } else {
                    header("Location: " . BASE_URL . "/Consultan");
                }
            } else {
                Flasher::setFlash("danger", "", "Failed to login, please enter the correct password!");
                header("Location: " . BASE_URL . "/login");
            }
        } else {
            Flasher::setFlash("danger", "", "Email is not registered!");
            header("Location: " . BASE_URL . "/login");
        }
    }
}
