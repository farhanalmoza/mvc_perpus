<?php

class Buku extends Controller {

    public function tambah()
    {
        $judul = $_POST['judul'];
        $pengarang = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $tahun = $_POST['tahun'];
        $kategori = $_POST['kategori'];
        $jumlah = $_POST['jumlah'];
        $gambar = $_FILES['gambar']['name'];
        $ukuran = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmp = $_FILES['gambar']['tmp_name'];
        $path = 'img/gambar_buku/' . $gambar;
        $path_db = 'gambar_buku/' . $gambar;
        $link_buku = $_POST['link'];
        if ($error === 4) {
            echo "<script>alert('pilih gambar terlebih dahulu');</script>";
            echo "<script>location='" . BASEURL . "/admin/daftar_buku';</script>";
        } else {
            // cek apakah gambar yang diupload sudah ada
            if (file_exists($path)) {
                echo "<script>alert('gambar sudah ada');</script>";
                echo "<script>location='" . BASEURL . "/admin/daftar_buku';</script>";
            } else {
                // cek ukuran gambar yang diupload
                if ($ukuran > 1000000) {
                    echo "<script>alert('ukuran gambar terlalu besar');</script>";
                    echo "<script>location='" . BASEURL . "/admin/daftar_buku';</script>";
                } else {
                    // upload gambar
                    if (move_uploaded_file($tmp, $path)) {
                        $this->model('Buku_model')->tambahBuku($judul, $pengarang, $penerbit, $tahun, $kategori, $jumlah, $path_db, $link_buku);
                        echo "<script>alert('data berhasil ditambahkan');</script>";
                        echo "<script>location='" . BASEURL . "/admin/daftar_buku';</script>";
                    } else {
                        echo "<script>alert('gambar gagal diupload');</script>";
                        echo "<script>location='" . BASEURL . "/admin/datfar_buku';</script>";
                    }
                }
            }
        }
    }
}