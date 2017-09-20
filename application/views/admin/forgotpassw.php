<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-3 auto-fix">
                <div class="logo-header">
                    <!--<img src="<?Php echo base_url()?>assets/images/claima.png" height="50" width="100">-->
                    <img src="<?Php echo base_url()?>assets/images/_claima.png" height="60" width="75">
                </div>
                <div class="access-container">
                    <div class="access-header">
                        <h4>Forgot password</h4>
                        <hr>
                    </div>
                    <form action="authentication/forgot_password" method="POST">
                        <div class="access-group">
                            <label class="input-label" for="email">Email address</label>
                            <div class="inp-collection">
                                <input type="email" name="email" class="input-login-reg" id="email-fgt">
                                <i class="fa fa-envelope" id="env"></i>
                            </div>
                        </div>
                        <div class="">
                            <input type="submit" name="signin" value="Retrieve password" class="signin-reg" id="signin">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>