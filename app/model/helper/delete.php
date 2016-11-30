<?php

/**
 * Created by PhpStorm.
 * User: Jawad Ahmad Attari
 * Date: 11/28/2016
 * Time: 3:15 AM
 */
class delete
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

    function delete($id){
        $sql = "DELETE FROM post WHERE id='$id'";if (mysqli_query($this->connection, $sql)) {
            echo "Record deleted successfully";
            $user=$_GET['user'];
            header("Location: ../../index.php?user=$user");


        } else {
            echo "Error deleting record: " . mysqli_error($this->connection);
        }

        mysqli_close($this->connection);



    }
}