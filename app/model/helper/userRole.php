<?php
include '../../config/Connection.php';
class userRole
{

    private $connection;
    function __construct()
    {
        $conn = new Connection();
        $this->connection = $conn->getConnection();
    }

    function insert($role){
        echo 'role insert Started';
        echo $role;

                $sql="SELECT id FROM `role` WHERE role='$role' ";
             $fetch=mysqli_query($this->connection,$sql);
            $row=mysqli_fetch_array($fetch);
         //   print_r($row);


            $role_id=$row['id'];
            $user_id=$_SESSION['$lastInsertedId'];
        $sql = "INSERT INTO user_role (user_id,user_role_id) VALUES ('$user_id', '$role_id')";
        if ($this->connection->query($sql) === TRUE) {
            unset($_SESSION['$lastInsertedId']);
            header('Location: ../../index.php');

        }else {
            echo "Error: " . $sql . "<br>" . $this->connection->error;


        }








    }






}

