<?php


class emailValidation
{
    protected $email;
    protected $emailErr;
    function __construct()
    {
        $this->email=$this->emailErr="";
    }
    function email(){
        if (empty($_POST["email"])) {
            echo $this->emailErr = "Email is required";
            $_SESSION["emailErr"] = $this->emailErr;

            $this->insertion=0;
        } else {
            $this->email = $this->test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                echo $this->emailErr = "Invalid email format";
                $_SESSION["emailErr"] = $this->emailErr;
                $this->insertion=0;
            }
            else{
                if(isset($_SESSION['emailErr']))
                    unset ($_SESSION['emailErr']);
            }
        }
    }
}