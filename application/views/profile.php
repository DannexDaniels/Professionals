<!-- MAIN -->
<div class="main">
    <div class="span2">

    </div>
    <!-- MAIN CONTENT -->
    <div class="main-content span5" style="margin-top: -100px">
        <div class="container-fluid">
            <div class="panel panel-profile">
                <div class="clearfix">
                    <!-- LEFT COLUMN -->
                    <div class="span4">
                        <!-- PROFILE HEADER -->
                        <div class="profile-header">
                            <div class="overlay"></div>
                            <div class="profile-main">
                                <?php if ($_SESSION['picture']== "" || $picture== ""){
                                    echo '';
                                }else { ?>
                                    <img src="<?php echo base_url('images') ?>/users/<?php
                                    if (isset($phone)) {
                                        echo $picture;
                                    } else {
                                        echo $_SESSION['picture'];
                                    }
                                    ?>" class="img-circle" alt="Avatar" style="width: 100px; height: 100px;">
                                    <?php
                                }
                                ?>
                                <h3 class="name"><?php
                                    if (isset($phone)){
                                        echo $names;
                                    }else{
                                        echo $_SESSION['names'];
                                    }
                                    ?></h3>
                                <!--<span class="online-status status-available">Available</span>-->
                            </div>
                        </div>
                        <!-- END PROFILE HEADER -->
                        <!-- PROFILE DETAIL -->
                        <div class="profile-detail">
                            <div class="profile-info">
                                <h4 class="heading">Basic Info</h4>
                                <ul class="list-unstyled list-justify">
                                    <?php
                                        if (isset($phone)){
                                            ?>
                                            <li>Birthdate <span><?php echo $dob?></span></li>
                                            <li>Mobile <span><?php echo $phone?></span></li>
                                            <li>Email <span><?php echo $email?></span></li>
                                            <li>Specialization <span><?php echo $cat_name?></span></li>
                                            <li>Institution <span><?php echo $institution?></span></li>
                                            <li>Location <span><?php echo $location?></span></li>
                                            <?php
                                        }else{
                                            ?>
                                            <li>Birthdate <span><?php echo $_SESSION['dob']?></span></li>
                                            <li>Mobile <span><?php echo $_SESSION['phone']?></span></li>
                                            <li>Email <span><?php echo $_SESSION['email']?></span></li>
                                            <li>Specialization <span><?php if (isset($_SESSION['occupation'])){echo $_SESSION['occupation'];}else{echo $_SESSION['cat_name'];}?></span></li>
                                            <li>Institution <span><?php echo $_SESSION['institution']?></span></li>
                                            <li>Location <span><?php echo $_SESSION['location']?></span></li>
                                    <?php
                                        }
                                    ?>

                                </ul>
                            </div>
                            <div class="profile-info">
                                <h4 class="heading">Social</h4>
                                <ul class="list-inline social-icons">
                                    <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
                                </ul>
                            </div>
                            <div class="profile-info">
                                <h4 class="heading">About</h4>
                                <p>Interactively fashion excellent information after distinctive outsourcing.</p>
                            </div>
                            <div class="text-center"><a href="#" class="btn btn-primary">Edit Profile</a></div>
                        </div>
                        <!-- END PROFILE DETAIL -->
                    </div>
                    <!-- END LEFT COLUMN -->
                </div>
            </div>
        </div>
    </div>
</div>