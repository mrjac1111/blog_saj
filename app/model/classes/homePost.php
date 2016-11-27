<?php
include 'config/Connection.php';
class homePost
{
    private $connection;

    function __construct()
    {
        $conn = new Connection();
        $this->connection = $conn->getConnection();

    }

    function Post()
    {
        $sql = "SELECT * FROM post ORDER BY id DESC";
        $result = mysqli_query($this->connection, $sql);


        return $result;

    }
    function auther($user_id){
         $qry="SELECT firstName,lastName FROM user WHERE id='$user_id'";
        $user= mysqli_query($this->connection,$qry);

        return $user;


    }

    function userPost(){
         $user_id=$_SESSION['user_id'];
       $sql="SELECT * FROM post WHERE user_id='$user_id'ORDER BY id DESC";
            $user_post=mysqli_query($this->connection,$sql);
        return $user_post;

    }

}
