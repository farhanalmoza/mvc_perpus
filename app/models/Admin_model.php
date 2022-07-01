<?php

class Admin_model {
    private $table = 'admin';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUser()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function registerUser($data)
    {
        $query = "INSERT INTO " . $this->table . "
                    VALUES ('', :username, :password, :fullname, :gambar)";

        $this->db->query($query);
        $this->db->bind('username', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('fullname', $data['nama']);
        $this->db->bind('gambar', '');

        $this->db->execute();

        return $this->db->rowCount();
    }
}