<?php

class Register extends Controller {

    public function user()
    {
        $this->view('register/user');
    }

    public function admin()
    {
        $this->view('register/admin');
    }
}