<?php

/**
 * Created by PhpStorm.
 * User: EC-002
 * Date: 11/23/2016
 * Time: 12:42 PM
 */
class logOut
{

function userLogOut(){
    session_start();
    if(isset($_SESSION['log_in_message'])){unset($_SESSION['log_in_message']); }
    if(isset($_SESSION['user_id'])){unset($_SESSION['user_id']);echo '1';}
    if(isset($_SESSION['user_first_name'])){unset($_SESSION['user_first_name']);}
    if(isset($_SESSION['user_last_name'])){unset($_SESSION['user_last_name']);}
    if(isset($_SESSION['user_profile_image'])){unset($_SESSION['user_profile_image']);}
    header('Location: ../../index.php');

}
}