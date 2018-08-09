<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4"><!--auto-fix-->
                <!--<div class="logo-header">
                    <!--<img src="<?Php echo base_url()?>assets/images/claima.png" height="50" width="100">
                    <img src="<?Php echo base_url()?>assets/images/_claima.png" height="60" width="75">
                </div>-->
                <div class="access-container">
                    <div class="access-header">
                        <h4>CLAIMA Login</h4>
                        <hr>
                    </div>
                    <?Php echo form_open(base_url() . 'signin/user'); ?>
                        <div class="access-group">
                            <label class="input-label" for="username">Username</label>
                            <div class="inp-collection">
                                <input autocomplete="off" type="text" name="username" class="input-login-reg" id="username">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                        <div class="access-group">
                            <label class="input-label" for="password">Password</label>
                            <div class="inp-collection">
                                <input type="password" name="password" class="input-login-reg" id="password">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <?Php if(isset($_SESSION['SIGNIN_FAILED'])) : ?>
                            <div class="access-group">
                                <p class="alert alert-danger"><?Php echo $this->session->flashdata("SIGNIN_FAILED"); ?></p>
                            </div>
                        <?Php endif; ?>
                        <div class="access-group text-center">
                            <input type="submit" name="signin" value="Sign in" class="signin-reg" id="signin">
                        </div>
                        <div style="margin-bottom: 3px;" class="access-group text-center">
                            <a href="<?Php echo base_url(); ?>signin/forgotpassw">Forgot password?</a>
                            <!--<a class="pull-right" href="<?Php echo base_url(); ?>signup">Sign up</a>-->
                        </div>
                    <?Php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>