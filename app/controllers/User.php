<?php

class User extends Controller {

    public function index()
    {
        $data['judul'] = 'Dashboard';
        $this->view('user/templates/header', $data);
        $this->view('user/index', $data);
        $this->view('user/templates/footer');
    }

    public function daftar_buku()
    {
        $data['judul'] = 'Daftar Buku';
        $data['buku'] = $this->model('Buku_model')->getAllBuku();
        $this->view('user/templates/header', $data);
        $this->view('user/daftar_buku', $data);
        $this->view('user/templates/footer');
    }

    public function riwayat_peminjaman()
    {
        session_start();
        $data['judul'] = 'Riwayat Peminjaman';
        $data['peminjaman'] = $this->model('Peminjaman_model')->getAllPeminjamanByUser($_SESSION['user']['id']);
        $this->view('user/templates/header', $data);
        $this->view('user/riwayat_peminjaman', $data);
        $this->view('user/templates/footer');
    }

    public function pinjam($id_buku)
    {
        session_start();
        $data['id_buku'] = $id_buku;
        $data['id_user'] = $_SESSION['user']['id'];
        $data['tgl_pinjam'] = date('Y-m-d');
        $data['status'] = 2; // set statu peminjaman 2 = sedang dipinjam
        $this->model('Peminjaman_model')->addPeminjaman($data);
        header('Location: ' . BASEURL . '/user/daftar_buku');
        exit;
    }

    public function buku_dipinjam()
    {
        session_start();
        $data['judul'] = 'Buku Dipinjam';
        $data['peminjaman'] = $this->model('Peminjaman_model')->getPeminjamanByUser($_SESSION['user']['id']);
        $this->view('user/templates/header', $data);
        $this->view('user/buku_pinjaman', $data);
        $this->view('user/templates/footer');
    }

    public function kembalikan_buku($id_peminjaman)
    {
        $data['id_peminjaman'] = $id_peminjaman;
        $data['tgl_kembali'] = date('Y-m-d');
        $data['status'] = 1; // set status peminjaman 1 = mengembalikan dengan menunggu konfirmasi dari admin
        $this->model('Peminjaman_model')->updatePeminjaman($data);
        header('Location: ' . BASEURL . '/user/buku_dipinjam');
        exit;
    }

}