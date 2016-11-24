
<!--  Sign Up Modal -->
<div class="modal fade" id="add-post" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="border-width: 10px">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title comment-title"><i class="glyphicon glyphicon-edit"></i> Add Post</h4>
            </div>
            <div class="modal-body sign-up-model" >
                <form action="http/controller/addPostController.php" method="post" class="form" role="form" enctype="multipart/form-data">


                            <input type="hidden" name="requestFromAddPost" value="requestFromAddPost"/>

                            <div class="form-group">
                                <label style="color: #1995AD" for="title">Title <span class="require">*</span></label>
                                <input type="text" class="form-control" name="title" value="<?php if(isset($_GET['postTitle'])){echo $_GET['postTitle'];} ?>" />
                                <p class="sign-up-err"><?php if(isset($_SESSION["titleErr"])){echo $_SESSION["titleErr"];unset($_SESSION["titleErr"]);}?></p>

                            </div>
                    <div class="img-browse" style="margin-bottom: 20px;margin-top: 30px">
                        <!-- image-preview-filename input [CUT FROM HERE]-->
                        <div class="input-group image-preview">
                            <input type="text" class="form-control image-preview-filename" placeholder="Select Post Image"value="<?php if(isset($_GET['profileImage'])){echo $_GET['profileImage'];} ?>" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file"  accept="image/png, image/jpeg, image/gif" name="input-file-preview" /> <!-- rename it -->
                    </div>
                </span>
                        </div><!-- /input-group image-preview [TO HERE]-->
                        <p class="sign-up-err"><?php if(isset($_SESSION["postImageErr"])){echo $_SESSION["postImageErr"];unset($_SESSION["postImageErr"]);}?></p>

                    </div>


                    <div class="form-group">
                                <label style="color: #1995AD" for="description">Description</label>
                                <textarea rows="5" class="form-control" name="description" >
                                    <?php if(isset($_GET['descripation'])){echo $_GET['descripation'];} ?>
                                </textarea>
                        <p class="sign-up-err"><?php if(isset($_SESSION["descriptionErr"])){echo $_SESSION["descriptionErr"];unset($_SESSION["descriptionErr"]);}?></p>

                    </div>

                            <div class="form-group">
                                <p style="color: red"><span class="require">*</span> - required fields</p>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-lg btn-primary btn-block sign-up-fields-margin sign-up-btn" type="submit">
                                    Create</button>

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




