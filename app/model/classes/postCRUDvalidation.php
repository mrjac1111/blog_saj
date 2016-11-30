<?php
include '../../app/model/helper/imageValidation.php';
include '../../config/Connection.php';
include '../../app/model/helper/testInputFields.php';
include '../../app/model/helper/titleValidation.php';
include '../../app/model/helper/descriptionValidation.php';
include '../../app/model/helper/addPost.php';
include '../../app/model/helper/updaePost.php';
include '../../app/model/helper/delete.php';
session_start();


class postCRUDvalidation
{
    private $imageIsSetIfOtherValidationAreTrue = 0;
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

    function validation()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_SESSION['user_id'])) {
                $this->userId = $_SESSION['user_id'];


                if (isset($_GET['request']) == 'post-update') {
                    $this->requestFrom = $_GET['request'];

                } else {
                    $this->requestFrom = $_POST['requestFromAddPost'];

                }

                $this->postTitleValidation = new titleValidation();
                echo $this->titleValidation = $this->postTitleValidation->validation($this->requestFrom);
                $this->isTitleValid = $this->postTitleValidation->insertionError();

                $this->postDescriptionValidation = new descriptionValidation();
                echo $this->descriptionValidation = $this->postDescriptionValidation->validation($this->requestFrom);
                echo $this->isDescriptionValid = $this->postDescriptionValidation->insertionError();

                if ($this->isTitleValid && $this->isDescriptionValid == 1) {
                    $this->imageIsSetIfOtherValidationAreTrue = 1;
                }


                $this->imageValidation = new imageValidation();
                $this->postImage = $this->imageValidation->image($this->imageIsSetIfOtherValidationAreTrue, $this->requestFrom);
                echo $this->isImageValid = $this->imageValidation->insertionError();
                if ($this->isTitleValid && $this->isDescriptionValid && $this->isImageValid == 1) {
                    if ($this->requestFrom == 'post-update') {
                        $id = $_GET['id'];
                        $updatPost = new updaePost();
                        $this->insert = $updatPost->update($id, $this->titleValidation, $this->descriptionValidation, $this->postImage);

                    } else {
                        $addPost = new addPost();
                        $this->insert = $addPost->insert($this->userId, $this->titleValidation, $this->descriptionValidation, $this->postImage);

                    }
                } else {
                    echo "Insertion aaa Failed";
                    if (isset($_GET['user']) == 'requst-from-user-post') {
                        $user = "requst-from-user-post";
                        $id = $_GET['id'];
                        $request = $_GET['request'];


                        header('Location: ../../index.php?postTitle=' . $this->titleValidation . '&descripation=' . $this->descriptionValidation . '&id=' . $id . '&user=' . $user . '&request=' . $request);
                    } else {
                        $this->showErrOnAddPostModel = "ValidationErr";
                        $_SESSION["redirectAddPostModel"] = $this->showErrOnAddPostModel;
                        header('Location: ../../index.php?postTitle=' . $this->titleValidation . '&descripation=' . $this->descriptionValidation);

                    }


                }
            } else {
                echo 'user are not login';
            }


        }


    }

    function delete()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_SESSION['user_id'])) {
                $this->userId = $_SESSION['user_id'];

                if (isset($_GET['request'])) {
                     $request = $_GET['request'];


                }

                if ($request == 'post-delete') {
                     $post_id = $_GET['id'];
                    $post_delete= new delete();
                    $post_delete->delete($post_id);


                }


            }else
            echo 'user are not login';
        }
    }
}