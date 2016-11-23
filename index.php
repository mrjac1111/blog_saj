<?php if(isset($_SESSION['redirectModel'])){
    echo 'redirect is set';
}//session_start(); ?>

<?php include 'resources/views/start-of-views.php'; ?>
<?php include 'resources/views/header.php'; ?>
<?php include 'resources/views/header-social-bar.php'; ?>
<?php include 'resources/views/post-page-login.php'; ?>
<?php include 'resources/views/post-page-catagery.php'; ?>
<?php include 'resources/views/post-page.php'; ?>
<?php include 'resources/views/post-page-pagination.php'; ?>
<?php include 'resources/views/footer.php'; ?>
<?php include 'resources/views/comment-model.php'; ?>
<?php include 'resources/views/views-model.php'; ?>
<?php include 'resources/views/likes-model.php'; ?>
<?php include 'resources/views/sign-up-model.php'; ?>
<?php include 'resources/views/end-of-views.php'; ?>

<!-- if sign up fail  -->

<?php include 'app/model/helper/signUpModelRedirect.php';
    $signUPFail= new signUpModelRedirect();
   // unset($_SESSION['redirectModel']);

?>
<!-- sign up fail end -->



