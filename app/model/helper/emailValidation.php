<?php


class emailValidation
{
    protected $email;
    protected $emailErr;
    private $testInput;
    private $insertion=1;
    private $checkEmail;
    private $runEmail;
    function __construct()
    {
        $this->email=$this->emailErr="";
        $this->testInput=new testInputFields();
        $conn = new Connection();
        $this->connection = $conn->getConnection();
    }
    function email(){
        if (empty($_POST["email"])) {
            echo $this->emailErr = "Email is required";
            if (!empty($_POST['requestFromSignUp']=='requestFromSignUp')){
            $_SESSION["emailErr"] = $this->emailErr;}else{
                $_SESSION["loginEmailErr"] = $this->emailErr;
            }


            $this->insertion=0;
        } else {
            $this->email = $this->testInput->test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                echo $this->emailErr = "Invalid email format";
                if (!empty($_POST['requestFromSignUp']=='requestFromSignUp')){
                    $_SESSION["emailErr"] = $this->emailErr;}else{
                    $_SESSION["loginEmailErr"] = $this->emailErr;
                }    $this->insertion=0;
            }
            else {

                // check if user is already exist or not
                if (!empty($_POST['requestFromSignUp']=='requestFromSignUp')){
                    $query  ="select email from user where email='$this->email'";
                    $result = mysqli_query($this->connection, $query);
                    $row = mysqli_fetch_assoc($result);
                    if(isset($row['email'])){
                        echo $this->emailErr = "Email is already exist ,Try another";
                        if (!empty($_POST['requestFromSignUp']=='requestFromSignUp')){
                            $_SESSION["emailErr"] = $this->emailErr;}else{
                            $_SESSION["loginEmailErr"] = $this->emailErr;
                        }$this->insertion=0;

                    }else
                        if(isset($_SESSION['emailErr']))
                            unset ($_SESSION['emailErr']);
                }
                /*$query  ="select email from signup where email='$this->email'";
                $result = mysqli_query($this->connection, $query);
                $row = mysqli_fetch_assoc($result);
                if(isset($row['email'])){
                    echo $this->emailErr = "Email is already exist ,Try another";
                    $_SESSION["emailErr"] = $this->emailErr;
                    $this->insertion=0;

                }else
                    if(isset($_SESSION['emailErr']))
                        unset ($_SESSION['emailErr']);*/


            }
        }
        return $this->email;
    }

    function  insertionError(){
        return $this->insertion;



    }

}