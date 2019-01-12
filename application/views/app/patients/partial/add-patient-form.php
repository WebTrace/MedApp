<div class="modal fade" id="add_user_modal">
    <div class="modal-dialog" id="modal-format">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" class="close" data-dismiss="modal">&times;</a>
                <h2 class="modal-title"><i class="fa fa-user-plus"></i> ADD NEW PATIENT</h2>
            </div>
            <div class="modal-body">
                <?Php echo form_open(base_url() . 'patients/search_claima_patient', array('id' => 'frm-search')); ?>
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-8">
                            <div class="form-input-group">
                                <div class="patient-search-grp">
                                    <input type="hidden" name="branch_id" value="<?Php echo $this->session->userdata('BRANCH_ID'); ?>" id="branch_id">
                                    <input type="hidden" name="patient_id" id="q_patient_id">
                                    <input type="search" name="q" id="q" class="text-input" placeholder="Search by patient ID no" maxlength="13">
                                    <button type="submit" class="btn-search-icon"><i id="search-waiting" class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?Php echo form_close(); ?>
                <hr class="hr-margin">
                <div class='row' id='claima-patient'>
                    <div class="col-lg-12">
                        <span class="pull-right">
                            <a id="cancel-search" style="font-size: 20px; color: #ca566e;" href="#"><i class="fa fa-times-circle-o"></i></a>
                        </span>
                    </div>
                    <div class='col-lg-6'>
                        <div class='row'>
                            <div class='col-lg-12'>
                                <div class='media'>
                                    <span class='pull-left format-span'>
                                        <i class="fa fa-user-o"></i>
                                    </span>
                                    <div class='media-body'>
                                        <h4 class='media-heading'>Patient name</h4>
                                        <p id='full-name'></p>
                                    </div>
                                </div>
                                <div class='media'>
                                    <span class='pull-left format-span'>
                                        <i class="fa fa-calendar-plus-o"></i>
                                    </span>
                                    <div class='media-body'>
                                        <h4 class='media-heading'>Date of birth</h4>
                                        <p id='data-of-birth'></p>
                                    </div>
                                </div>
                                <div class='media'>
                                    <span class='pull-left format-span'>
                                        <i class="fa fa-hashtag"></i>
                                    </span>
                                    <div class='media-body'>
                                        <h4 class='media-heading'>ID number</h4>
                                        <p id='id-number'></p>
                                    </div>
                                </div>
                                <div class='media'>
                                    <span class='pull-left format-span'>
                                        <i class="fa fa-neuter"></i>
                                    </span>
                                    <div class='media-body'>
                                        <h4 class='media-heading'>Gender</h4>
                                        <p id='gender'>Male</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-lg-6'>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class='media'>
                                    <span class='pull-left format-span'>
                                        <i class="fa fa-map-marker"></i>
                                    </span>
                                    <div class='media-body'>
                                        <h4 class='media-heading'>Physical address</h4>
                                        <p id='physical-address'>7361 Ext 3, Soshanguve East 0152</p>
                                    </div>
                                </div>
                                <div class='media'>
                                    <span class='pull-left format-span'>
                                        <i class="fa fa-envelope-open-o"></i>
                                    </span>
                                    <div class='media-body'>
                                        <h4 class='media-heading'>Postal address</h4>
                                        <p id='postal-address'>Same as above</p>
                                    </div>
                                </div>
                                <div class='media'>
                                    <span class='pull-left format-span'>
                                        <i class="fa fa-phone"></i>
                                    </span>
                                    <div class='media-body'>
                                        <h4 class='media-heading'>Contact number</h4>
                                        <p id='contact-number'>062 023 6010</p>
                                    </div>
                                </div>
                                <div class='media'>
                                    <span class='pull-left format-span'>
                                        <i class="fa fa-at"></i>
                                    </span>
                                    <div class='media-body'>
                                        <h4 class='media-heading'>Email address</h4>
                                        <p id="email-address">emmanuel66@live.co.za</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <?Php echo form_open(base_url() . 'patients/add_claima_patient', array('id' => 'add-existing-patient')); ?>
                        <input type="hidden" name="existing_patient_id" id="existing_patient_id">
                        <input type="hidden" name="ex_branch_id" value="<?Php echo $this->session->userdata('BRANCH_ID'); ?>">
                        <?Php echo form_close(); ?>
                    </div>
                </div>
                <?Php echo form_open(base_url() . 'patient/create_patient', array('id' => 'frm-add-new-patient')); ?>
                <div class="row">
                    <div class="col-lg-12">
                        <ul id="navi-tabs" class="nav nav-tabs">
                            <li style="margin-right: 4px;" class="active"><a href="#add-personal-details" data-toggle="tab"><i class="fa fa-user"></i> Personal Details</a></li>
                            <li style="margin-right: 4px;"><a href="#add-contact-details" data-toggle="tab"><i class="fa fa-envelope-o"></i> Communication details</a></li>
                            <li style="margin-right: 4px;"><a href="#add-family-mem" data-toggle="tab"><i class="fa fa-heart-o"></i> Next of keen</a></li>
                            <li style="margin-right: 4px;"><a href="#add-work-details" data-toggle="tab"><i class="fa fa-briefcase"></i> Work Details</a></li>
                            <li style="margin-right: 0px;"><a href="#add-billing-details" data-toggle="tab"><i class="fa fa-credit-card"></i> Billing details</a></li>
                            <!-- <li style="margin-right: 4px;"><a href="#add-visiting-reason" data-toggle="tab"><i class="fa fa-sticky-note-o"></i> Visiting reason</a></li>
                            <li style="margin-right: 4px;"><a href="#add-account-details" data-toggle="tab"><i class="fa fa-lock"></i> Account details</a></li> -->
                        </ul>
                    </div>
                    <div class="treatment-group">
                        <div class="tab-content clearfix">
                            <div class="tab-pane active" id="add-personal-details">
                                <div class="col-lg-12 tab-content">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-input-group">
                                                <select name="title" id="title" class="text-input dr-placeholder">
                                                    <option value="0">Title</option>
                                                    <option value="Mr">Mr</option>
                                                    <option value="Ms">Ms</option>
                                                    <option value="Mrs">Mrs</option>
                                                    <option value="Dr">Dr</option>
                                                    <option value="Prof">Prof</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-input-group">
                                                <input type="text" name="fname" id="fname" class="text-input" placeholder="First name">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-input-group">
                                                <input type="text" name="midname" id="midname" class="text-input" placeholder="Middle name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-input-group">
                                                <input type="text" name="lname" id="lname" class="text-input" placeholder="Last name">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-input-group">
                                                <input type="text" name="dob" id="dob" class="text-input" placeholder="Date of Birth">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-input-group">
                                                <input type="text" name="idno" id="idno"class="text-input" placeholder="ID no. / Passport no.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-input-group">
                                                <div class="form-input-group">
                                                    <select name="mstatus" id="mstatus" class="text-input dr-placeholder">
                                                        <option value="0">Marital status</option>
                                                        <option value="African">Single</option>
                                                        <option value="Coloured">Married</option>
                                                        <option value="White">Divorced</option>
                                                        <option value="Indian">Widow</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-input-group">
                                                <select name="ethnic_group" id="ethnic_group" class="text-input dr-placeholder">
                                                    <option value="0">Ethnic group</option>
                                                    <option value="African">African</option>
                                                    <option value="Coloured">Coloured</option>
                                                    <option value="White">White</option>
                                                    <option value="Indian">Indian</option>
                                                    <option value="Asian">Asian</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-input-group">
                                                <select name="ethnic_group" id="ethnic_group" class="text-input dr-placeholder">
                                                    <option value="0">Select country</option>
                                                    <option value="African">African</option>
                                                    <option value="Coloured">Coloured</option>
                                                    <option value="White">White</option>
                                                    <option value="Indian">Indian</option>
                                                    <option value="Asian">Asian</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="add-contact-details">
                                <div class="col-lg-12 tab-content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5 class="details-header">Contact details</h5>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-input-group">
                                                <input type="text" name="contact_no" id="contact_no" class="text-input" placeholder="Contact number">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-input-group">
                                                <input type="text" name="email_address" id="email_address" class="text-input" placeholder="Email address">
                                            </div>
                                        </div>
                                        <!-- <div class="col-lg-6">
                                            <div class="form-input-group">
                                                <input type="text" name="sec_email_address" id="sec_email_address" class="text-input" placeholder="Secondary email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                <input type="text" name="confirm_email" id="confirm_email" class="text-input" placeholder="Confirm email address">
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h5 class="details-header">Physical address</h5>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-input-group">
                                                        <input type="text" name="phy_address_line" id="phy_address_line" class="text-input" placeholder="Address line">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-input-group">
                                                        <input type="text" name="phy_street_name" id="phy_street_name" class="text-input" placeholder="Address line 2">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-input-group">
                                                        <input type="text" name="phy_suburb" id="phy_suburb" class="text-input" placeholder="Suburb/Town">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-input-group">
                                                        <input type="text" name="phy_postal_code" id="phy_postal_code" class="text-input" placeholder="Postal code">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h5 class="details-header">Postal address 
                                                        <span style="font-size: 14px;" class="pull-right">Same as above 
                                                            <input type="checkbox" name="same_address" id="same_address" value="Yes"></span>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="postal-address">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-input-group">
                                                            <input type="text" name="pos_address_line" id="pos_address_line" class="text-input" placeholder="Address line 1">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-input-group">
                                                            <input type="text" name="pos_street_name" id="pos_street_name" class="text-input" placeholder="Address line 2">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-input-group">
                                                            <input type="text" name="pos_suburb" id="pos_suburb" class="text-input" placeholder="Suburb/Town">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-input-group">
                                                            <input type="text" name="pos_postal_code" id="pos_postal_code" class="text-input" placeholder="Postal code">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="add-family-mem">
                                <div class="col-lg-12 tab-content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5 class="details-header">Next of keen</h5>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                <input type="text" name="keen_first_name" id="keen_first_name" class="text-input" placeholder="First name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                <input type="text" name="keen_last_name" id="keen_last_name" class="text-input" placeholder="Last name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-input-group">
                                                <input type="text" name="keen_contact_no" id="keen_contact_no" class="text-input" placeholder="Contact number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="add-work-details">
                                <div class="col-lg-12 tab-content">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                <input type="text" name="employer" id="employer" class="text-input" placeholder="Employer">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                <input type="text" name="employer" id="employer" class="text-input" placeholder="Occupation">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                <input type="text" name="employer" id="employer" class="text-input" placeholder="Employer">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="add-billing-details">
                                <div class="col-lg-12 tab-content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-input-group">
                                                <select name="billing_type" id="billing_type" class="text-input dr-placeholder">
                                                    <option value="0">Billing type</option>
                                                    <?Php if(count($billing_types) > 0) : ?>
                                                    <?Php foreach($billing_types as $billing_type) : ?>
                                                    <option value="<?Php echo $billing_type['billing_type_code']; ?>"><?Php echo $billing_type['billing_name']; ?></option>
                                                    <?Php endforeach; ?>
                                                    <?Php else : ?>
                                                    <option value="0">No billing type defined</option>
                                                    <?Php endif; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="medical-aid-details" class="row">
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                <select name="med_aid_scheme" id="med_aid_scheme" class="text-input dr-placeholder">
                                                    <option value="0">Medical aid scheme</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                <select name="med_aid_option" id="med_aid_option" class="text-input dr-placeholder">
                                                    <option value="0">Medical aid option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                <input type="text" name="med_aid_number" id="med_aid_number" class="text-input" placeholder="Medical aid number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                <select name="dependant" id="dependant" class="text-input dr-placeholder">
                                                    <option value="0">Dependant</option>
                                                    <option value="No">No</option>
                                                    <option value="Yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="dependant-relation" class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-input-group">
                                                        <input type="text" name="dependant_no" id="dependant_no" class="text-input" placeholder="Dependant number">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-input-group">
                                                        <select name="dependant_relation" class="text-input dr-placeholder">
                                                            <option value="0">Dependant relationship</option>
                                                            <?Php if(count($dependant_relationships) > 0) : ?>
                                                            <?Php foreach($dependant_relationships as $dependant_relationship) : ?>
                                                            <option value="<?Php echo $dependant_relationship['relationship_code']; ?>"><?Php echo $dependant_relationship['relationship_name']; ?></option>
                                                            <?Php endforeach; ?>
                                                            <?Php else : ?>
                                                            <option value="0">No relationship type defined</option>
                                                            <?Php endif; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="cash-payment" class="row">
                                        <div class="col-lg-12">
                                            <div class="form-input-group">
                                                <input type="text" name="cash_amount" class="text-input" id="cash_amount" placeholder="Amount">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="credit-card-payment" class="row">
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                <input type="" name="" id="" class="text-input" placeholder="Card holder">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                <input type="" name="" id="" class="text-input" placeholder="Account number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                <input type="" name="" id="" class="text-input" placeholder="Card number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                <input type="" name="" id="" class="text-input" placeholder="CCV number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                <input type="" name="" id="" class="text-input" placeholder="Branch name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                <input type="" name="" id="" class="text-input" placeholder="Branch code">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="tab-pane" id="add-visiting-reason">
                                <div class="col-lg-12 tab-content">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                <input type="text" name="appointment_desc" id="app-desc" class="text-input" placeholder="Appointment title">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                <select name="appointment_practitioner" id="appointment_practitioner" class="text-input dr-placeholder">
                                                    <option value="0">Select practitioner</option>
                                                    <?Php if(count($practitioners)) : ?>
                                                    <?Php foreach($practitioners as $practitioner) :
                                                    $practitioner_id    = $practitioner["practitioner_id"];
                                                    $first_name         = $practitioner["first_name"];
                                                    $last_name          = $practitioner["last_name"];
                                                    ?>
                                                    <option value="<?Php echo $practitioner_id; ?>"><?Php echo $first_name . " " . $last_name; ?></option>
                                                    <?Php endforeach; ?>
                                                    <?Php else : ?>
                                                    <option value="0">No practitioners</option>
                                                    <?Php endif; ?>
                                                </select>
                                                <input type="hidden" name="waiting_room_patient" id="waiting_room_patient">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-input-group">
                                                <textarea name="visiting_reason" id="visiting_reason" class="textarea" placeholder="Reason *"></textarea>
                                                <!--<script>
                                CKEDITOR.replace('visiting_reason');
                                </script>--
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                            <!-- <div class="tab-pane" id="add-account-details">
                                                                <div class="col-lg-12 tab-content">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="form-input-group">
                                                                                <input type="text" name="" id="" class="text-input" placeholder="Username">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <div class="">
                                                                                <h5 style="font-size: 18px;">Automatic password</h5>
                                                                                <p>
                                                                                    The system will generate automatic password and send it to patient through provided email.
                                                                                    This password can be changed at anytime.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <!--<div class="col-lg-6">
                                <div class="form-input-group">
                                <input type="text" name="" id="" class="text-input" placeholder="Password">
                                </div>
                                </div>
                                <div class="col-lg-6">
                                <div class="form-input-group">
                                <input type="text" name="" id="" class="text-input" placeholder="Confirm password">
                                </div>
                                </div>--
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <?Php echo form_close(); ?>
            </div>
            <div class="modal-footer">
                <button type="reset" name="btn_reset" class="btn btn-reset" id="btn-reset">
                    Reset
                </button>
                <button type="submit" name="btn_submit" class="btn btn-save" id="save-patient" title="Save patient and complete later">
                    Add patient <span id="save-patient-request"><i class="fa fa-circle-o-notch fa-spin"></i></span>
                </button>
                <button type="submit" name="btn_submit" class="btn btn-save" id="new_existng_pat" title="Save patient and complete later">
                    Add patient <span id="exi-patient-request"><i class="fa fa-circle-o-notch fa-spin"></i></span>
                </button>
            </div>
        </div>
    </div>
</div>