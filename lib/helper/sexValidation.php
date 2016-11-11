<?php


class sexValidation
{
    protected $gender;
    protected $genderErr;
    function __construct()
    {
        $this->gender=$this->genderErr="";
    }

    function sex(){
        if(empty($_POST["sex"])){
            echo $this->genderErr="Gender is Required";
            $this->insertion=0;
            $_SESSION["sexErr"]=$this->genderErr;
        }else{
            $this->gender=$_POST["sex"];
            if (isset($_SESSION["sex"])){
                unset($_SESSION["sex"]);
            }
        }
    }

}