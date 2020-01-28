<?php

class Home extends Controller {
    public function Index(){
        $data['title'] = "Halaman Home";
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}