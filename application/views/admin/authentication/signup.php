<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="header-sec">
                <h2 style="padding: 20px 0px 50px; font-size: 30px;" class="text-center">
                    Few steps left to setup your practice management
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3 signup-status">
            <div class="feedback text-center">
                <div id="signup-status">
                    <div class="spn-parent">
                        <div class="spn-container signup-status">
                            <i class="fa fa-spinner fa-spin" id="spinner"></i>
                            <p>Please wait...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="reg-row">
        <div class="col-lg-12">
            <div class="reg-wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="reg-details">
                            <div class="reg-header">
                                <h3 style="color: #3ea09b;">Registration steps</h3>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" id="frm-container">
                        <?Php echo form_open(base_url() . "signup/practitioner", array('id' => 'signup_practitioner')); ?>
                        <div id="step-one" class="frm-register-wrapper current">
                            <div class="signup-step active">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="reg-header">
                                            <h3 style="color: #3ea09b;">Create an account with Medics</h3>
                                            <p class="text-center" style="color: #eca7a7; font-size: 12px; margin: 5px 0px 0px;">
                                                All fields are required.</p>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="reg-group">
                                            <div style="width: 30%; display: inline-block;" class="inp-collection">
                                                <select class="reg-input dr-placeholder" name="title" id="title">
                                                    <option value="0">Title</option>
                                                    <option value="Mr">Mr</option>
                                                    <option value="Ms">Ms</option>
                                                    <option value="Mrs">Mrs</option>
                                                    <option value="Prof">Prof</option>
                                                    <option value="Dr">Dr</option>
                                                </select>
                                            </div>
                                            <div style="width: 68%; display: inline-block;" class="inp-collection">
                                                <input type="text" name="fname" class="reg-input" id="fname" placeholder="First name">
                                            </div>
                                            <p class="error" id="err-title">Required title and first name.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-5 col-sm-6">
                                        <div class="reg-group">
                                            <div class="inp-collection">
                                                <input type="text" name="lname" class="reg-input" id="lname" placeholder="Last name">
                                            </div>
                                            <p class="error" id="err-lname">Required last name.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="reg-group">
                                            <div class="inp-collection">
                                                <input type="text" name="hpc_no" class="reg-input" id="hpc_no" placeholder="HPC no">
                                            </div>
                                            <p class="error" id="err-hpcsa-no">Required HPC no.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="reg-group">
                                            <div class="inp-collection">
                                                <input type="text" name="practice_no" class="reg-input" id="practice_no" placeholder="Practice number">
                                                <p class="error" id="err-practice-no">Required practice no.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="reg-group">
                                            <div class="inp-collection">
                                                <select class="reg-input dr-placeholder" name="speciality" id="speciality">
                                                    <option value="0">Speciality</option>
                                                    <?Php if(count($specialities) > 0) : ?>
                                                        <?Php foreach($specialities as $specialitie) : ?>
                                                            <option value="<?Php echo $specialitie['speciality_code']; ?>"><?Php echo $specialitie['speciality_name']; ?></option>
                                                        <?Php endforeach; ?>
                                                    <?Php else : ?>
                                                        <option value="0">No specialities found</option>
                                                    <?Php endif; ?>
                                                </select>
                                                <p class="error" id="err-speciality">Required speciality.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="reg-group">
                                            <div class="inp-collection">
                                                <input type="text" name="contact_no" class="reg-input" id="contact_no" placeholder="Contact no">
                                            </div>
                                            <p class="error" id="err-contact-no">Required contact no.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="reg-group">
                                            <div class="inp-collection">
                                                <input type="text" name="email_address" class="reg-input" id="email_address" placeholder="Email address">
                                                <input type="hidden" name="check_email_url" id="check_email_url" value="<?Php echo base_url(); ?>signup/check_email">
                                            </div>
                                            <p class="error" id="err-email">Required email address.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="reg-group">
                                            <div class="inp-collection">
                                                <input type="text" name="confirm_email" class="reg-input" id="confirm_email" placeholder="Confirm email">
                                            </div>
                                            <p class="error" id="err-confirm-email">Email dont match.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="reg-group">
                                            <div class="inp-collection">
                                                <input type="text" name="username" class="reg-input" id="username" placeholder="Username">
                                                <input type="hidden" name="check_username_url" id="check_username_url" value="<?Php echo base_url(); ?>signup/check_username">
                                            </div>
                                            <p class="error" id="err-username">Required username.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="reg-group">
                                            <div class="inp-collection">
                                                <input type="password" name="password" class="reg-input" id="password" placeholder="Password">
                                            </div>
                                            <p class="error" id="err-password">Required password.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="reg-group">
                                            <div class="inp-collection">
                                                <input type="password" name="confirm_password" class="reg-input" id="confirm_password" placeholder="Confirm password">
                                            </div>
                                            <p class="error" id="err-confirm-passw">Password dont match.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="reg-group">
                                            <div class="inpcollection">
                                                <input type="checkbox" value="YES" name="terms" id="terms">
                                                <span>Accept <a href="">Terms and Conditions</a></span>
                                            </div>
                                            <p class="error" id="err-prac-terms">Accept terms and conditions to continue.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button style="border: none;" type="submit" class="pull-right nav-btn">Create account <i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?Php echo form_close(); ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>