<?Php if(isset($_SESSION["IS_MANAGER"])) : ?>
    <div class="row text-center">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="wrap-trial-expired">
                <?Php if($this->session->userdata("IS_MANAGER") == IS_MANAGER) : ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Trial version expired</h3>
                                    <hr />
                                </div>
                                <div class="col-lg-12">
                                    <h4 class="greetings-header">Hi Mr Emmanuel,</h4>
                                    <p style="padding: 23px 0px; font-size: 15px;">
                                        Thank you for using CLAIMA trial version, unfortunately your 15 days trial have expired. 
                                        Click the button below to updrade your license.
                                    </p>
                                    <p>
                                        <a href="<?Php echo base_url() ?>account/upgrade" class="btn nav-btn">Upgrade account</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?Php else : ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Trial version expired</h3>
                                </div>
                                <div class="col-lg-12">
                                    <h4>Hi Mr Emmanuel,</h4>
                                    <p>
                                        Thank you for using CLAIMA trial version, unfortunately your 15 days trail have expired. 
                                        Click the button below to updrade your license.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?Php endif; ?>
            </div>
        </div>
    </div>
<?Php else : ?>
    
<?Php endif; ?>