<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <div style="margin-top: 80px;">
            <div>
                <h3 class="text-center">Hi <?Php echo "$first_name,"; ?></h3>
            </div>
            <div class="feedback text-center">
                <div class="feedback-header">
                    <i class="fa fa-check-circle-o" id="confirm-color"></i>
                </div>
                <div>
                    <h4 class="confirm-header">Please confirm your account.</h4>
                    <p>
                        Your account is currently inactive. Please activate your account by 
                        clicking on the link sent to your emails. Click the button below if 
                        you have not recieved a confirmation link
                    </p>
                    <div class="resend-link text-center">
                        <a class="btn btn-save" id="account_activation_link" href="' . base_url() . 'signup/activation_link">Resend link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>