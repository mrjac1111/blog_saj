<?php

// Start the session
session_start();

include 'signUP.php';


class signUpValidation
{

    // define variables and set to empty values
    protected $firstName;
    protected $lastName;
    protected $email;
    protected $password;
    protected $confirmPassword;
    protected $gender;
    protected $profileImage;
    protected $getProfileImageNameForSignupModel;
    protected $validationData;
    protected $firstNameErr;
    protected $lastNameErr;
    protected $emailErr;
    protected $passwordErr;
    protected $confirmPasswordErr;
    protected $genderErr;
    protected $profileImageErr;
    protected $showErrOnModel;
    protected $insertion=1;
    protected $passwordUnset=0;
    protected $date;


    function  __construct(){
        $this->validationData=$this->firstName=$this->lastName=$this->email=$this->password=$this->confirmPassword="";
        $this->firstNameErr=$this->lastNameErr=$this->emailErr=$this->passwordErr=$this->confirmPasswordErr="";

}
    function  validation(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

                //First Name Validation
                if (empty($_POST["first-name"])) {
                    echo $this->firstNameErr = "First Name is required";
                    $_SESSION["firstNameErr"] = $this->firstNameErr;
                    $this->insertion=0;

                } else {
                    $this->firstName = $this->test_input($_POST["first-name"]);
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
                //Last Name Validation
            if (empty($_POST["last-name"])) {
                echo $this->lastNameErr = "Last Name is required";
                $_SESSION["lastNameErr"] = $this->lastNameErr;
                $this->insertion=0;
            } else {
                $this->lastName = $this->test_input($_POST["last-name"]);
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
            if(empty($_POST["sex"])){
                echo $this->genderErr="Gender is Required";
                $this->insertion=0;
                $_SESSION["sexErr"]=$this->genderErr;
            }else{
                $this->gender=$_POST["sex"];
                if (isset($_SESSION["sex"])){
                    unset($_SESSION["sex"]);
                }
            }
            /*
             * Image Validation
             *
             */


$target_dir = "../img/profile/";

 $this->getProfileImageNameForSignupModel=basename($_FILES["input-file-preview"]["name"]);
            $this->profileImage=strtotime("now"). basename($_FILES["input-file-preview"]["name"]);
            $target_file = $target_dir .$this->profileImage;
            // Instantiating DateTime Object

$uploadOk = 1;
echo $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["input-file-preview"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
      echo  $this->profileImageErr= "File is not an image.";
        $_SESSION["profileImageErr"] = $this->profileImageErr;

        $this->insertion=0;
        $uploadOk = 0;
    }
}else
// Check if file already exists
if (file_exists($target_file)) {
    echo $this->profileImageErr= "File already exists.";
    $_SESSION["profileImageErr"] = $this->profileImageErr;

    $this->insertion=0;
    $uploadOk = 0;
}else
// Check file size
if ($_FILES["input-file-preview"]["size"] > 500000) {
    echo $this->profileImageErr= "Your file is too large.";
    $_SESSION["profileImageErr"] = $this->profileImageErr;

    $this->insertion=0;
    $uploadOk = 0;
}else
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo $this->profileImageErr= " Only JPG, JPEG, PNG & GIF files are allowed.";
    $_SESSION["profileImageErr"] = $this->profileImageErr;

    $this->insertion=0;
    $uploadOk = 0;
}else
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo $this->profileImageErr="Sorry, your file was not uploaded.";
    $_SESSION["profileImageErr"] = $this->profileImageErr;

    $this->insertion=0;
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["input-file-preview"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["input-file-preview"]["name"]). " has been uploaded.";
        if (isset($_SESSION["profileImageErr"])){
            unset($_SESSION["profileImageErr"]);
        }

    } else {
        echo $this->profileImageErr="Sorry, there was an error uploading your file.";
        $_SESSION["profileImageErr"] = $this->profileImageErr;
        $this->insertion=0;
    }
}





if($this->insertion==1)
            {
            $signUp=new signUp();
            $this->insert=$signUp->insert($this->firstName,$this->lastName,$this->email,$this->password,$this->profileImage,$this->gender);
            }
            else{
                echo "Insertion Failed";
                $this->showErrOnModel="ValidationErr";
                $_SESSION["showErrOnModel"]=$this->showErrOnModel;
               header('Location: ../index.php?firstName=' .$this->firstName.'&lastName='.$this->lastName.'&email='.$this->email.'&gender='.$this->gender.'&profileImage='.$this->getProfileImageNameForSignupModel);

            }

        }

    }


    function test_input($data) {

      //  $this->validation();

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
}
$Validation= new signUpValidation();
$Validation->validation();

