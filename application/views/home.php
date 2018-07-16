<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!--Carousel-->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active" style="background-color: #000;"></li>
                    <li data-target="#myCarousel" data-slide-to="1" style="background-color: #000;"></li>
                    <li data-target="#myCarousel" data-slide-to="2" style="background-color: #000;"></li>
                </ol>

                <!--Wrapper for Slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="<?php echo base_url('images').'/carousel/maggie1.png'?>" alt="carousel 1">
                        <div class="carousel-caption">
                            <!--<h3 style="color: #000000;">Picture 1</h3>
                            <p style="color: #000000;">A small description</p>-->
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url('images').'/carousel/maggie2.jpg'?>" alt="carousel 2">
                        <div class="carousel-caption">
                            <!--<h3 style="color: #000000;">Picture 2</h3>
                            <p style="color: #000000;">A small description</p>-->
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url('images').'/carousel/maggie3.jpg'?>" alt="carousel 3">
                        <div class="carousel-caption">
                            <!--<h3 style="color: #000000;">Picture 3</h3>
                            <p style="color: #000000;">A small description</p>-->
                        </div>
                    </div>
                </div>

                <!--Left and Right Controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span> </a>
            </div>
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