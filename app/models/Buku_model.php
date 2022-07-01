<?php

class Buku_model {
    private $table = 'data_buku';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBuku()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function tambahBuku($judul, $pengarang, $penerbit, $tahun, $kategori, $jumlah, $path_db, $link_buku)
    {
        $query = "INSERT INTO " . $this->table . "
                    VALUES ('', :judul, :pengarang, :th_terbit, :penerbit, :kategori, :jumlah_buku, :gambar, :link_buku)";

        $this->db->query($query);
        $this->db->bind('judul', $judul);
        $this->db->bind('pengarang', $pengarang);
        $this->db->bind('th_terbit', $tahun);
        $this->db->bind('penerbit', $penerbit);
        $this->db->bind('kategori', $kategori);
        $this->db->bind('jumlah_buku', $jumlah);
        $this->db->bind('gambar', $path_db);
        $this->db->bind('link_buku', $link_buku);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusBuku($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getBukuById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function ubahBuku($id, $judul, $pengarang, $penerbit, $tahun, $kategori, $jumlah, $path_db, $link_buku)
    {
        // if ($path_db == '') {
        //     $query = "UPDATE " . $this->table . "
        //                 SET judul = :judul, pengarang = :pengarang, th_terbit = :th_terbit, penerbit = :penerbit, kategori = :kategori, jumlah_buku = :jumlah_buku, link_buku = :link_buku
        //                 WHERE id = :id";
        //     $this->db->query($query);
        // } else {
        //     $query = "UPDATE " . $this->table . "
        //                 SET judul = :judul, pengarang = :pengarang, th_terbit = :th_terbit, penerbit = :penerbit, kategori = :kategori, jumlah_buku = :jumlah_buku, gambar = :gambar, link_buku = :link_buku
        //                 WHERE id = :id";
            
            
        // }
        $query = "UPDATE " . $this->table . "
                    SET judul = :judul, pengarang = :pengarang, th_terbit = :th_terbit, penerbit = :penerbit, kategori = :kategori, jumlah_buku = :jumlah_buku, gambar = :gambar, link_buku = :link_buku
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('judul', $judul);
        $this->db->bind('pengarang', $pengarang);
        $this->db->bind('th_terbit', $tahun);
        $this->db->bind('penerbit', $penerbit);
        $this->db->bind('kategori', $kategori);
        $this->db->bind('jumlah_buku', $jumlah);
        $this->db->bind('gambar', $path_db);
        $this->db->bind('link_buku', $link_buku);

        $this->db->execute();

        return $this->db->rowCount();
    }
}