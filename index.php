<?//php session_start(); ?>

<?php include 'views/start-of-views.php'; ?>
<?php include 'views/header.php'; ?>
<?php include 'views/header-social-bar.php'; ?>
<?php include 'views/post-page-login.php'; ?>
<?php include 'views/post-page-catagery.php'; ?>
<?php include 'views/post-page.php'; ?>
<?php include 'views/post-page-pagination.php'; ?>
<?php include 'views/footer.php'; ?>
<?php include 'views/comment-model.php'; ?>
<?php include 'views/views-model.php'; ?>
<?php include 'views/likes-model.php'; ?>
<?php include 'views/sign-up-model.php'; ?>
<?php include 'views/end-of-views.php'; ?>

<!-- if sign up fail  -->

<?php include 'lib/signUpFail.php';
    $signUPFail= new signUpFail();
?>
<!-- sign up fail end -->



