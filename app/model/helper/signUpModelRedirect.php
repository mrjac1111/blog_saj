<?php

/**
 * Created by PhpStorm.
 * User: Jawad Ahmad Attari
 * Date: 11/18/2016
 * Time: 9:01 AM
 */
class signUpModelRedirect
{

    function __construct()
    {
        if(isset($_SESSION["redirectModel"])){


            echo " <script type=\"text/javascript\">
    $(window).load(function(){
        $(\"#sign-up\").modal(\"show\");
    });
</script> ";
            unset($_SESSION["showErrOnModel"]);
            unset($_SESSION["redirectModel"]);
        }

    }

}