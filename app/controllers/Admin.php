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

    public function daftar_buku()
    {
        $data['judul'] = 'Daftar Buku';
        // ambil semua data dari tabel buku
        $data['buku'] = $this->model('Buku_model')->getAllBuku();
        $this->view('admin/templates/header', $data);
        $this->view('admin/daftar_buku', $data);
        $this->view('admin/templates/footer');
    }

    public function hapus_buku($id)
    {
        $this->model('Buku_model')->hapusBuku($id);
        header('Location: ' . BASEURL . '/admin/daftar_buku');
    }
}