<?php

/**
 * Created by PhpStorm.
 * User: Jawad Ahmad Attari
 * Date: 11/18/2016
 * Time: 9:01 AM
 */
class redirectModel
{



    function signUp()
    {
        if(isset($_SESSION["signUpRedirectModel"])){


            echo " <script type=\"text/javascript\">
    $(window).load(function(){
        $(\"#sign-up\").modal(\"show\");
    });
</script> ";
           // unset($_SESSION["showErrOnModel"]);
            unset($_SESSION["signUpRedirectModel"]);
        }

    }


    function addPost()
    {
        if(isset($_SESSION["redirectAddPostModel"])){


            echo " <script type=\"text/javascript\">
    $(window).load(function(){
        $(\"#add-post\").modal(\"show\");
    });
</script> ";
         //   unset($_SESSION["showErrOnModel"]);
            unset($_SESSION["redirectAddPostModel"]);
        }

    }

}