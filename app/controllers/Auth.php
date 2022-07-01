<?php

class Auth extends Controller {
    public function regis_user()
    {
        if ( $this->model('User_model')->registerUser($_POST) > 0 ) {
            header('Location: ' . BASEURL . '/login/user');
            exit;
        }
    }

    public function regis_admin()
    {
        if ( $this->model('Admin_model')->registerAdmin($_POST) > 0 ) {
            header('Location: ' . BASEURL . '/login/admin');
            exit;
        }
    }

    public function login_admin()
    {
        $data['admin'] = $this->model('Admin_model')->loginAdmin($_POST);
        if ( $data['admin'] == false ) {
            header('Location: ' . BASEURL . '/login/admin');
            exit;
        } else {
            $_SESSION['admin'] = $data['admin'];
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }
}