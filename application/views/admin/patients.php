<div class="row">
    <div class="controls">
        <div class="col-lg-7">
            <div class="btn-controls-group">
                <button class="btn-controls" id="add-user" type="submit" data-toggle="modal" data-target="#add_user_modal">
                    <i class="fa fa-plus"></i> New patient
                </button>
                <!--<button class="btn-controls" id="export-pdf" type="submit">Export PDF</button>
                <button class="btn-controls" id="" type="submit">Export Excel</button>-->
                <button class="btn-controls" id="email" type="submit"><i class="fa fa-envelope"></i> Email</button>
                <button class="btn-controls" id="print" type="submit"><i class="fa fa-print"></i> Print</button>
                <div id="export-control" class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="export-option" 
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <i class="fa fa-exchange"></i> Export
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-fix" aria-labelledby="dropdownMenu1">
                        <li><a href="#">PDF</a></li>
                        <li><a href="#">Word</a></li>
                        <li><a href="#">Excel</a></li>
                        <!--<li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
            <label id="control-show-lbl">
                Show 
                <div id="view-control" class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="diplay-option" 
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Show all
                        <span class="caret"></span>
                    </button>
                    <ul id="width-fix" class="dropdown-menu  dropdown-menu-fix" aria-labelledby="dropdownMenu1">
                        <li><a href="#">5</a></li>
                        <li><a href="#">15</a></li>
                        <li><a href="#">25</a></li>
                        <li><a href="#">35</a></li>
                        <!--<li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>-->
                    </ul>
                    <input type="hidden" name="rows" id="rows" value="5">
                </div>
            </label>
        </div>
        <div class="col-lg-3 col-md-8 col-sm-8 col-xs-8">
            <div class="search-control">
                <input type="search" id="search" name="search" class="search">
                <span id = "mg-glass" class="glyphicon glyphicon-search"></span>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="col-lg-12">
        <?Php
            $attributes = array('id' => 'add_diagnosis');
            echo form_open(base_url() . 'patients/create_diagnosis', $attributes); 
            ?>
            <div class="modal fade" id="create_cosultation">
                <div class="modal-dialog" id="treatment-modal">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a href="#" class="close" data-dismiss="modal">&times;</a>
                            <h2 class="modal-title">NEW CONSULTATION</h2>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <ul class="nav nav-pills">
                                                <li class="active"><a  href="#patient" data-toggle="tab">Patient</a></li>
                                                <li><a href="#add-diagnosis" data-toggle="tab">Diagnosis</a></li>
                                                <li><a href="#add-dispensing" data-toggle="tab">Dispense</a></li>
                                            </ul>
                                            <div id="diagnosis-group">
                                                <div class="tab-content clearfix">
                                                    <div class="tab-pane active" id="patient">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <table class="table">
                                                                    <tr>
                                                                        <td>First name</td>
                                                                        <td>Emmauel</td>
                                                                        <td>Price list</td>
                                                                        <td>
                                                                            <select name="" class="text-input">
                                                                                <option value="0"></option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Last name</td>
                                                                        <td>Kgatla</td>
                                                                        <td>Treatment time</td>
                                                                        <td>
                                                                            <select name="" class="text-input">
                                                                                <option value="0"></option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Age</td>
                                                                        <td>20</td>
                                                                        <td>20</td>
                                                                        <td>20</td>
                                                                    </tr>
                                                                </table>
                                                                <hr>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="form-input-group">
                                                                    <select name="practitioner" id="practitioner" class="text-input">
                                                                        <option value="0">Practitioner</option>
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
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-input-group">
                                                                    <input type="text" name="referring_doctor" id="referring_doctor" class="text-input" placeholder="Referring Dr's practice no">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-input-group">
                                                                    <input type="text" name="auth_number" id="auth_number" class="text-input" placeholder="Authorization number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="form-input-group">
                                                                    <select name="place" id="place" class="text-input">
                                                                        <option value="0">Treatment place</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-input-group">
                                                                    <select name="place" id="place" class="text-input">
                                                                        <option value="0">Treatment date</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-input-group">
                                                                    <select name="place" id="place" class="text-input">
                                                                        <option value="0">Billing</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="add-diagnosis">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <a href="#" class="" id="add-row">Add</a>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <table class="table table-bordered add-consultation">
                                                                    <thead>
                                                                        <tr class="">
                                                                            <th>Tariff code</th>
                                                                            <th>Description</th>
                                                                            <th>IDC code</th>
                                                                            <th>Price</th>
                                                                            <th>Quantity</th>
                                                                            <th colspan="2">Sub total</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="dispense-collection">
                                                                        <tr>
                                                                            <td><input type="text" name="tariff_code[]" class="text-input"></td>
                                                                            <td><input type="text" name="description[]" class="text-input"></td>
                                                                            <td><input type="text" name="idc_code[]" class="text-input"></td>
                                                                            <td><input type="text" name="price[]" class="text-input"></td>
                                                                            <td><input type="text" name="quantity[]" class="text-input"></td>
                                                                            <td><input type="text" name="sub_total[]" class="text-input"></td>
                                                                            <td><a href="#" title="Remove"><i class="fa fa-times"></a></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="add-dispensing">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>NAPPI code</th>
                                                                            <th>Item number</th>
                                                                            <th>Days supply</th>
                                                                            <th>Cost</th>
                                                                            <th>Dispense fee</th>
                                                                            <th>Gross</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="patient_id" id="patient_id">
                            <input type="submit" name="btn_submit" class="btn btn-save" value="Save" />
                            <input type="submit" name="btn_submit" class="btn btn-reset" value="Reset"/>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="modal fade" id="add_user_modal">
            <div class="modal-dialog" id="modal-format">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" class="close" data-dismiss="modal">&times;</a>
                        <h2 class="modal-title">ADD NEW PATIENT</h2>
                    </div>
                    <div class="modal-body">
                        <?Php
                            $attribute = array('id' => 'frm-search');
                            echo form_open(base_url() . 'patients/search_claima_patient', $attribute);
                            ?>
                            <div class="row">
                                <div class="col-lg-4 col-lg-offset-8">
                                    <div class="form-input-group">
                                        <div class="patient-search-grp">
                                            <input type="search" name="q" id="q" class="text-input" placeholder="Search patient">
                                            <button type="submit" class="btn-search-icon"><span id="search-waiting" class="glyphicon glyphicon-search"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <hr class="hr-margin">
                        <div class='row' id='claima-patient'>
                            <div class="col-lg-12">
                                <span class="pull-right">
                                    <a id="cancel-search" style="font-size: 20px; color: #ca566e;" href="#"><i class="fa fa-times-circle-o"></i></a>
                                </span>
                            </div>
                            <div class='col-lg-6'>
                                <div class='row'>
                                    <!--<div class='col-lg-12'>
                                        <h4>Patient Details</h4>
                                    </div>-->
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
                                        <!--<div class='media'>
                                            <span class='pull-left format-span'>
                                                <i class="fa fa-id-badge"></i>
                                            </span>
                                            <div class='media-body'>
                                                <h4 class='media-heading'>Ethnic group</h4>
                                                <p id='ethnic'>African</p>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class='col-lg-6'>
                                <div class="row">
                                    <!--<div class="col-lg-12">
                                        <h4>Contact details</h4>
                                    </div>-->
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
                                <?Php $att = array('id' => 'frm-add-new-claima-patient');
                                    echo form_open(base_url() . 'patients/add_claima_patient', $att)
                                    ?>
                                    <input type="hidden" name="branch_id" value="<?Php echo $this->session->userdata('BRANCH_ID'); ?>" id="branch_id">
                                    <input type="hidden" name="patient_id" id="q_patient_id">
                                    <button type="submit" name="" class="btn-save">
                                        Add patient
                                    </button>
                                </form>
                            </div>
                        </div>
                        <?Php
                            $attributes = array('id' => 'frm-add-new-patient');
                            echo form_open(base_url() . 'patients/create_patient', $attributes); 
                            ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="nav nav-pills">
                                    <li class="active"><a href="#add-personal-details" data-toggle="tab"><i class="fa fa-user"></i> Personal Details</a></li>
                                    <li><a href="#add-contact-details" data-toggle="tab"><i class="fa fa-envelope-o"></i> Contact details</a></li>
                                    <li><a href="#add-billing-details" data-toggle="tab"><i class="fa fa-credit-card"></i> Billing details</a></li>
                                    <li><a href="#add-account-details" data-toggle="tab"><i class="fa fa-lock"></i> Account details</a></li>
                                </ul>
                            </div>
                            <div class="treatment-group">
                                <div class="tab-content clearfix">
                                    <div class="tab-pane active" id="add-personal-details">
                                        <div class="col-lg-12 tab-content">
                                            <div class="row">
                                                <div class="col-lg-6">
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
                                                <div class="col-lg-6">
                                                    <div class="form-input-group">
                                                        <input type="text" name="fname" id="fname" class="text-input" placeholder="First name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-input-group">
                                                        <input type="text" name="lname" id="lname" class="text-input" placeholder="Last name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-input-group">
                                                        <input type="text" name="idno" id="idno"class="text-input" placeholder="ID no. / Passport no.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-input-group">
                                                        <input type="text" name="dob" id="dob" class="text-input" placeholder="Date of Birth">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="add-contact-details">
                                        <div class="col-lg-12 tab-content">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <h5 class="details-header">Physical address </h5>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-input-group">
                                                                <input type="text" name="phy_address_line" id="phy_address_line" class="text-input" placeholder="Address line">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-input-group">
                                                                <input type="text" name="phy_street_name" id="phy_street_name" class="text-input" placeholder="Street name">
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
                                                                    <input type="text" name="pos_address_line" id="pos_address_line" class="text-input" placeholder="Address line">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-input-group">
                                                                    <input type="text" name="pos_street_name" id="pos_street_name" class="text-input" placeholder="Street name">
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
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-input-group">
                                                        <input type="text" name="contact_no" id="contact_no" class="text-input" placeholder="Contact number">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-input-group">
                                                        <input type="text" name="relative_contact_no" id="relative_contact_no" class="text-input" placeholder="Next of keen number">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-input-group">
                                                        <input type="text" name="email_address" id="email_address" class="text-input" placeholder="Email address">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-input-group">
                                                        <input type="text" name="confirm_email" id="confirm_email" class="text-input" placeholder="Confirm email address">
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
                                    <div class="tab-pane" id="add-account-details">
                                        <div class="col-lg-12 tab-content">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-input-group">
                                                        <input type="text" name="" id="" class="text-input" placeholder="Username">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-input-group">
                                                        <input type="text" name="" id="" class="text-input" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-input-group">
                                                        <input type="text" name="" id="" class="text-input" placeholder="Confirm password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" name="btn_reset" class="btn btn-reset" id="btn-reset">
                            Reset
                        </button>
                        <button type="submit" name="btn_submit" class="btn btn-save" id="save-patient" title="Save patient and complete later">
                            Add patient <span id="save-patient-request"><i class="fa fa-circle-o-notch fa-spin"></i></span>
                        </button>
                        <!--<button type="submit" name="" class="btn btn-save" id="create-patient">
                            Create patient
                        </button>-->
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="user-table">
            <?Php if(count($patients) > 0) : $count = 1; ?>
                <table class="table table-bordered" id="patients-list">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Surname</th>
                            <th>First name</th>
                            <th>ID No.</th>
                            <th>Date of Birth</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Ethnic</th>
                            <th>Contact number</th>
                            <th>Next of keen</th>
                            <th colspan="4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?Php foreach($patients as $patient) : ?>
                            <tr>
                                <td><?Php echo $count; ?></td>
                                <td><?Php echo $patient['last_name']; ?></td>
                                <td><?Php echo $patient['first_name']; ?></td>
                                <td><?Php echo $patient['id_number']; ?></td>
                                <td><?Php echo $patient['dob']; ?></td>
                                <td><?Php echo $this->patients_model->calculate_age($patient['dob']); ?></td>
                                <td><?Php echo $patient['gender']; ?></td>
                                <td><?Php echo $patient['ethnic_group']; ?></td>
                                <td><?Php echo $patient['contact_no']; ?></td>
                                <td><?Php echo $patient['contact_no']; ?></td>
                                <td><a class="consultation-btn" id="<?Php echo $patient['patient_id']; ?>" href="#" title="New consultation"
                                       data-toggle="modal" data-target="#create_cosultation" onclick="return false">
                                    <i class="fa fa-arrow-circle-left"></i></a></td>
                                <td><a class="" href="#" title="Patient medical details"><i class="fa fa-eye"></i></a></td>
                                <td><a class="edit-user" href="#" title="Edit patient"><i class="fa fa-pencil"></i></a></td>
                                <td><a class="delete-user" href="#" title="Remove patient"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        <?Php $count++; endforeach; ?>
                    </tbody>
                </table>
            <?Php else : ?>
            <h4>No patients found.</h4>
            <?Php endif; ?>
        </div>
        <div class="pagination-container">
            <nav>
                <ul class="pagination"></ul>
            </nav>
        </div>
    </div>
</div>