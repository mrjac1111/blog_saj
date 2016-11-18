<?php


class imageValidation
{
    protected $profileImage;
    protected $getProfileImageNameForSignupModel;
    protected $profileImageErr;
    protected $insertion=1;
    private $otherFielsdError;

    function image($otherFielsdError){
        $this->otherFielsdError= $otherFielsdError;

        $target_dir = "../../public/img/profile/";

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
                        } else
                            if($this->otherFielsdError==1){
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
                            }else{
                                echo $this->profileImageErr="Other fields are required";
                                $_SESSION["profileImageErr"] = $this->profileImageErr;
                                $this->insertion=0;

                            }


        return $this->profileImage;
    }

    function  insertionError(){
        return $this->insertion;
    }
    function  getProfileImageNameForSignupModel(){

        return $this->getProfileImageNameForSignupModel;
    }

}