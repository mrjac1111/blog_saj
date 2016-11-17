<?php

/**
 * Created by PhpStorm.
 * User: Jawad Ahmad Attari
 * Date: 11/9/2016
 * Time: 5:03 AM
 */

class signUpFail
{
function __construct()
{
    if(isset($_SESSION["showErrOnModel"])){


        echo " <script type=\"text/javascript\">
    $(window).load(function(){
        $(\"#sign-up\").modal(\"show\");
    });
</script> ";
        unset($_SESSION["showErrOnModel"]);
    }

}
}