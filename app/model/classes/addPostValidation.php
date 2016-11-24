<?php
include '../../app/model/helper/imageValidation.php';
include '../../config/Connection.php';
include '../../app/model/helper/testInputFields.php';
include '../../app/model/helper/titleValidation.php';
include '../../app/model/helper/descriptionValidation.php';
include '../../app/model/helper/addPost.php';
session_start();


class addPostValidation
{
    private $imageIsSetIfOtherValidationAreTrue=0;
    private $requestFrom;

    private $postTitleValidation;
    private $postDescriptionValidation;
    private $imageValidation;

    private $titleValidation;
    private $descriptionValidation;
    private $postImage;

    private $isTitleValid;
    private $isDescriptionValid;
    private $isImageValid;

    private $userId;

    private $insert;
    private $showErrOnAddPostModel;

function  validation(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if(isset($_SESSION['user_id'])){
            $this->userId=$_SESSION['user_id'];



            $this->requestFrom=$_POST['requestFromAddPost'];

            $this->postTitleValidation=new titleValidation();
            echo $this->titleValidation=$this->postTitleValidation->validation();
            $this->isTitleValid=$this->postTitleValidation->insertionError();

            $this->postDescriptionValidation=new descriptionValidation();
            echo $this->descriptionValidation=$this->postDescriptionValidation->validation();
            $this->isDescriptionValid=$this->postDescriptionValidation->insertionError();

            if($this->isTitleValid&&$this->isDescriptionValid==1){
                $this->imageIsSetIfOtherValidationAreTrue=1;
            }


            $this->imageValidation=new imageValidation();
            $this->postImage=$this->imageValidation->image($this->imageIsSetIfOtherValidationAreTrue,$this->requestFrom);
            echo $this->isImageValid=$this->imageValidation->insertionError();


            if($this->isTitleValid&&$this->isDescriptionValid&&$this->isImageValid==1) {
                $addPost=new addPost();
                $this->insert=$addPost->insert($this->userId,$this->titleValidation,$this->descriptionValidation,$this->postImage);
            }
            else {
                echo "Insertion aaa Failed";
                $this->showErrOnAddPostModel = "ValidationErr";
                $_SESSION["redirectAddPostModel"] = $this->showErrOnAddPostModel;
                header('Location: ../../index.php?postTitle=' . $this->titleValidation . '&descripation=' . $this->descriptionValidation);

            }
}else{
            echo 'user are not login';
        }


    }


    }
}