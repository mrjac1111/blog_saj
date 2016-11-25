<?php

//include '../../../config/Connection.php';
class signUP{

    protected $connection;
    private $signUpSuccessfully;

    function __construct()
    {
        $conn = new Connection();
        $this->connection = $conn->getConnection();
    }

    function insert( $firstName,$lastName,$email,$password,$profileImage,$gender){

if(!isset($_SESSION["SignUpSuccessfully"])){
        $sql = "INSERT INTO user (firstName,lastName,email, password, profileImage,gender) VALUES ('$firstName', '$lastName','$email','$password', '$profileImage','$gender')";
        if ($this->connection->query($sql) === TRUE) {
             echo $this->signUpSuccessfully="sign Up Successfully";
            $_SESSION["SignUpSuccessfully"]=$this->signUpSuccessfully;
            $_SESSION["signUpRedirectModel"]=$this->signUpSuccessfully;
              header('Location: ../../index.php');

           }else {
            echo "Error: " . $sql . "<br>" . $this->connection->error;


        }

        }else
            {
                $this->signUpSuccessfully="You Already Sign Up";
                $_SESSION["SignUpSuccessfully"]=$this->signUpSuccessfully;
                $_SESSION["signUpRedirectModel"]=$this->signUpSuccessfully;
                header('Location: ../../index.php');

            }

        $this->connection->close();

    }

}


?>