<?php
include 'config/Connection.php';

class homePost
{
    function __construct()
    {
        $conn = new Connection();
        $this->connection = $conn->getConnection();

    }

    function Post(){
        $sql="SELECT * FROM post";
        $result=mysqli_query($this->connection,$sql);

// Fetch all
        $fetch_post=mysqli_fetch_assoc($result);
        /*for($i=0;$i<=$count;$i++){
            echo $fetch_post['id'];
            echo $fetch_post['title'];
            echo $fetch_post['description'];
            echo $fetch_post['postImage'];
        }*/
        mysqli_close($this->connection);
        return $fetch_post;
    }
}