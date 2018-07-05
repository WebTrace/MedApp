<?Php if(isset($_SESSION["IS_MANAGER"])) : ?>
    <?Php if($this->session->userdata("IS_MANAGER") == IS_MANAGER) : ?>
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
<?Php else : ?>
    
<?Php endif; ?>