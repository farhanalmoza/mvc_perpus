<?php

class User_model {
    private $table = 'data_anggota';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllAnggota()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function registerUser($data)
    {
        $query = "INSERT INTO " . $this->table . "
                    VALUES ('', :email, :nama, :password, :jk, :kelas, :ttl, :alamat, :foto)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('jk', '');
        $this->db->bind('kelas', '');
        $this->db->bind('ttl', '');
        $this->db->bind('alamat', '');
        $this->db->bind('foto', '');

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusAnggota($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}