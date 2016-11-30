<?php


class imageValidation
{
    protected $image;
    protected $getProfileImageNameForSignupModel;
    protected $imageErr;
    protected $insertion=1;
    private $otherFielsdError;

    function image($otherFielsdError,$requestFrom){

        $this->otherFielsdError= $otherFielsdError;
      echo  $requestFromUpdatePost=$_GET['user'];

        if($requestFrom=="requestFromSignUp"){
           $target_dir = "../../public/img/profile/";
            

        }else if($requestFrom=="requestFromAddPost"||$requestFromUpdatePost==="requst-from-user-post"||$requestFromUpdatePost==="requst-from-home-post"){
           echo $target_dir = "../../public/img/post/";
        }

        $this->getProfileImageNameForSignupModel=basename($_FILES["input-file-preview"]["name"]);
        $this->image=strtotime("now"). basename($_FILES["input-file-preview"]["name"]);
        $target_file = $target_dir .$this->image;
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
                echo  $this->imageErr= "File is not an image.";
                if($requestFrom=="requestFromSignUp"){
                    $_SESSION["profileImageErr"] = $this->imageErr;
                    $this->insertion=0;


                }else if($requestFrom=="requestFromAddPost"){
                    $_SESSION["postImageErr"] = $this->imageErr;
                    $this->insertion=0;


                }else     if($requestFrom=="post-update"){
                    $_SESSION["update-post-image-Err"] = $this->imageErr;
                    $this->insertion=0;


                }



                $uploadOk = 0;
            }
        }else
// Check if file already exists
            if (file_exists($target_file)) {
                echo $this->imageErr= "File already exists.";
                if($requestFrom=="requestFromSignUp"){
                    $_SESSION["profileImageErr"] = $this->imageErr;

                }else if($requestFrom=="requestFromAddPost"){
                    $_SESSION["postImageErr"] = $this->imageErr;

                }else if($requestFrom=="post-update"){
                    $_SESSION["update-post-image-Err"] = $this->imageErr;

                }

                $this->insertion=0;
                $uploadOk = 0;
            }else
// Check file size
                if ($_FILES["input-file-preview"]["size"] > 500000) {
                    echo $this->imageErr= "Your file is too large.";
                    if($requestFrom=="requestFromSignUp"){
                        $_SESSION["profileImageErr"] = $this->imageErr;

                    }else if($requestFrom=="requestFromAddPost"){
                        $_SESSION["postImageErr"] = $this->imageErr;

                    }else if($requestFrom=="post-update"){
                        $_SESSION["update-post-image-Err"] = $this->imageErr;

                    }

                    $this->insertion=0;
                    $uploadOk = 0;
                }else
// Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif" ) {
                        echo $this->imageErr= " Only JPG, JPEG, PNG & GIF files are allowed.";
                        if($requestFrom=="requestFromSignUp"){
                            $_SESSION["profileImageErr"] = $this->imageErr;

                        }else if($requestFrom=="requestFromAddPost"){
                            $_SESSION["postImageErr"] = $this->imageErr;

                        }else if($requestFrom=="post-update"){
                         echo   $_SESSION["update-post-image-Err"] = $this->imageErr;

                        }

                        $this->insertion=0;
                        $uploadOk = 0;
                    }else
// Check if $uploadOk is set to 0 by an error
                        if ($uploadOk == 0) {
                            echo $this->imageErr="Sorry, your file was not uploaded.";
                            if($requestFrom=="requestFromSignUp"){
                                $_SESSION["profileImageErr"] = $this->imageErr;

                            }else if($requestFrom=="requestFromAddPost"){
                                $_SESSION["postImageErr"] = $this->imageErr;

                            }else if($requestFrom=="post-update"){
                                $_SESSION["update-post-image-Err"] = $this->imageErr;

                            }

                            $this->insertion=0;
// if everything is ok, try to upload file
                        } else
                            if($this->otherFielsdError==1){
                                echo $target_file;
                                if (move_uploaded_file($_FILES["input-file-preview"]["tmp_name"], $target_file)) {
                                    echo "The file ". basename( $_FILES["input-file-preview"]["name"]). " has been uploaded.";
                                    if (isset($_SESSION["profileImageErr"])){
                                        unset($_SESSION["profileImageErr"]);
                                    }else  if (isset($_SESSION["postImageErr"])){
                                        unset($_SESSION["postImageErr"]);
                                    }else if($requestFrom=="post-update"){
                                        $_SESSION["update-post-image-Err"] = $this->imageErr;

                                    }

                                } else {
                                    echo $this->imageErr="Sorry, there was an error uploading your file.";
                                    if($requestFrom=="requestFromSignUp"){
                                        $_SESSION["profileImageErr"] = $this->imageErr;
                                        $this->insertion=0;


                                    }else if($requestFrom=="requestFromAddPost"){
                                        $_SESSION["postImageErr"] = $this->imageErr;
                                        $this->insertion=0;


                                    }else if($requestFrom=="post-update"){
                                        $_SESSION["update-post-image-Err"] = $this->imageErr;
                                        $this->insertion=0;

                                    }
                                }
                            }else{
                                echo $this->imageErr="Other fields are required";
                                if($requestFrom=="requestFromSignUp"){
                                    $_SESSION["profileImageErr"] = $this->imageErr;
                                    $this->insertion=0;


                                }else if($requestFrom=="requestFromAddPost"){
                                    $_SESSION["postImageErr"] = $this->imageErr;
                                    $this->insertion=0;


                                }else if($requestFrom=="post-update"){
                                    $_SESSION["update-post-image-Err"] = $this->imageErr;
                                    $this->insertion=0;


                                }

                            }


        return $this->image;
    }

    function  insertionError(){
        return $this->insertion;
    }
    function  getProfileImageNameForSignupModel(){

        return $this->getProfileImageNameForSignupModel;
    }

}