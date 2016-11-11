<?php

include 'helper/getConnection.php';

class Connection
{
    protected $db_name;
    protected $db_user;
    protected $db_password;
    protected $db_host;
    public $connect_db;
    private $getConnection;
    function __construct(){
        $this->db_name="saj_blog";
        $this->db_user="root";
        $this->db_password="";
        $this->db_host="localhost";
    }
    public function connectToDatabase(){
        $this->getConnection=new getConnection($this->db_host,$this->db_user,$this->db_password,$this->db_name);
    }
    /*public function getConnection()
    {
        $this->connect_db=new mysqli($this->db_host,$this->db_user,$this->db_password,$this->db_name);
        if($this->connect_db->connect_error){
            die("Connection failed: " . $this->connect_db->connect_error);
        }
        else{
            return $this->connect_db;
        }
    }*/


}