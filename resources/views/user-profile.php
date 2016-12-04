<?php
$user_post_page=0;
if(isset($_GET['user'])){
    $user_post_page=$_GET['user'];
}
if(isset($_SESSION['UserPost'])||$user_post_page==="requst-from-user-post") {

?>
    <div class="container">


    <div class="col-lg-12 col-sm-12">
        <div class="card hovercard">
            <div class="card-background">
                <img class="card-bkimg" alt="" src="public/img/profile/<?php echo $_SESSION['user_profile_image'];?>">
                <!-- http://lorempixel.com/850/280/people/9/ -->
            </div>
            <div class="useravatar">
                <img alt="" src="public/img/profile/<?php echo $_SESSION['user_profile_image'];?>">
            </div>
            <div class="card-info"> <span class="card-title">
                    <?php
                    echo $_SESSION['user_first_name'];
                    echo $_SESSION['user_last_name'];?>
        </span>

            </div>
        </div>
        <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    <div class="hidden-xs">Profile</div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                    <div class="hidden-xs">Favorites</div>
                </button>
            </div>
            <div class="btn-group" role="group">
                <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    <div class="hidden-xs">Following</div>
                </button>
            </div>
        </div>

        <div class="well col-md-12">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab1">


                    <div class="col-md-12">
                        <div class="col-md-6">

                        <div class="table-responsive responsiv-table">
                            <table class="table bio-table">
                                <tbody>
                                <tr>
                                    <td>Firstname</td>
                                    <td>: <?php echo $_SESSION['user_first_name']; ?></td>
                                </tr>
                                <tr>
                                    <td>Lastname</td>
                                    <td>:  <?php echo $_SESSION['user_last_name']; ?></td>
                                </tr>
                                <tr>
                                    <td>Birthday</td>
                                    <td>: 2 july 1980</td>
                                </tr>
                                <tr>
                                    <td>Contury</td>
                                    <td>: pakistan</td>
                                </tr>
                                <tr>
                                    <td>User Type</td>
                                    <td>: <?php echo $_SESSION['role'];?> </td>
                                </tr>

                                </tbody>
                            </table>
                        </div><!--table-responsive close-->
                    </div><!--col-md-6 close-->

                    <div class="col-md-6">

                        <div class="table-responsive responsiv-table">
                            <table class="table bio-table">
                                <tbody>
                                <tr>
                                    <td>Emai Id</td>
                                    <td>: <?php echo $_SESSION['user_email'] ?></td>
                                </tr>
                                <tr>
                                    <td>Mobile</td>
                                    <td>: (+6283) 456 789</td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>: (+021) 956 789123</td>
                                </tr>
                                <tr>
                                    <td>Experience</td>
                                    <td>: 5 years</td>
                                </tr>
                                <tr>
                                    <td>Twiter</td>
                                    <td>#@mrjac1111</td>
                                </tr>

                                </tbody>
                            </table>
                        </div><!--table-responsive close-->
                    </div><!--col-md-6 close-->
                    </div>


            </div>
                <div class="tab-pane fade in" id="tab2">
                    <h3>This is tab 2</h3>
                </div>
                <div class="tab-pane fade in" id="tab3">
                    <h3>This is tab 3</h3>
                </div>
            </div>
        </div>

    </div>
    </div>



<?php }
/*
$(document).ready(function() {
    $(".btn-pref .btn").click(function () {
        $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
        // $(".tab").addClass("active"); // instead of this do the below
        $(this).removeClass("btn-default").addClass("btn-primary");
    });
});*/
?>