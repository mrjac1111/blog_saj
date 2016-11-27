<?php

/**
 * Created by PhpStorm.
 * User: EC-002
 * Date: 11/11/2016
 * Time: 10:31 AM
 */
class getConnection
{
        function __construct($db_host,$db_user,$db_password,$db_name)
        {
            $this->connect_db=new mysqli($db_host,$db_user,$db_password,$db_name);
            if($this->connect_db->connect_error){
                die("Connection failed: " . $this->connect_db->connect_error);
            }
            else{
                return $this->connect_db;
                echo "DB";
            }
        }
}