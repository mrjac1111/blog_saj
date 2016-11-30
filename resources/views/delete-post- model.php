
<!--  delete Modal -->
<div class="modal fade" id="delete-post" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="border-width: 10px">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <?php if($_SERVER['REQUEST_METHOD']=='POST') {echo $_POST['update-post'];}?>

                <h4 class="modal-title comment-title"><i class="glyphicon glyphicon-erase"></i> Delete Post</h4>
            </div>
            <div class="modal-body sign-up-model" >
                <?php
                $user="home";
                if(isset($_GET['user'])){
                    $user=$_GET['user'];
                }
                ?>

                <form action="http/controller/deletePostController.php?id=<?php echo $_GET['id']; echo "&request="; echo $_GET['request'];echo "&user=";echo $user;?>" method="post" class="form" role="form" enctype="multipart/form-data">


                    <h4 class="modal-title comment-title"><i class="glyphicon glyphicon-remove"></i> Are you shure you want to remove this post
                    </h4>



                    <div class="form-group" style="padding-left: 30%;padding-top: 5%">

                        <button type="submit" class="btn btn-lg btn-primary  sign-up-fields-margin sign-up-btn " style="background-color: red;margin-right: 10%">
                            Yes</button>
                        <button class="btn btn-lg btn-primary  sign-up-fields-margin sign-up-btn"   data-dismiss="modal">
                            No</button>

                    </div>
                    <p class="sign-up-successfully"><?php if(isset($_SESSION["AddPostSuccessfully"])){echo $_SESSION["AddPostSuccessfully" ];unset($_SESSION["AddPostSuccessfully" ]);}?></p>



                </form>



            </div>
            <div class="modal-footer" style="border-width: 10px">

                <button type="button" class="btn btn-default comment-close-btn" data-dismiss="modal">Close</button>
            </div>

        </div>

    </div>
</div>
<!-- End Of Sign_up -->




