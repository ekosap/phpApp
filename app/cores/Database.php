<?php

class Database{
    private $host = db_host;
    private $user = db_user;
    private $pass = db_pass;
    private $name = db_name;

    //persiapan koneksi
    private $con;
    private $cmd;

    public function __construct()
    {
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->name;
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->con = new PDO($dsn,$this->user,$this->pass,$option);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function query($query)
    {
        $this->cmd = $this->con->prepare($query);
    }
    public function bind($param,$value,$type=null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;

                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;

                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }
        $this->cmd->bindValue($param,$value,$type);
    }
    public function execute()
    {
        $this->cmd->execute();
    }
    public function resultArray()
    {
        $this->execute();
        return $this->cmd->fetchAll(PDO::FETCH_ASSOC);
    }
    public function result()
    {
        $this->execute();
        return $this->cmd->fetch(PDO::FETCH_ASSOC);
    }
}