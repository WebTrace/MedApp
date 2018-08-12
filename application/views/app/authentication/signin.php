<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <div class="row">
                    <di v class="col-lg-9 col-lg-offset-2 col-md-offset-2">
                        <div class="access-container">
                            <div style="margin: 10px 0px 25px 0px;" class="access-header">
                                <h4 style="font-size: 25px;">Medics Login</h4>
                                <hr>
                            </div>
                            <?Php echo form_open(base_url() . 'signin/user'); ?>
                                <div class="access-group">
                                    <label class="reg-label" for="username">Username</label>
                                    <div class="inp-collection">
                                        <input autocomplete="off" type="text" name="username" class="input-login-reg" id="username">
                                        <!-- <span class=""><i class="fa fa-user"></i></span> -->
                                    </div>
                                </div>
                                <div class="access-group">
                                    <label class="reg-label" for="password">Password</label>
                                    <div class="inp-collection">
                                        <input type="password" name="password" class="input-login-reg" id="password">
                                        <!-- <span class=""><i class="fa fa-lock"></i></span> -->
                                    </div>
                                </div>
                                <?Php if(isset($_SESSION['SIGNIN_FAILED'])) : ?>
                                    <div class="access-group">
                                        <p class="alert alert-danger"><?Php echo $this->session->flashdata("SIGNIN_FAILED"); ?></p>
                                    </div>
                                <?Php endif; ?>
                                <div style="margin: 20px 0px 15px;" class="access-group text-center">
                                    <input type="submit" name="signin" value="Sign in" class="signin-reg" id="signin">
                                </div>
                                <div style="margin-bottom: 3px;" class="access-group text-center">
                                    <p style="font-size: 15px;"><a href="<?Php echo base_url(); ?>signin/forgotpassw">Forgot password?</a></p>
                                    <p style="font-size: 15px;"><a href="<?Php echo base_url(); ?>signup">Sign up</a></p>
                                </div>
                            <?Php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>