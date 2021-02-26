<?php

class User extends Controller
{
    public function index()
    {
        $data['title'] = 'My Profile';

        $this->view('templates/header_aflog',);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('user/index');
        $this->view('templates/footer_aflog');
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $this->view('templates/header_aflog', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('user/edit');
        $this->view('templates/footer_aflog');
    }

    public function change_password()
    {
        $data['title'] = 'Change Password';
        $this->view('templates/header_aflog', $data);
        $this->view('templates/sidebar');
        $this->view('templates/topbar');
        $this->view('user/change_password');
        $this->view('templates/footer_aflog');
    }

    public function logout()
    {
        session_destroy();
        header("Location: " . BASE_URL . "/login");
    }

    // public function getEdit()
    // {
    //     if (isset($_POST['submit'])) {
    //         $upload_image = $_FILES['image'];

    //         $imageName = $upload_image['image']['name'];
    //         $imageTmpName=$upload_image['image']['tmp_name'];
    //         $imageSize=$upload_image['image']['size'];
    //         $imageError=$upload_image['image']['error'];
    //         $imageType=$upload_image['image']['type'];

    //         $imageExt=explode('.', $imageName);
    //         $imageActualExt=strtolower(end($imageExt));

    //         $allowed=array('jpg','jpeg','png');

    //         if (in array($imageActualExt, $allowed)) { //ini juga anjai kenapa pake error
    //             if($imageError==0) {
    //                 if ($imageSize<2048) {
    //                     $imageNameNew = uniqid('', true).".".$imageActualExt;
    //                     $imageDestination=BASE_URL.'img/profile'.$imageNameNew;
    //                     move_uploaded_file($imageTmpName, $imageDestination);
    //                     header("Location: ".BASE_URL."/user");

    //                     $this->model('Auth_'); //berarti perlu bikin model dulu gasih, anjailah

    //                 } else {
    //                     Flasher::setFlash("danger", "", "Your image is too big!");
    //                     header("Location: " . BASE_URL . "/user/edit");
    //                 }
    //             }else {
    //                 Flasher::setFlash("danger", "", "There was an error uploading your image!");
    //                 header("Location: " . BASE_URL . "/user/edit");
    //             }
    //         } else {
    //             Flasher::setFlash("danger", "", "You cannot upload image of this type!");
    //             header("Location: " . BASE_URL . "/user/edit");
    //         }

    //     }
    // }
}
