<<div class="vertical-align-wrap" style="margin-top: 2%">
    <div class="vertical-align-middle">
        <div class="auth-box" style="width: 70%; height: auto; padding: 20px; margin-left: 25%;">
            <div class="content">
                <div class="header">
                    <!--<div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div>-->
                    <h3 class="title align-center">ADD POST</h3>
                </div>
                <?php echo form_open('savepost')?>
                <div class="form-group">
                    <label for="post-title" class="control-label">Post Title</label>
                    <input type="text" name="title" class="form-control" id="post-title" placeholder="Enter Title" required maxlength="50" minlength="5">
                    <br />
                    <label for="post-content" class="control-label">Post Content</label>
                    <textarea class="form-control" name="content" id="post-content" placeholder="Enter Content" rows="15"></textarea>
                    <br />
                    <button type="submit" class="btn btn-primary btn-lg center-block">Submit Post</button>

                    <?php echo form_close()?>
                </div>
            </div>

        </div>
    </div>
</div>