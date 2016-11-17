<?php

class nameValidation
{
    protected $firstName;
    protected $lastName;
    protected $firstNameErr;
    protected $lastNameErr;
    private $testInput;
    protected $insertion;

    function __construct()
    {
        $this->firstName=$this->lastName=$this->firstNameErr=$this->lastNameErr="";
        $this->testInput=new testInputFields();

    }
    function firstNameValidation(){
        //First Name Validation
        if (empty($_POST["first-name"])) {
            echo $this->firstNameErr = "First Name is required";
            $_SESSION["firstNameErr"] = $this->firstNameErr;
            $this->insertion=0;

        } else {
            $this->firstName = $this->testInput->test_input($_POST["first-name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$this->firstName)) {
                echo $this->firstNameErr = "Only letters and white space allowed";
                $_SESSION["firstNameErr"] = $this->firstNameErr;
                $this->insertion=0;
            }
            else{
                if(isset($_SESSION['firstNameErr']))
                    unset ($_SESSION['firstNameErr']);
            }
        }
        return $this->firstName;

    }
    function lastNameValidation(){
        //Last Name Validation
        if (empty($_POST["last-name"])) {
            echo $this->lastNameErr = "Last Name is required";
            $_SESSION["lastNameErr"] = $this->lastNameErr;
            $this->insertion=0;
        } else {
            $this->lastName = $this->testInput->test_input($_POST["last-name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$this->lastName)) {
                echo $this->lastNameErr = "Only letters and white space allowed";
                $_SESSION["lastNameErr"] = $this->lastNameErr;

                $this->insertion=0;
            }else{
                if(isset($_SESSION['lastNameErr']))
                    unset ($_SESSION['lastNameErr']);
            }
        }

        return $this->lastName;

    }

    function  insertionError(){
        return $this->insertion;
    }
}