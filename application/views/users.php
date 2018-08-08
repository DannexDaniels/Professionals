<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="module" style="margin-top: -70px;">
                <div class="module-head">
                    <h3>
                        All Members</h3>
                </div>
                <div class="module-option clearfix">
                    <form>
                        <div class="input-append pull-left">
                            <input type="text" class="span3" placeholder="Filter by name...">
                            <button type="submit" class="btn">
                                <i class="icon-search"></i>
                            </button>
                        </div>
                    </form>
                    <div class="btn-group pull-right" data-toggle="buttons-radio">
                        <button type="button" class="btn">
                            All</button>
                        <button type="button" class="btn">
                            Male</button>
                        <button type="button" class="btn">
                            Female</button>
                    </div>
                </div>
                <div class="module-body">
                    <?php
                        $position = 0;
                        foreach ($profs as $prof) :
                        if ($position%2==0){
                    ?>
                    <div class="row-fluid">
                        <?php
                            }
                            $position++;
                        ?>
                        <div class="span6">
                            <div class="media user">
                                <a class="media-avatar pull-left" href="<?php echo base_url();?>profile/<?php echo $prof['phone'];?>">
                                    <img src="<?php echo base_url('images')?>/users/<?php echo $prof['picture']?>">
                                </a>
                                <div class="media-body">
                                    <h3 class="media-title">
                                        <?php echo $prof['names'];?>
                                    </h3>
                                    <p>
                                        <small class="muted"><?php echo $prof['cat_name'];?></small></p>
                                    <div class="media-option btn-group shaded-icon">
                                        <a href="<?php echo 'sendmessage/'.$prof['prof_id']?>">
                                            <button class="btn btn-small">
                                                <i class="icon-envelope"></i>
                                            </button>
                                        </a>
                                        <button class="btn btn-small">
                                            <i class="icon-share-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                    <!--/.row-fluid-->
                    <br />

                </div>
            </div>

        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->