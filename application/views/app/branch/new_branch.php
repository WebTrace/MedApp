<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="header-sec">
                <h3 style="font-size: 30px;" class="text-center">Welcome, <?Php echo $this->session->userdata("USER_TITLE") . " " . $this->session->userdata("LNAME"); ?></h3>
                <h4 class="text-center">Setup your practice</h4>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="reg-wrap">
                <div class="frm-register-wrapper">
                    <div class="row">
                        <div class="col-lg-6">
                            
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="reg-header">
                                        <h3 style="color: #3ea09b;">Create practice</h3>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <?Php echo form_open(base_url() . "branch/create_branch", array('id' => 'create_new_practice')); ?>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="reg-group">
                                            <div class="inp-collection">
                                                <input type="text" name="practice_name" class="reg-input" id="practice_name" placeholder="Practice name">
                                            </div>
                                            <p class="error" id="err-practice-name">Practice name is required.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="reg-group">
                                            <div class="inp-collection">
                                                <select name="practice_type" class="reg-input dr-placeholder" id="practice_type">
                                                    <option value="0">Practice type</option>
                                                    <?Php if(count($branch_types) > 0) : ?>
                                                        <?Php foreach($branch_types as $branch_type) : ?>
                                                            <option value="<?php echo $branch_type['branch_service_code']; ?>"><?Php echo $branch_type['name']; ?></option>
                                                        <?Php endforeach; ?>
                                                    <?Php else : ?>
                                                        <option value="0">No branch type found</option>
                                                    <?Php endif; ?>
                                                </select>
                                            </div>
                                            <p class="error" id="err-practice-type">Practice type is required.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="reg-group">
                                            <div class="inp-collection">
                                                <input type="text" name="tel_number" class="reg-input" id="tel_number" placeholder="Tel number">
                                            </div>
                                            <p class="error" id="err-tel-no">Tel number is required.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="reg-group">
                                            <div class="inp-collection">
                                                <input type="text" name="practice_email" class="reg-input" id="practice_email" placeholder="Practice email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="reg-group">
                                            <div class="inp-collection">
                                                <input type="text" name="address_line" class="reg-input" id="address_line" placeholder="Address line">
                                            </div>
                                            <p class="error" id="err-prac-address">Address line is required.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="reg-group">
                                            <div class="inp-collection">
                                                <input type="text" name="street_name" class="reg-input" id="street_name" placeholder="Street name">
                                            </div>
                                            <p class="error" id="err-street">Street name field is required.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="reg-group">
                                            <div class="inp-collection">
                                                <input type="text" name="location" class="reg-input" id="location" placeholder="Location">
                                            </div>
                                            <p class="error" id="err-prac-location">Location field is required.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="reg-group">
                                            <div class="inp-collection">
                                                <input type="text" name="city" class="reg-input" id="city" placeholder="City">
                                            </div>
                                            <p class="error" id="err-prac-city">City field is required.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="reg-group">
                                            <div class="inp-collection">
                                                <input type="text" name="city" class="reg-input" id="city" placeholder="Postal code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="reg-group">
                                            <div class="inp-collection">
                                                <input type="text" name="province" class="reg-input" id="province" placeholder="Province">
                                            </div>
                                            <p class="error" id="err-prac-province">Province field is required.</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="btn-section" class="row">
                                    <div class="col-lg-12">
                                        <button style="border: none;" type="submit" class="pull-right nav-btn">Create practice <i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                            <?Php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>