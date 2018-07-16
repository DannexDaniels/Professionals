<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="module" style="margin-top: -70px;">
                <div class="module-head">
                    <h3>
                        Resources</h3>
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
                            Audio</button>
                        <button type="button" class="btn">
                            Videos</button>
                        <button type="button" class="btn">
                            PDF</button>
                        <button type="button" class="btn">
                            Presentations</button>
                    </div>
                </div>
                <div class="module-body">
                    <?php
                    $position = 0;
                    foreach ($resources as $res) :
                    if ($position%2==0){
                    ?>
                    <div class="row-fluid">
                        <?php
                       }
                        $position++;
                        ?>
                        <div class="span6">
                            <div class="media user">
                                <a class="media-avatar pull-left" href="#">
                                    <img src="<?php
                                        if ($res['type']=='pdf'){
                                            echo base_url('assets').'/img/pdf-icon.png';
                                        }else if ($res['type']=='presentation'){
                                            echo base_url('assets').'/img/powerpoint-icon.jpg';
                                        }else if ($res['type']=='video'){
                                            echo base_url('assets').'/img/video-icon.jpg';
                                        }else if ($res['type']=='audio'){
                                            echo base_url('assets').'/img/audio-icon.jpg';
                                        }
                                    ?>">
                                </a>
                                <div class="media-body">
                                    <h3 class="media-title">
                                        <?php echo $res['title']." (". $res['type'].")";?>
                                    </h3>
                                    <p>
                                        <small class="muted"><?php echo $res['category'];?></small></p>
                                    <div class="media-option btn-group shaded-icon">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <form method="get" action="<?php
                                                if ($res['type']=='pdf'){
                                                    echo base_url('assets/resources').'/pdfs/'.$res['file_name'];
                                                }else if ($res['type']=='presentation'){
                                                    echo base_url('assets/resources').'/presentations/'.$res['file_name'];
                                                }else if ($res['type']=='video'){
                                                    echo base_url('assets/resources').'/videos/'.$res['file_name'];
                                                }else if ($res['type']=='audio'){
                                                    echo base_url('assets/resources').'/audios/'.$res['file_name'];
                                                }
                                                ?>
                                            ">
                                                    <button class="btn btn-small">
                                                        <i class="icon-download"></i>
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="col-sm-6">
                                                <button class="btn btn-small">
                                                    <i class="icon-eye-open"></i>
                                                </button>
                                            </div>
                                        </div>


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