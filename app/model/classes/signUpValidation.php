<?php

// Start the session
session_start();

include '../../app/model/helper/nameValidation.php';
include '../../app/model/helper/emailValidation.php';
include '../../app/model/helper/passwordValidation.php';
include '../../app/model/helper/imageValidation.php';
include '../../app/model/helper/sexValidation.php';
include '../../app/model/helper/signUp.php';
include '../../app/model/helper/testInputFields.php';
include '../../config/Connection.php';




class signUpValidation
{

    // define variables and set to empty values

    protected $getProfileImageNameForSignupModel;
   protected $validationData;
    protected $genderErr;
    protected $showErrOnModel;
    protected $insertion=1;
    protected $passwordUnset=0;

    private $nameValidation;
    private $emailValidation;
    private $passwordValidation;
    private $imageValidation;
    private $sexValidation;

    private $firstName;
    private $lastName;
    private $email;
    private $password;
    protected $gender;
    protected $profileImage;

    function __construct()
    {
    }
    function  validation(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $this->nameValidation= new nameValidation();
             $this->firstName= $this->nameValidation->firstNameValidation();
            $this->insertion=$this->nameValidation->insertionError();

            $this->lastName=$this->nameValidation->lastNameValidation();
            $this->insertion=$this->nameValidation->insertionError();

            $this->emailValidation= new emailValidation();
            $this->email= $this->emailValidation->email();
            $this->insertion=$this->emailValidation->insertionError();

            $this->passwordValidation=new passwordValidation();
           $this->password= $this->passwordValidation->password();
            $this->insertion=$this->passwordValidation->insertionError();


            $this->sexValidation=new sexValidation();
            $this->gender=$this->sexValidation->sex();
            $this->insertion=$this->sexValidation->insertionError();
            echo '<br>';
            echo $this->insertion;

            $this->imageValidation=new imageValidation();
            $this->profileImage=$this->imageValidation->image($this->insertion);
            $this->getProfileImageNameForSignupModel=$this->imageValidation->getProfileImageNameForSignupModel();
            $this->insertion=$this->imageValidation->insertionError();




if($this->insertion==1)
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


}/*
$Validation= new signUpValidation();
$Validation->validation();*/

