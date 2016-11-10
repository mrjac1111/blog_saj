<?php

/**
 * Created by PhpStorm.
 * User: wdf
 * Date: 10/18/2016
 * Time: 10:08 PM
 */

class Connection
{
    protected $db_name;
    protected $db_user;
    protected $db_password;
    protected $db_host;
    public $connect_db;
    function __construct(){
        $this->db_name="saj_blog";
        $this->db_user="root";
        $this->db_password="";
        $this->db_host="localhost";
    }
    public function getConnection()
    {
        $this->connect_db=new mysqli($this->db_host,$this->db_user,$this->db_password,$this->db_name);
        if($this->connect_db->connect_error){
            die("Connection failed: " . $this->connect_db->connect_error);
        }
        else{
            return $this->connect_db;
        }
    }

}