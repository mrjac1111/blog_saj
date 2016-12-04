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
    if(isset($_SESSION['user_email'])){unset($_SESSION['user_email']);}
    if(isset($_SESSION['role'])){unset($_SESSION['role']);}

    if(isset($_SESSION['roleIsStudent'])){
        unset($_SESSION['roleIsStudent']);
    }else
        if(isset($_SESSION['roleIsAuther'])){
            unset($_SESSION['roleIsAuther']);
        }else
            if(isset($_SESSION['roleIsAdmin'])){
                unset($_SESSION['roleIsAdmin']);
            }
    header('Location: ../../index.php');

}
}