<?php


class passwordValidation
{
    protected $password;
    protected $confirmPassword;
    protected $passwordErr;
    protected $confirmPasswordErr;

    function __construct()
    {
        $this->password = $this->confirmPassword = $this->passwordErr = $this->confirmPasswordErr = "";
    }
    function password(){
        //Validates password & confirm passwords.
        if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["confirm-password"])) {
            $this->password = $this->test_input($_POST["password"]);
            $this->confirmPassword = $this->test_input($_POST["confirm-password"]);
            if (strlen($_POST["password"]) <= '8') {
                echo  $this->passwordErr = "Your Password Must Contain At Least 8 Characters!";
                $_SESSION["passwordErr"] = $this->passwordErr;
                $this->passwordUnset=1;
                $this->insertion=0;
            } elseif (!preg_match("#[0-9]+#", $this->password)) {
                echo $this->passwordErr = "Your Password Must Contain At Least 1 Number!";
                $_SESSION["passwordErr"] = $this->passwordErr;
                $this->insertion=0;
            } elseif (!preg_match("#[A-Z]+#", $this->password)) {
                echo $this->passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
                $_SESSION["passwordErr"] = $this->passwordErr;
                $this->insertion=0;
            } elseif (!preg_match("#[a-z]+#", $this->password)) {
                echo $this->passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
                $_SESSION["passwordErr"] = $this->passwordErr;
                $this->insertion=0;
            }} else {
            echo $this->passwordErr = "Please Check You've Entered Password Or Confirmed Your Password!";
            $_SESSION["passwordErr"] = $this->passwordErr;
            $this->insertion=0;
        }
    }
}
