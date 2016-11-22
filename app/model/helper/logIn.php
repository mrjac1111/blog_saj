<?php

class logIn
{
    private $logInSuccessfully;
    private $connectionForLogIn;
    function __construct()
    {
        $conn = new Connection();
        $this->connection = $conn->getConnection();
    }

    function userLogIn($email,$password){

        if(!isset($_SESSION["logInSuccessfully"])){
             $qry = "SELECT id from signup WHERE email='$email' AND  password='$password'";
               $row= mysqli_query($this->connection,$qry);
           $user= mysqli_num_rows($row);
            if($user){
                print_r($user);
            }else{
                echo 'no';
            }
            die;
            if ($this->connection->query($qry) ==0) {


                echo $this->logInUpSuccessfully="log In Successfully";
//                $_SESSION["logInSuccessfully"]=$this->logInUpSuccessfully;
//                $_SESSION["redirectModel"]=$this->logInUpSuccessfully;
//                header('Location: ../../index.php');
                  echo '  logInUpSuccessfully';

            }else {
                echo 'yes';
               // echo "Error: " . $qry . "<br>" . $this->connection->error;


            }

        }
    }

}