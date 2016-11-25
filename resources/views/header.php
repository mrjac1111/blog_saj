
<div class="container">
    <nav class="navbar navbar-inverse header ">
        <div class="container-fluid ">
            <div class="navbar-header ">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="#"> <img class="img-responsive" src="public/img/saj-blog-logo.png" alt="LOGO"> </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">

                <ul class="nav navbar-nav navbar-right  ">
                    <li class="active button-active"><a href="#">Home</a></li>
                    <?php
                    if(isset($_SESSION['log_in_message'])){ ?>
                        <li><a class="menu-link" data-toggle="modal" data-target="#add-post">Add Post</a></li>
                    <?php }?>
                    <li><a class="menu-link" href="#">Contect Us</a></li>
                    <?php
                    if(!isset($_SESSION['log_in_message'])){ ?>
                    <li><a class="menu-link"  data-toggle="modal" data-target="#sign-up"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                   <?php }else{ ?>
                        <li><a class="menu-link"href="http/controller/logOutController.php" ><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
                    <?php   } ?>

                    <?php      if(isset($_SESSION['user_profile_image'])){
                        $user_profile=$_SESSION['user_profile_image'];
                        $user_name=$_SESSION['user_first_name']." ".$_SESSION['user_last_name']
                        ?>


                            <li><a href="#"><img src="public/img/profile/<?php echo $user_profile?>" class="img-circle" width="35" height="35" alt="Cinque Terre" ></a></li>

                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</div>