<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-3 auto-fix">
                <!--<div class="logo-header">
                    <!--<img src="<?Php echo base_url()?>assets/images/claima.png" height="50" width="100">
                    <img src="<?Php echo base_url()?>assets/images/_claima.png" height="60" width="75">
                </div>-->
                <div class="access-container">
                    <div class="access-header">
                        <h4>Forgot password</h4>
                        <hr>
                    </div>
                    
                    <?Php echo form_open(base_url() . "signin/forgotpassw"); ?>
                        <div class="access-group">
                            <label class="input-label" for="email">Email address</label>
                            <div class="inp-collection">
                                <input type="email" name="email_address" class="input-login-reg" id="email-fgt">
                                <i class="fa fa-envelope" id="env"></i>
                            </div>
                        </div>
                        <?Php if(isset($_SESSION['ERR_PASSSW_RESET'])) : echo $this->session->flashdata("ERR_PASSSW_RESET"); endif; ?>
                        <div class="access-group">
                            <input type="submit" name="signin" value="Retrieve password" class="signin-reg" id="signin">
                        </div>
                        <div style="margin-bottom: 3px;" class="access-group text-center">
                            <a href="<?Php echo base_url(); ?>signin">Sign in</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>