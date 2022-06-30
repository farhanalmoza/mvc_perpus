<?php

class Login extends Controller {
    public function user()
    {
        $this->view('login/user');
    }

    public function admin()
    {
        $this->view('login/admin');
    }
}