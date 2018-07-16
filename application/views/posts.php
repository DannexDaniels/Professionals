<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="module">
                <?php
                    $position = 0;
                    foreach ($posts as $post) :
                        if ($position%3==0){?>
                            <div class="row" style="margin-top: 30px;">
                                <?php }
                                    $position++;
                                ?>
                                <div class="col-md-4">
                                    <!-- PANEL NO CONTROLS -->
                                    <div class="panel">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><?php echo $post['title']; ?></h3>
                                        </div>
                                        <div class="panel-body">
                                            <p><?php echo word_limiter($post['content'],40); ?><a href="<?php echo base_url('posts/').$post['post_id']?>">Read More</a></p>
                                        </div>
                                    </div>
                                    <!-- END PANEL NO CONTROLS -->
                                </div>
                                <?php endforeach;?>
                            </div>

            </div>

        </div>
    </div>
</div>