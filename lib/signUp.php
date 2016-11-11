<?php

include 'Connection.php';
class signUP{
    /*private $firstName;
    private $lastName;
    private $email;
    private $password;
    private $confirmPassword;

    */
    private $connection;
    private $signUpSuccessfully;

    function __construct()
    {
        $conn = new Connection();
        $this->connection = $conn->connectToDatabase();
    }

    function insert( $firstName,$lastName,$email,$password,$profileImage,$gender){

if(!isset($_SESSION["SignUpSuccessfully"])){
        $sql = "INSERT INTO signup (firstName,lastName,email, password, profileImage,gender) VALUES ('$firstName', '$lastName','$email','$password', '$profileImage','$gender')";
        if ($this->connection->query($sql) === TRUE) {
             $this->signUpSuccessfully="sign Up Successfully";
                $_SESSION["SignUpSuccessfully"]=$this->signUpSuccessfully;
               header('Location: ../views/sign_up.php');

           }else {
            echo "Error: " . $sql . "<br>" . $this->connection->error;


        }

        }else
            {
                $_SESSION["SignUpSuccessfully"]="You Already Sign Up";
                header('Location:../Index.php');
            }

        $this->connection->close();
        
    }

}


?>