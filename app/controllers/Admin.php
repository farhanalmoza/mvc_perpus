<?php

class Admin extends Controller {

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $this->view('admin/templates/header', $data);
        $this->view('admin/index', $data);
        $this->view('admin/templates/footer');
    }

    public function daftar_anggota()
    {
        $data['judul'] = 'Daftar Anggota';
        // ambil semua data dari tabel anggota
        $data['anggota'] = $this->model('User_model')->getAllAnggota();
        $this->view('admin/templates/header', $data);
        $this->view('admin/daftar_anggota', $data);
        $this->view('admin/templates/footer');
    }

    public function hapus_anggota($id)
    {
        $this->model('User_model')->hapusAnggota($id);
        header('Location: ' . BASEURL . '/admin/daftar_anggota');
    }
}