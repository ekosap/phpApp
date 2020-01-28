<?php

class User extends Controller
{
    public function Index(){
        $data['title'] = "Halaman Administrator";
        $data['users'] = $this->model('Users_model')->getAllUsers();
        $this->view('templates/header', $data);
        $this->view('user/index',$data);
        $this->view('templates/footer');
    }
}
