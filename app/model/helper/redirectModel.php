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

    function CRUDPost($id,$request)
    {

        if($request=="post-update"){


            echo " <script type=\"text/javascript\">
    $(window).load(function(){
        $(\"#update-post\").modal(\"show\");
    });
</script> ";


        }else
            if($request=="post-delete"){

                  echo " <script type=\"text/javascript\">
                $(window).load(function(){
                   $(\"#delete-post\").modal(\"show\");
                 });
                </script> ";
        }else
                if ($request=="likes"){

                    echo " <script type=\"text/javascript\">
                                 $(window).load(function(){
                                   $(\"#post-likes\").modal(\"show\");
                                      });
                        </script> ";

                }else
                    if ($request="post-read-more"){
                        echo " <script type=\"text/javascript\">
                        $(window).load(function(){
                        $(\"#post-readmore\").modal(\"show\");
                          });
                        </script> ";
                         }


    }

}