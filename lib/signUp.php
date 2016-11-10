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
        $this->connection = $conn->getConnection();
    }

    function insert( $firstName,$lastName,$email,$password,$profileImage,$gender){
/*
        $this->firstName=$_POST["first-name"];
        $this->lastName=$_POST["last-name"];
        $this->email=$_POST["email"];
        $this->password=$_POST["password"];
        $this->confirmPassword=$_POST["confirm-password"];


        echo $this->firstName;
        echo $this->lastName;
        echo $this->email;
        echo $this->password;
        echo $this->confirmPassword;
*/
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