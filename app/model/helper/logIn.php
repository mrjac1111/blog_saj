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
             $qry = "SELECT * from signup WHERE email='$email' AND  password='$password'";
               $row= mysqli_query($this->connection,$qry);
            print_r($row);
           $is_user_exist= mysqli_num_rows($row);
            if($is_user_exist){
                //print_r($user);
                $user_data=mysqli_fetch_array($row);
                 $user_id=$user_data['id'];
                 $user_first_name=$user_data['firstName'];
                 $user_last_name=$user_data['lastName'];
                 $user_profile_image=$user_data['profileImage'];
                 $user_gender=$user_data['gender'];

                $_SESSION['user_id']=$user_id;
                $_SESSION['user_first_name']=$user_first_name;
                $_SESSION['user_last_name']=$user_last_name;
                $_SESSION['user_profile_image']=$user_profile_image;
                $_SESSION['user_gender']=$user_gender;
               echo  $_SESSION['log_in_message']='loginSuccessaly';




            }else{
              echo  $_SESSION['log_in_message']='loginIsNotSuccessaly';
            }
            die;
            /*if ($this->connection->query($qry) ==0) {


                echo $this->logInUpSuccessfully="log In Successfully";
//                $_SESSION["logInSuccessfully"]=$this->logInUpSuccessfully;
//                $_SESSION["redirectModel"]=$this->logInUpSuccessfully;
//                header('Location: ../../index.php');
                  echo '  logInUpSuccessfully';

            }else {
                echo 'yes';
               // echo "Error: " . $qry . "<br>" . $this->connection->error;


            }*/

        }
    }

}