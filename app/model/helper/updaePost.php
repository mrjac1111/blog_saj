<?php

/**
 * Created by PhpStorm.
 * User: Jawad Ahmad Attari
 * Date: 11/28/2016
 * Time: 3:15 AM
 */
class updaePost
{
    private $connection;
    private $updatePostSuccessfully;
    private $title;
    private $description;


    function __construct()
    {
        $conn = new Connection();
        $this->connection = $conn->getConnection();
    }

    function update($id,$title,$description,$postImage){

        $this->title = mysqli_real_escape_string($this->connection,$title);
        $this->description = mysqli_real_escape_string($this->connection,$description);
        $sql = "UPDATE post SET title='$this->title',description='$this->description',postImage='$postImage' WHERE id=$id";

        if ($this->connection->query($sql) === TRUE) {
            echo $this->updatePostSuccessfully="Update Post Successfully";
            $_SESSION["AddPostSuccessfully"]=$this->updatePostSuccessfully;
            $_SESSION["redirectAddPostModel"]=$this->updatePostSuccessfully;
           $user=$_GET['user'];
            header("Location: ../../index.php?user=' .$user.");


        }else {
            echo "Error: " . $sql . "<br>" . $this->connection->error;


        }


        $this->connection->close();


    }
}