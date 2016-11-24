<?php

//include '../../../config/Connection.php';
class addPost{

    protected $connection;
    private $addPostSuccessfully;

    function __construct()
    {
        $conn = new Connection();
        $this->connection = $conn->getConnection();
    }

    function insert( $userId,$title,$description,$postImage){


            $sql = "INSERT INTO post (user_Id,title,description,postImage) VALUES ('$userId', '$title','$description','$postImage')";
            if ($this->connection->query($sql) === TRUE) {
                echo $this->addPostSuccessfully="Add Post Successfully";
                $_SESSION["AddPostSuccessfully"]=$this->addPostSuccessfully;
                $_SESSION["redirectAddPostModel"]=$this->addPostSuccessfully;
                header('Location: ../../index.php');

            }else {
                echo "Error: " . $sql . "<br>" . $this->connection->error;


            }


        $this->connection->close();

    }

}


?>