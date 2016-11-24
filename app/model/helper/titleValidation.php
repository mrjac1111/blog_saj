<?php

/**
 * Created by PhpStorm.
 * User: Jawad Ahmad Attari
 * Date: 11/24/2016
 * Time: 8:42 AM
 */
class titleValidation
{
    private $title;
    private $titleErr;
    private $insertion=1;

    function __construct()
    {
        $this->testInput=new testInputFields();

    }

    function validation(){
        if(empty($_POST['title'])){
            echo $this->titleErr = "Post Title is required";
            $_SESSION["titleErr"] = $this->titleErr;
            $this->insertion=0;
        }else{
            $this->title = $this->testInput->test_input($_POST["title"]);

            if(isset($_SESSION['titleErr']))
                unset ($_SESSION['titleErr']);
        }
        return $this->title;



    }
    function  insertionError(){
        return $this->insertion;
    }
}