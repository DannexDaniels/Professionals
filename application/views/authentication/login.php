<div class="vertical-align-wrap" style="margin-top: 10%">
    <div class="vertical-align-middle">
        <div class="auth-box">
            <div class="left">
                <div class="content" style="margin-top: 00px;">
                    <div class="header">
                        <!--<div class="logo text-center"><img src="../../../assets/img/logo-dark.png" alt="Klorofil Logo"></div>-->
                        <p class="lead">Login to your account</p>
                    </div>
                    <?php echo form_open('authenticate','class="form-auth-small"')?>
                        <div class="form-group">
                            <label for="signin-email" class="control-label sr-only">Email</label>
                            <input type="email" name="email" class="form-control" id="signin-email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="signin-password" class="control-label sr-only">Password</label>
                            <input type="password" name="password" class="form-control" id="signin-password" placeholder="Password">
                        </div>
                        <div class="form-group clearfix">
                            <label class="fancy-checkbox element-left">
                                <input type="checkbox">
                                <span>Remember me</span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                        <div class="bottom">
                            <span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span><br /><br />
                            <span class="helper-text"></i>Don't have an account?</span><br />
                            <span class="helper-text"> <a href="signup_user">Create a User Account</a></span><br />
                            <span class="helper-text"></i> <a href="signup_prof">Create a Professional account</a></span>
                        </div>
                    <?php echo form_close()?>
                </div>
            </div>
            <div class="right">
                <div class="overlay"></div>
                <div class="content text">
                    <!--<h1 class="heading">Free Bootstrap dashboard template</h1>
                    <p>by The Develovers</p>-->
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>