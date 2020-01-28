<?php

class Users_model
{
    private $table = 'Users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUsers()
    {
        $this->db->query('select * from '.$this->table);
        return $this->db->resultArray();
    }
}
