<?php

class Peminjaman_model {
    private $table = 'peminjaman';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function addPeminjaman($data)
    {
        $query = "INSERT INTO " . $this->table . "
                    VALUES ('', :id_anggota, :id_buku, :tgl_pinjam, :tgl_kembali, :status)";

        $this->db->query($query);
        $this->db->bind('id_buku', $data['id_buku']);
        $this->db->bind('id_anggota', $data['id_user']);
        $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);
        $this->db->bind('tgl_kembali', '');
        $this->db->bind('status', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getPeminjamanByUser($user_id)
    {
        // join table buku dan anggota
        $query = "SELECT * FROM peminjaman
                    JOIN data_buku b ON peminjaman.id_buku = b.id
                    JOIN data_anggota a ON peminjaman.id_anggota = a.id
                    WHERE peminjaman.id_anggota = :id_user
                    AND peminjaman.status != :status";

        $this->db->query($query);
        $this->db->bind('id_user', $user_id);
        $this->db->bind('status', 0);

        return $this->db->resultSet();
    }

    public function updatePeminjaman($data)
    {
        $query = "UPDATE " . $this->table . "
                    SET tgl_kembali = :tgl_kembali, status = :status
                    WHERE id_peminjaman = :id_peminjaman";

        $this->db->query($query);
        $this->db->bind('id_peminjaman', $data['id_peminjaman']);
        $this->db->bind('tgl_kembali', $data['tgl_kembali']);
        $this->db->bind('status', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}