<?php

/**
 * Created by PhpStorm.
 * User: Jawad Ahmad Attari
 * Date: 11/26/2016
 * Time: 10:15 AM
 */
class userRoleValidation
{
    private $role;
    private $roleErr;
    private $insertion=1;

    function role(){
        if(empty($_POST["role"])){
            echo $this->roleErr="Role is Required";
            $_SESSION['user_role_err']=$this->roleErr;
            $this->insertion=0;
        }else{
           echo $this->role=$_POST['role'];
        }
        return $this->role;
    }

    function  insertionError(){
        return $this->insertion;
    }

}