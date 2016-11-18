<?php


class emailValidation
{
    protected $email;
    protected $emailErr;
    private $testInput;
    private $insertion;
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
            $_SESSION["emailErr"] = $this->emailErr;

            $this->insertion=0;
        } else {
            $this->email = $this->testInput->test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                echo $this->emailErr = "Invalid email format";
                $_SESSION["emailErr"] = $this->emailErr;
                $this->insertion=0;
            }
            else {

                // check if user is already exist or not

                $query  ="select email from signup where email='$this->email'";
                $result = mysqli_query($this->connection, $query);
                $row = mysqli_fetch_assoc($result);
                if(isset($row['email'])){
                    echo $this->emailErr = "Email is already exist ,Try another";
                    $_SESSION["emailErr"] = $this->emailErr;
                    $this->insertion=0;

                }else
                    if(isset($_SESSION['emailErr']))
                        unset ($_SESSION['emailErr']);


            }
        }
        return $this->email;
    }

    function  insertionError(){
        return $this->insertion;



    }

}