<?php

//include '../../../config/Connection.php';
class addPost{

    private $connection;
    private $addPostSuccessfully;
    private $userId;
    private $tital;
    private $postImage;
    private $description;


    function __construct()
    {
        $conn = new Connection();
        $this->connection = $conn->getConnection();
    }

    function insert( $userId,$title,$description,$postImage){
            $this->tital = mysqli_real_escape_string($this->connection,$title);
            $this->description = mysqli_real_escape_string($this->connection,$description);

            $sql = "INSERT INTO post (user_Id,title,description,postImage) VALUES ('$userId', '$this->title','$this->description','$postImage')";
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