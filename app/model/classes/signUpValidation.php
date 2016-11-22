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
//include '../../app/model/helper/signupDataInsert.php';
include '../../config/Connection.php';




class signUpValidation
{

    // define variables and set to empty values

    protected $getProfileImageNameForSignupModel;
   protected $validationData;
    protected $genderErr;
    protected $showErrOnModel;
    protected $isFirstNameValid;
    protected $isLastNameValid;
    protected $isEmailValid;
    protected $isPasswordValid;
    protected $isImageValid;
    protected $isGenderValid;
    protected $imageIsSetIfOtherValidationAreTrue;
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
            echo $this->isFirstNameValid=$this->nameValidation->insertionError();
            $this->lastName=$this->nameValidation->lastNameValidation();
           echo $this->isLastNameValid=$this->nameValidation->insertionError();

            $this->emailValidation= new emailValidation();
            $this->email= $this->emailValidation->email();
            echo $this->isEmailValid=$this->emailValidation->insertionError();

            $this->passwordValidation=new passwordValidation();
           $this->password= $this->passwordValidation->password();
            echo $this->isPasswordValid=$this->passwordValidation->insertionError();


            $this->sexValidation=new sexValidation();
            $this->gender=$this->sexValidation->sex();
           echo  $this->isGenderValid=$this->sexValidation->insertionError();

            if($this->isFirstNameValid&&$this->isLastNameValid&&$this->isEmailValid&&$this->isPasswordValid&&$this->isGenderValid==1){
                $this->imageIsSetIfOtherValidationAreTrue=1;
            }

            $this->imageValidation=new imageValidation();
            $this->profileImage=$this->imageValidation->image($this->imageIsSetIfOtherValidationAreTrue);
            $this->getProfileImageNameForSignupModel=$this->imageValidation->getProfileImageNameForSignupModel();
           echo $this->isImageValid=$this->imageValidation->insertionError();
            echo $this->isFirstNameValid;
            echo $this->isLastNameValid;
            echo $this->isEmailValid;
            echo $this->isPasswordValid;
            echo $this->isImageValid;
            echo $this->isGenderValid;



if($this->isFirstNameValid&&$this->isLastNameValid&&$this->isEmailValid&&$this->isPasswordValid&&$this->isGenderValid&&$this->isImageValid==1) {
    $signUp=new signUp();
    $this->insert=$signUp->insert($this->firstName,$this->lastName,$this->email,$this->password,$this->profileImage,$this->gender);
}
else {
    echo "Insertion aaa Failed";
    $this->showErrOnModel = "ValidationErr";
    $_SESSION["redirectModel"] = $this->showErrOnModel;
    header('Location: ../../index.php?firstName=' . $this->firstName . '&lastName=' . $this->lastName . '&email=' . $this->email . '&gender=' . $this->gender);
}

        }

    }


}/*
$Validation= new signUpValidation();
$Validation->validation();*/

