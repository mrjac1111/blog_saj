<!-- Start of Main container -->
<div class="container">
    <!-- Start of right content-->
    <div class="col-md-4 col-md-push-8 right-content">
        <!-- Start of Login Form  -->
        <?php 
        if(!isset($_SESSION['log_in_message'])){
?>

        <form class="col-md-12 log-in " action="http/controller/logInController.php" method="post">
            <div class="col-md-12 log-in-title"> <h5>Login</h5></div>
            <div class="col-md-9 login-in-input-field">
                <input type="text" class="form-control " name="email" placeholder="E-Mail">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <input type="hidden" name="requestFromLogin" value="requestFromLogin">
                <input type="hidden" name="requestFromSignUp">
            </div>
            <div class="col-md-3 log-in-btn-div">
                <button type="submit" class="btn btn-info log-in-btn"><span class="glyphicon glyphicon-log-in"></span></button>

            </div>
        </form>
            <p class="sign-up-err"><?php if(isset($_SESSION["loginEmailErr"])){echo $_SESSION["loginEmailErr"];unset($_SESSION["loginEmailErr"]);} ?></p>
            <p class="sign-up-err"><?php if(isset($_SESSION["loginPasswordErr"])){echo $_SESSION["loginPasswordErr"];unset($_SESSION["loginPasswordErr"]);} ?></p>
            <p class="sign-up-err"><?php if(isset($_SESSION["log_in_error_message"])){echo $_SESSION["log_in_error_message"];unset($_SESSION["log_in_error_message"]);} ?></p>

            <!-- End of Login Form -->

        <?php } ?>