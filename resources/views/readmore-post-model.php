
<!--  delete Modal -->
<div class="modal fade" id="post-readmore" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <?php
            $post= new homePost();
            $fetch_post=$post->fetchPost($_GET['id']);
            while($current_post = mysqli_fetch_array($fetch_post, MYSQLI_ASSOC)) {
                $current_post_title= $current_post['title'];
                $current_post_description= $current_post['description'];
                $current_post_image=$current_post['postImage'];
            }
            ?>

            <div class="modal-header" style="border-width: 10px">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <?php if($_SERVER['REQUEST_METHOD']=='POST') {echo $_POST['update-post'];}?>

                <h4 class="modal-title comment-title"><i class="glyphicon glyphicon-book"></i> Read Post</h4>
            </div>
            <div class="modal-body sign-up-model" >

                    <img src="public/img/post/<?php echo $current_post_image;?>" class="img-responsive" style="height: 150px; width: 100%;"  alt="Post Image" >
                <h3 style="height: 25px;overflow: hidden; "><?php echo $current_post_title;?></h3>
                <p style="height: auto">   <?php echo $current_post_description; ?></p>



            </div>
            <div class="modal-footer" style="border-width: 10px">

                <button type="button" class="btn btn-default comment-close-btn" data-dismiss="modal">Close</button>
            </div>

        </div>

    </div>
</div>
<!-- End Of Sign_up -->




