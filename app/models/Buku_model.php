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
}