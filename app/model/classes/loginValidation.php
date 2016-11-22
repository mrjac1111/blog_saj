<?php

// Start the session
session_start();

include '../../app/model/helper/nameValidation.php';
include '../../app/model/helper/emailValidation.php';
include '../../app/model/helper/passwordValidation.php';
include '../../app/model/helper/imageValidation.php';
include '../../app/model/helper/sexValidation.php';
include '../../app/model/helper/logIn.php';
include '../../app/model/helper/testInputFields.php';
//include '../../app/model/helper/signupDataInsert.php';
include '../../config/Connection.php';




class logInValidation
{

    // define variables and set to empty values

    protected $getProfileImageNameForSignupModel;
    protected $showErrOnModel;
    protected $isEmailValid;
    protected $isPasswordValid;
    protected $passwordUnset=0;

    private $emailValidation;
    private $passwordValidation;

    private $email;
    private $password;

    private $logIn;
    private $userLogIn;
    private $connection;

/*    function __construct()
    {
        $conn = new Connection();
        $this->connection = $conn->getConnection();

    }*/
    function  validation(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->emailValidation= new emailValidation();
            $this->email= $this->emailValidation->email();
            echo $this->isEmailValid=$this->emailValidation->insertionError();

            $this->passwordValidation=new passwordValidation();
            $this->password= $this->passwordValidation->loginPassword();
            echo $this->isPasswordValid=$this->passwordValidation->insertionError();


            if($this->isEmailValid&&$this->isPasswordValid==1) {
                echo "Login Validaion OKay";
                $this->logIn=new logIn();
                $this->userLogIn=$this->logIn->userLogIn($this->email,$this->password );
                
               /* $signUp=new signUp();
                $this->insert=$signUp->insert($this->firstName,$this->lastName,$this->email,$this->password,$this->profileImage,$this->gender);*/
            }
            else {
                echo "Insertion  Failed";
                $this->showErrOnModel = "ValidationErr";
                $_SESSION["redirectModel"] = $this->showErrOnModel;
               // header('Location: ../../index.php?firstName=' . '&email=' . $this->email );
            }

        }

    }


}
