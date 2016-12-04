<div class="col-md-8 col-md-pull-4 left-content"> <!-- Start of left Content -->
    <!-- User Post -->
<?php

include  'app/model/classes/homePost.php';
$homePost= new homePost();
$user_post_page=0;
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////Show User Post Page////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_GET['user'])){
    $user_post_page=$_GET['user'];
}
if(isset($_SESSION['UserPost'])||$user_post_page==="requst-from-user-post"){
     $user_post=$homePost->userPost();
    while($row=mysqli_fetch_array($user_post, MYSQLI_ASSOC)){
        $user_id= $row['user_id'];
        $user= $homePost->auther($user_id);
        $user_data = mysqli_fetch_array($user);
        $user_first_name=$user_data['firstName'];
        $user_last_name=$user_data['lastName'];
        $user_name=$user_first_name ." ".$user_last_name;
?>

    <div class="col-md-12 post">
        <div class="col-md-4 post-img">
            <img src="public/img/post/<?php echo $row['postImage'];?>" class="img-responsive" style="height: 150px" width="300" alt="Post Image" >
            <div class="col-md-12 user-name"> <p><?php echo $user_name ?></p></div>
        </div>
        <div class="col-md-8 post-content">

            <h3 style="height: 25px;overflow: hidden; "><?php echo $row['title'] ?></h3>
            <p style="height: 125px;overflow: hidden">   <?php echo $row['description']; ?></p>
            <div class="col-md-12 post-btn " >
                <a type="button" name="read-more"  class="btn btn-default " style="margin-right: 45px"  href="index.php?id=<?php echo $row['id'];echo "&request=post-readmore&user=requst-from-user-post"; ?>">Read More</a>
                <a type="button" name="likes"  class="btn btn-default views" style="margin-right: 45px ;margin-left: 12px"  href="index.php?id=<?php echo $row['id'];echo "&request=post-likes&user=requst-from-user-post"; ?>">Likes</a>
                <a type="button" name="update-post"  class="btn btn-default views" style="margin-right: 45px;margin-left: 12px"  href="index.php?id=<?php echo $row['id'];echo "&request=post-update&user=requst-from-user-post"; ?>" >Update</a>
                <a type="button" name="delete-post"  class="btn btn-default pull-right" style="margin-right: 20px"  href="index.php?id=<?php echo $row['id'];echo "&request=post-delete&user=requst-from-user-post"; ?>" >Delete</a>
                </div>

        </div>

    </div><!-- User Post End --><!-- User Post -->


   <?php  } unset($_SESSION['UserPost']); } else{

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////Show Home Post Page////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
$posts=$homePost->Post();
while($row = mysqli_fetch_array($posts, MYSQLI_ASSOC)) {
    $user_id_of_post= $row['user_id'];
$user= $homePost->auther($user_id_of_post);
$user_data = mysqli_fetch_array($user);
$user_first_name=$user_data['firstName'];
$user_last_name=$user_data['lastName'];
$user_name=$user_first_name ." ".$user_last_name;

?>
    <div class="col-md-12 post">
        <div class="col-md-4 post-img">
            <img src="public/img/post/<?php echo $row['postImage'];?>" class="img-responsive" style="height: 150px" width="300" alt="Post Image" >
            <div class="col-md-12 user-name"> <p><?php echo $user_name ?></p></div>
        </div>
        <div class="col-md-8 post-content">
            <?php   $user_post_id=$row['id']; ?>

            <h3 style="height: 25px;overflow: hidden; "><?php echo $row['title'] ?></h3>
            <p style="height: 125px;overflow: hidden">   <?php echo $row['description']; ?></p>
            <div class="col-md-12 post-btn">
                <?php if(isset($_SESSION['roleIsStudent'])){?>

                    <a type="button" name="read-more"  class="btn btn-default " style="margin-right: 45px"  href="index.php?id=<?php echo $row['id'];echo "&request=post-readmore&user=requst-from-home-post"; ?>">Read More</a>
                    <a type="button" name="read-more"  class="btn btn-default " style="margin-right: 50px"  href="index.php?id=<?php echo $row['id'];echo "&request=post-readmore&user=requst-from-home-post"; ?>">comment</a>
                    <a type="button" name="read-more"  class="btn btn-default " style="margin-right: 50px"  href="index.php?id=<?php echo $row['id'];echo "&request=post-readmore&user=requst-from-home-post"; ?>">Views</a>
                    <a type="button" name="read-more"  class="btn btn-default " style="margin-right: 0px"  href="index.php?id=<?php echo $row['id'];echo "&request=post-readmore&user=requst-from-home-post"; ?>">Likes</a>

                <?php } else if(isset($_SESSION['roleIsAdmin'])){?>
                    <a type="button" name="read-more"  class="btn btn-default " style="margin-right: 45px"  href="index.php?id=<?php echo $row['id'];echo "&request=post-readmore&user=requst-from-home-post"; ?>">Read More</a>
                    <a type="button" name="delete-post"  class="btn btn-default pull-right" style="margin-right: 20px"  href="index.php?id=<?php echo $row['id'];echo "&request=post-delete&user=requst-from-home-post"; ?>" >Delete</a>
                    <a type="button" name="read-more"  class="btn btn-default " style="margin-right: 34px"  href="index.php?id=<?php echo $row['id'];echo "&request=post-readmore&user=requst-from-home-post"; ?>">Comment</a>
                     <?php   if($_SESSION['user_id']==$user_id_of_post){ ?>
                        <a type="button" name="update-post"  class="btn btn-default views" style="margin-right: 45px;margin-left: 12px"  href="index.php?id=<?php echo $row['id'];echo "&request=post-update&user=requst-from-home-post"; ?>" >Update</a>

                    <?php } else { ?>
                        <a type="button" name="read-more"  class="btn btn-default " style="margin-right: 45px"  href="index.php?id=<?php echo $row['id'];echo "&request=post-readmore&user=requst-from-home-post"; ?>">Likes</a>


                    <?php } }  else if(isset($_SESSION['roleIsAuther'])){

                    if($_SESSION['user_id']==$user_id_of_post){


                    ?>
                        <a type="button" name="read-more"  class="btn btn-default " style="margin-right: 45px"  href="index.php?id=<?php echo $row['id'];echo "&request=post-readmore&user=requst-from-home-post"; ?>">Read More</a>
                        <a type="button" name="likes"  class="btn btn-default views" style="margin-right: 45px ;margin-left: 12px"  href="index.php?id=<?php echo $row['id'];echo "&request=post-likes&user=requst-from-home-post"; ?>">Likes</a>
                        <a type="button" name="update-post"  class="btn btn-default views" style="margin-right: 45px;margin-left: 12px"  href="index.php?id=<?php echo $row['id'];echo "&request=post-update&user=requst-from-home-post"; ?>" >Update</a>
                        <a type="button" name="delete-post"  class="btn btn-default pull-right" style="margin-right: 20px"  href="index.php?id=<?php echo $row['id'];echo "&request=post-delete&user=requst-from-home-post"; ?>" >Delete</a>

                    <?php }else {?>
                        <a type="button" name="read-more"  class="btn btn-default " style="margin-right: 45px"  href="index.php?id=<?php echo $row['id'];echo "&request=post-readmore&user=requst-from-home-post"; ?>">Read More</a>
                        <a type="button" name="read-more"  class="btn btn-default " style="margin-right: 50px"  href="index.php?id=<?php echo $row['id'];echo "&request=post-readmore&user=requst-from-user-post"; ?>">Comment</a>
                        <a type="button" name="read-more"  class="btn btn-default " style="margin-right: 50px"  href="index.php?id=<?php echo $row['id'];echo "&request=post-readmore&user=requst-from-user-post"; ?>">Vievs</a>
                        <a type="button" name="read-more"  class="btn btn-default " style="margin-right: 0px"  href="index.php?id=<?php echo $row['id'];echo "&request=post-readmore&user=requst-from-user-post"; ?>">Likes</a>

                    <?php  } } ?>
        </div>
        </div>

    </div><!-- User Post End --><!-- User Post -->


  <?php  } } ?>
</div><!-- End of Left Content -->

</div><!-- End of Main container -->
