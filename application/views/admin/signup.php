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
    <div class="col-lg-4 col-md-4 col-sm-12 col-lg-offset-4 col-md-offset-4" id="frm-container">
        <?Php
            $attributes = array('id' => 'signup_practitioner');
            echo form_open(base_url() . "signup/signup_practitioner", $attributes);
            ?>
            <div id="step-one" class="frm-register-wrapper current">
                <div class="signup-step active">
                    <div class="reg-header">
                        <h3>Create an account with CLAIMA</h3>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="error-list">
                                <p class="error" id="err-title">Title field is required.</p>
                                <p class="error" id="err-fname">First name field is required.</p>
                                <p class="error" id="err-lname">Last name field is required.</p>
                                <p class="error" id="err-hpcsa-no">HPCSA number is required.</p>
                                <p class="error" id="err-contact-no">Contact number is required.</p>
                                <p class="error" id="err-email">Email address is required.</p>
                                <p class="error" id="err-confirm-email">Email address dont match.</p>
                                <p class="error" id="err-username">Username field is required.</p>
                                <p class="error" id="err-password">Password field is required.</p>
                                <p class="error" id="err-confirm-passw">Password dont match.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!--<fieldset class="fieldset-reg">
                            <legend><span class="step-numbering">1</span> PERSONAL DETAILS</legend>-->
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="reg-group">
                                    <div class="inp-collection">
                                        <!--<input type="text" name="title" class="reg-input" id="title" placeholder="Title">-->
                                        <select class="reg-input" name="title" id="title">
                                            <option value="0">Title</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Prof">Prof</option>
                                            <option value="Dr">Dr</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="reg-group">
                                    <div class="inp-collection">
                                        <input type="text" name="fname" class="reg-input" id="fname" placeholder="First name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="reg-group">
                                    <div class="inp-collection">
                                        <input type="text" name="lname" class="reg-input" id="lname" placeholder="Last name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="reg-group">
                                    <div class="inp-collection">
                                        <input type="text" name="hpcsa_no" class="reg-input" id="hpcsa_no" placeholder="HPCSA no">
                                    </div>
                                </div>
                            </div>
                        <!--</fieldset>-->
                    </div>
                    <div class="row">
                        <!--<fieldset class="fieldset-reg">
                            <legend><span class="step-numbering">2</span> CONTACT DETAILS</legend>-->
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="reg-group">
                                    <div class="inp-collection">
                                        <input type="text" name="contact_no" class="reg-input" id="contact_no" placeholder="Contact no">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="reg-group">
                                    <div class="inp-collection">
                                        <input type="text" name="tel_no" class="reg-input" id="tel_no" placeholder="Tel no">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="reg-group">
                                    <div class="inp-collection">
                                        <input type="text" name="email_address" class="reg-input" id="email_address" placeholder="Email address">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="reg-group">
                                    <div class="inp-collection">
                                        <input type="text" name="confirm_email" class="reg-input" id="confirm_email" placeholder="Confirm email">
                                    </div>
                                </div>
                            </div>
                        <!--</fieldset>-->
                    </div>
                    <div class="row">
                        <!--<fieldset class="fieldset-reg">
                            <legend><span class="step-numbering">3</span> ACCOUNT DETAILS</legend>-->
                            <div class="col-lg-12">
                                <div class="reg-group">
                                    <div class="inp-collection">
                                        <input type="text" name="username" class="reg-input" id="username" placeholder="Username">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="reg-group">
                                    <div class="inp-collection">
                                        <input type="password" name="password" class="reg-input" id="password" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="reg-group">
                                    <div class="inp-collection">
                                        <input type="password" name="confirm_password" class="reg-input" id="confirm_password" placeholder="Confirm password">
                                    </div>
                                </div>
                            </div>
                        <!--</fieldset>-->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <a class="pull-right nav-btn" id="next" href="#">Next <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="step-two" class="frm-register-wrapper">
                <div>
                    <div class="reg-header">
                        <h3>Practice Details</h3>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="error-list">
                                <p class="error" id="err-practice-name">Practice name is required.</p>
                                <p class="error" id="err-practice-no">Practice number is required.</p>
                                <p class="error" id="err-practice-type">Practice type is required.</p>
                                <p class="error" id="err-prac-address">Address line is required.</p>
                                <p class="error" id="err-prac-location">Location field is required.</p>
                                <p class="error" id="err-prac-city">City field is required.</p>
                                <p class="error" id="err-prac-province">Province field is required.</p>
                                <p class="error" id="err-prac-terms">Accept terms and conditions to continue.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!--<fieldset class="fieldset-reg">
                            <legend><span class="step-numbering">4</span> PRACTICE DETAILS</legend>-->
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="reg-group">
                                    <div class="inp-collection">
                                        <input type="text" name="practice_name" class="reg-input" id="practice_name" placeholder="Practice name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="reg-group">
                                    <div class="inp-collection">
                                        <input type="text" name="practice_no" class="reg-input" id="practice_no" placeholder="Practice no">
                                    </div>
                                </div>
                            </div>
                        <!--</fieldset>-->
                    </div>
                    <div class="row">
                        <!--<fieldset class="fieldset-reg">
                            <legend><span class="step-numbering">5</span> CONTACT DETAILS</legend>-->
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="reg-group">
                                    <div class="inp-collection">
                                        <!--<input type="text" name="practice_type" class="reg-input" id="practice_type" placeholder="Practice type">-->
                                        <select name="practice_type" class="reg-input" id="practice_type">
                                            <option value="0">Practice type</option>
                                            <?Php if(count($specialities) > 0) : ?>
                                                <?Php foreach($specialities as $speciality) : ?>
                                                    <option value="<?Php echo $speciality['speciality_code']; ?>"><?Php echo $speciality['speciality_name']; ?></option>
                                                <?Php endforeach; ?>
                                            <?Php endif; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="reg-group">
                                    <div class="inp-collection">
                                        <input type="text" name="tel_no" class="reg-input" id="practice_tel_no" placeholder="Tel no">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="reg-group">
                                    <div class="inp-collection">
                                        <input type="text" name="practice_email" class="reg-input" id="practice_email" placeholder="Practice email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="reg-group">
                                    <div class="inp-collection">
                                        <input type="text" name="confirm_practice_email" class="reg-input" id="confirm_practice_email" placeholder="Confirm email">
                                    </div>
                                </div>
                            </div>
                        <!--</fieldset>-->
                    </div>
                    <div class="row">
                        <!--<fieldset class="fieldset-reg">
                            <legend><span class="step-numbering">6</span> ADDRESS</legend>-->
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="reg-group">
                                    <div class="inp-collection">
                                        <input type="text" name="address_line" class="reg-input" id="address_line" placeholder="Address line">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="reg-group">
                                    <div class="inp-collection">
                                        <input type="text" name="location" class="reg-input" id="location" placeholder="Location">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="reg-group">
                                    <div class="inp-collection">
                                        <input type="text" name="city" class="reg-input" id="city" placeholder="City">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="reg-group">
                                    <div class="inp-collection">
                                        <input type="text" name="province" class="reg-input" id="province" placeholder="Province">
                                    </div>
                                </div>
                            </div>
                        <!--</fieldset>-->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="checkbox" value="YES" name="terms" id="terms">
                            <span>Accept terms and conditions</span>
                        </div>
                    </div>
                    <div id="btn-section" class="row">
                        <div class="col-lg-12">
                            <a class="nav-btn" id="back" href="#"><i class="fa fa-angle-left"></i> Back</a>
                            <input class="pull-right btn-controls btn-save" type="submit" name="signup" id="signup" value="Sign up">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="clearfix"></div>
    </div>
</div>