<?php


class testInputFields
{
    protected $data;
    function __construct()
    {
        $this->data="";
    }

    function test_input($data) {

        //  $this->validation();

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}