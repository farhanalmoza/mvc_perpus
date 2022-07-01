<?php

class Admin_model {
    private $table = 'admin';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function registerAdmin($data)
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

    public function loginAdmin($data)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE username = :username AND password = :password";
        $this->db->query($query);
        $this->db->bind('username', $data['email']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();
        return $this->db->single();
        // return true;
    }
}