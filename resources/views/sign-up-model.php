
<!--  Sign Up Modal -->
<div class="modal fade" id="sign-up" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title comment-title"><i class="glyphicon glyphicon-globe"></i> Sign Up It's Free</h4>
            </div>
            <div class="modal-body sign-up-model">
                <form action="http/controller/signUpController.php" method="post" class="form" role="form" enctype="multipart/form-data">

                    <div class="row sign-up-fields-margin">
                        <div class="col-xs-6 col-md-6">
                            <input class="form-control" id="firstName" name="first-name" placeholder="First Name" type="text" value="<?php if(isset($_GET['firstName'])){echo $_GET['firstName'];} ?>"autofocus />
                            <p class="sign-up-err"><?php if(isset($_SESSION["firstNameErr"])){echo $_SESSION["firstNameErr"];unset($_SESSION["firstNameErr"]);} ?></p>

                        </div>
                        <div class="col-xs-6 col-md-6">
                            <input class="form-control" name="last-name" placeholder="Last Name" type="text" value="<?php if(isset($_GET['lastName'])){echo $_GET['lastName'];} ?>" />
                            <p class="sign-up-err"><?php if(isset($_SESSION["lastNameErr"])){echo $_SESSION["lastNameErr"];unset($_SESSION["lastNameErr"]);}?></p>
                        </div>

                    </div>

                    <input class="form-control " name="email" placeholder="Your Email" type="email" value="<?php if(isset($_GET['email'])){echo $_GET['email'];} ?>"/>

                    <p class="sign-up-err " style="margin-bottom: 20px"><?php if(isset($_SESSION["emailErr"])){echo $_SESSION["emailErr"];unset($_SESSION["emailErr"]);}?></p>
                    <div class="row sign-up-fields-margin">
                        <div class="col-xs-6 col-md-6"  >
                            <input class="form-control" id="password" name="password" placeholder="Password" type="password"
                                   autofocus />
                        </div>
                        <div class="col-xs-6 col-md-6">
                            <input class="form-control" name="confirm-password" placeholder="confirm-Password" type="password"  />
                        </div>
                        <div class="col-xs-12 col-md-12">
                        <p class="sign-up-err"><?php if(isset($_SESSION["passwordErr"])){echo $_SESSION["passwordErr"];unset($_SESSION["passwordErr"]);}?></p>
                        </div>
                        </div>
                    <div class="img-browse" style="margin-bottom: 40px">
                        <!-- image-preview-filename input [CUT FROM HERE]-->
                        <div class="input-group image-preview">
                            <input type="text" class="form-control image-preview-filename" placeholder="Select Profile Image"value="<?php if(isset($_GET['profileImage'])){echo $_GET['profileImage'];} ?>" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
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
                        <p class="sign-up-err"><?php if(isset($_SESSION["profileImageErr"])){echo $_SESSION["profileImageErr"];unset($_SESSION["profileImageErr"]);}?></p>

                    </div>
                    <label class="radio-inline sign-up-fields-margin ">
                        <input type="radio" name="sex" id="inlineCheckbox1"<?php if (isset($_GET['gender'])&& $_GET['gender']=="male") echo "checked";?>
                               value="male" />
                        Male
                    </label>

                    <label class="radio-inline sign-up-fields-margin">
                        <input type="radio" name="sex" id="inlineCheckbox2" <?php if (isset($_GET['gender'])&& $_GET['gender']=="female") echo "checked";?> value="female" />
                        Female
                    </label>
                    <label class="radio-inline sign-up-fields-margin">
                        <p class="sign-up-err"><?php if(isset($_SESSION["sexErr"])){echo $_SESSION["sexErr"];unset($_SESSION["sexErr"]);}?></p>

                    </label>

                    <br />
                    <br />
                    <button class="btn btn-lg btn-primary btn-block sign-up-fields-margin sign-up-btn" type="submit">
                        Sign up</button>
                    <p class="sign-up-successfully"><?php if(isset($_SESSION["SignUpSuccessfully"])){echo $_SESSION["SignUpSuccessfully" ];}?></p>

                </form>



            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-default comment-close-btn" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- End Of Sign_up -->




