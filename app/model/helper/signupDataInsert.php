<?php

/**
 * Created by PhpStorm.
 * User: Jawad Ahmad Attari
 * Date: 11/18/2016
 * Time: 8:09 AM
 */
class signupDataInsert
{
    function insert($insertion){
        echo 'asadaff';

        if(insertion==1)
        {
            $signUp=new signUp();
            $this->insert=$signUp->insert($this->firstName,$this->lastName,$this->email,$this->password,$this->profileImage,$this->gender);
        }
        else{
            echo "Insertion Failed";
            $this->showErrOnModel="ValidationErr";
            $_SESSION["showErrOnModel"]=$this->showErrOnModel;
            header('Location: ../../index.php?firstName=' .$this->firstName.'&lastName='.$this->lastName.'&email='.$this->email.'&gender='.$this->gender);

        }
    }
}