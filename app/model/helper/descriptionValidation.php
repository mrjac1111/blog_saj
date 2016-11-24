<?php

/**
 * Created by PhpStorm.
 * User: Jawad Ahmad Attari
 * Date: 11/24/2016
 * Time: 8:42 AM
 */
class descriptionValidation
{
    private $description;
    private $descriptionErr;
    private $insertion=1;

    function __construct()
    {
        $this->testInput=new testInputFields();

    }

    function validation(){
        if(empty($_POST["description"])){
            echo $this->descriptionErr = "description is required";
            $_SESSION["descriptionErr"] = $this->descriptionErr;
            $this->insertion=0;
        }else{
            $this->description = $this->testInput->test_input($_POST["description"]);

            if(isset($_SESSION['descriptionErr']))
                unset ($_SESSION['descriptionErr']);
        }
        return $this->description;



    }
    function  insertionError(){
        return $this->insertion;
    }
}