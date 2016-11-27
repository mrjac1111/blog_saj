<div class="col-md-8 col-md-pull-4 left-content"> <!-- Start of left Content -->
    <!-- User Post -->
<?php

include  'app/model/classes/homePost.php';
$homePost= new homePost();
if(isset($_SESSION['UserPost'])){
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
            <h3 style="height: 35px"><?php echo $row['title'] ?></h3>
            <p style="height: 85px;overflow: hidden">   <?php echo $row['description']; ?></p>
            <div class="col-md-12 post-btn">
                <button type="button" class="btn btn-default continu-reading">Read More</button>

                <button type="button" class="btn btn-default comment" data-toggle="modal" data-target="#comment">Edit</button>
                <button type="button" class="btn btn-default views" data-toggle="modal" data-target="#views">Delete</button>
                <button type="button" class="btn btn-default likes" data-toggle="modal" data-target="#likes">Update</button>
            </div>
        </div>

    </div><!-- User Post End --><!-- User Post -->


   <?php  } unset($_SESSION['UserPost']); } else{
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
            <h3 style="height: 35px"><?php echo $row['title'] ?></h3>
            <p style="height: 85px;overflow: hidden">   <?php echo $row['description']; ?></p>
            <div class="col-md-12 post-btn">
                <?php if(isset($_SESSION['roleIsStudent'])){?>
                    <button type="button" class="btn btn-default continu-reading">Read More</button>
                    <button type="button" class="btn btn-default comment" data-toggle="modal" data-target="#comment">Comment</button>
                    <button type="button" class="btn btn-default views" data-toggle="modal" data-target="#views">200 Views</button>
                    <button type="button" class="btn btn-default likes" data-toggle="modal" data-target="#likes">100 Likes</button>

                <?php } else if(isset($_SESSION['roleIsAdmin'])){?>
                    <button type="button" class="btn btn-default continu-reading">Read More</button>

                <button type="button" class="btn btn-default views" data-toggle="modal" data-target="#views">Delete</button>
                    <button type="button" class="btn btn-default comment" data-toggle="modal" data-target="#comment">Comment</button>
                     <?php   if($_SESSION['user_id']==$user_id_of_post){ ?>
                        <button type="button" class="btn btn-default likes" data-toggle="modal" data-target="#likes">Edit</button>

                    <?php } else { ?>
                    <button type="button" class="btn btn-default likes" data-toggle="modal" data-target="#likes">100 Likes</button>

                <?php } }  else if(isset($_SESSION['roleIsAuther'])){

                    if($_SESSION['user_id']==$user_id_of_post){


                    ?>
        <button type="button" class="btn btn-default continu-reading">Read More</button>

        <button type="button" class="btn btn-default comment" data-toggle="modal" data-target="#comment">Edit</button>
        <button type="button" class="btn btn-default views" data-toggle="modal" data-target="#views">Delete</button>
        <button type="button" class="btn btn-default likes" data-toggle="modal" data-target="#likes">Update</button>

        <?php }else {?>
                        <button type="button" class="btn btn-default continu-reading">Read More</button>
                        <button type="button" class="btn btn-default comment" data-toggle="modal" data-target="#comment">Comment</button>
                        <button type="button" class="btn btn-default views" data-toggle="modal" data-target="#views">200 Views</button>
                        <button type="button" class="btn btn-default likes" data-toggle="modal" data-target="#likes">100 Likes</button>

                    <?php  } } ?>
        </div>
        </div>

    </div><!-- User Post End --><!-- User Post -->


  <?php  } } ?>
</div><!-- End of Left Content -->

</div><!-- End of Main container -->
