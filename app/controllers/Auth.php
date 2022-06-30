<?php

class Auth extends Controller {
    public function regis_user()
    {
        if ( $this->model('User_model')->registerUser($_POST) > 0 ) {
            header('Location: ' . BASEURL . '/login/user');
            exit;
        }
    }
}