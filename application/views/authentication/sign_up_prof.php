<div class="vertical-align-wrap" style="margin-top: 2%">
    <div class="vertical-align-middle">
        <div class="auth-box" style="width: 40%; height: auto; padding: 20px">
            <div class="content">
                <div class="header">
                    <!--<div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div>-->
                    <h3 class="title align-center">Create Account</h3>
                </div>
                <?php echo form_open('createprof')?>
                <div class="form-group">
                    <label for="signin-name" class="control-label">Full Names</label>
                    <input type="text" name="names" class="form-control" id="signin-name" placeholder="Enter Full Names" required maxlength="30" minlength="5">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="signin-name" class="control-label">Gender</label>
                            <?php
                                //create an array that will contain the options in the select dropdown
                                $gender = array('none'=>'Select Gender','Male'=>'Male','Female'=>'Female');
                                echo form_dropdown('gender',$gender,'none','class="form-control"');
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="signin-dob" class="control-label">Date of Birth</label>
                            <input type="date" name="dob" class="form-control" id="signin-dob" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="signin-email" class="control-label">Email</label>
                    <input type="email" name="email" class="form-control" id="signin-email" placeholder="Enter Email" required maxlength="50">
                </div>
                <div class="form-group">
                    <label for="signin-phone" class="control-label">Phone</label>
                    <input type="text" name="phone" class="form-control" id="signin-phone" placeholder="Enter Phone Number" required maxlength="15">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="signin-specialization" class="control-label">Specialization</label>
                            <?php
                            //create an array that will contain the options in the select dropdown
                            $specialities = array('none'=>'Select Specialization','SOFT-6'=>'Back-End Developer','SOFT-5'=>'Front-End Developer','SOFT-9'=>'Game Developer','SOFT-10'=>'Mobile App Developer','NET-1'=>'Network Administrator','NET-2'=>'Network Security','SOFT-1'=>'Programmer','SOFT-7'=>'Software Developer','SOFT-8'=>'Software Engineer','SOFT-3'=>'Web Developer','SOFT-4'=>'Web Designer');
                            echo form_dropdown('specialization',$specialities,'none','class="form-control"');
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="signin-org" class="control-label">Organization/Institution</label>
                            <input type="text" name="organization" class="form-control" id="signin-org" placeholder="Enter Organization/Institution" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="signin-loc" class="control-label">Location</label>
                    <input type="text" name="location" class="form-control" id="signin-loc" placeholder="Enter Location" required minlength="3" maxlength="30">
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="signin-occ" class="control-label">Password</label>
                            <input type="password" name="password" class="form-control" id="signin-pass" placeholder="Enter Password" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="signin-org" class="control-label">Confirm Password</label>
                            <input type="password" name="pass-conf" class="form-control" id="signin-pass-conf" placeholder="Confirm Password" required>
                        </div>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary btn-lg btn-block">CREATE ACCOUNT</button>
                <div class="bottom align-center" style="margin-top: 10px;">
                    <span class="helper-text"><i class="fa fa-lock"></i> <a href="login">Already have an account?</a></span>
                </div>
                <?php echo form_close()?>
            </div>
        </div>
    </div>
</div>

