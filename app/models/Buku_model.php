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

    public function tambahBuku($data)
    {
        $query = "INSERT INTO " . $this->table . "
                    VALUES ('', :judul, :pengarang, :penerbit, :tahun, :jumlah, :gambar)";

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('pengarang', $data['pengarang']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('tahun', $data['tahun']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('gambar', $data['gambar']);

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