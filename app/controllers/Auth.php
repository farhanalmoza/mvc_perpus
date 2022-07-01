<?php

class Auth extends Controller {
    public function regis_user()
    {
        if ( $this->model('User_model')->registerUser($_POST) > 0 ) {
            header('Location: ' . BASEURL . '/login/user');
            exit;
        }
    }

    public function login_user()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $this->model('User_model')->loginUser($email, $password);
        if ( $user == false ) {
            header('Location: ' . BASEURL . '/login/user');
            exit;
        } else {
            session_start();
            $_SESSION['user'] = $user;
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    public function user_logout()
    {
        unset($_SESSION['user']);
        header('Location: ' . BASEURL . '/login/user');
        exit;
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

    public function admin_logout()
    {
        unset($_SESSION['admin']);
        header('Location: ' . BASEURL . '/login/admin');
        exit;
    }
}