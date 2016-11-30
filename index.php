

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
<?php include 'resources/views/add-post-model.php'; ?>
<?php include 'resources/views/update-post-model.php'; ?>
<?php include 'resources/views/end-of-views.php'; ?>
<?php //include 'config/Connection.php'; ?>

<!-- if sign up fail  -->

<?php include 'app/model/helper/redirectModel.php';


    $request= new redirectModel();
    $signUpRedirct=$request->signUp(); //sign up fail its validation
    $addPostRedirct=$request->addPost(); // add post fail its validation
if(isset($_GET['id']))echo $_GET['id'];
    $PostRedirct=$request->CRUDPost(isset($_GET['id']),isset($_GET['request']));


?>
<!-- sign up fail end -->



