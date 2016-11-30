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

    function validation($forUpdatePost){
        $this->description = $this->testInput->test_input($_POST["description"]);

        if(empty($this->description)){
            echo $this->descriptionErr = "description is required";
            if($forUpdatePost=="post-update"){
                $_SESSION["update-post-description-Err"] = $this->descriptionErr;

            }else{
                $_SESSION["descriptionErr"] = $this->descriptionErr;

            }
            $this->insertion=0;
        }else
            if(isset($_SESSION['descriptionErr'])){
                unset ($_SESSION['descriptionErr']);
        }
        return $this->description;



    }
    function  insertionError(){
        return $this->insertion;
    }
}