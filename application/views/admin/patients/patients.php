<?Php 
    if(isset($_SESSION['title']))
    {
        $title          = $this->session->flashdata('title');
        $message_type   = $this->session->flashdata('message_type');
        $message        = $this->session->flashdata('message');
        
        $output = '<script>';
        $output .= 'notification_message(' . $message_type . ', ' . $title . ', ' . $message. ')';
        $output .= '</script>';
    }
?>
<div class="row">
    <!--<ul class="nav navbar collapse-controls">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="collapse-btn"></span>
                <span class="collapse-btn"></span>
                <span class="collapse-btn"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#" class="" id=""><i class="fa fa-plus"></i> New patient</a></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </li>
    </ul>-->
    <div style="background-image: url(<?Php echo base_url(); ?>assets/images/bg1.jpg)">
        <div class="controls" style="background: rgba(255, 255, 255, 0.9);" class="overlay-bg">
            <div class="col-lg-7 col-md-8 col-sm-8">
                <div class="btn-controls-group">
                    <a href="#" class="btn-controls" id="add-user" data-toggle="modal" data-target="#add_user_modal" onclick="return false;" accesskey="t">
                        <i class="fa fa-plus"></i> New patient
                    </a>
                    <a href="<?Php echo base_url(); ?>appointment/waiting_room" class="btn-controls" id="email"><i class="fa fa-files-o"></i> Waiting room</a>
                    <a href="#" class="btn-controls" id="print" onclick="return false;"><i class="fa fa-print"></i> Print</a>
                    <div id="export-control" class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="export-option" 
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <i class="fa fa-exchange"></i> Export
                            <span class="caret"></span>
                        </button>
                        <ul style="margin: 12px 0px 0px -2px; border-radius: 0px; font-size: 13px;
                                   border: none;" class="dropdown-menu dropdown-menu-fix" aria-labelledby="dropdownMenu1">
                            <li><a href="#">PDF</a></li>
                            <li><a href="#">Word</a></li>
                            <li><a href="#">Excel</a></li>
                            <!--<li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="fix-spacing col-lg-2 col-md-4 col-sm-4 col-xs-4">
                Show
                <select name="limit" id="limit" class="limit">
                    <option value="0">---</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="">Show all</option>
                </select>
                <label id="control-show-lbl">
                    <!--<div id="view-control" class="dropdown">
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
                            <li><a href="#">Separated link</a></li>
                        </ul>
                        <input type="hidden" name="rows" id="rows" value="5">
                    </div>-->
                </label>
            </div>
            <div class="fix-spacing col-lg-3 col-md-8 col-sm-8 col-xs-8">
                <div class="search-control">
                    <input type="search" id="search" name="search" class="search" placeholder="Search patient">
                    <span id = "mg-glass" class="glyphicon glyphicon-search"></span>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="modal fade waiting_room" id="create_waiting_room">
            <div class="modal-dialog" id="waiting-room-modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" class="close" data-dismiss="modal">&times;</a>
                        <h2 class="modal-title">ADD VISITING REASON</h2>
                    </div>
                    <?Php
                        $form_attr = array('id' => 'add-wating-room');
                        echo form_open(base_url() . "appointment/waiting_room", $form_attr);
                        ?>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-input-group">
                                        <select name="appointment_practitioner" id="appointment_practitioner" class="text-input dr-placeholder">
                                            <option value="0">Select practitioner</option>
                                            <option value="1">Bongs Maranatha</option>
                                        </select>
                                        <input type="hidden" name="waiting_room_patient" id="waiting_room_patient">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-input-group">
                                        <select name="appointment_billing_id" id="appointment_billing_id" class="text-input dr-placeholder">
                                            <option value="0">Billing</option>
                                            <option value="1">Cash</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-input-group">
                                        <textarea name="visiting_reason" id="visiting_reason" class="textarea" placeholder="Reason *"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-save">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="modal fade" id="remove-confirm">
            <div class="modal-dialog" id="remove-confirm">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" class="close" data-dismiss="modal">&times;</a>
                        <h2 class="modal-title">Remove</h2>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Are you sure you want to remove this patient?</h4>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <?Php 
                            $attr = array('id' => 'frm-remove-patient');
                            echo form_open(base_url() . 'patients/remove_patient', $attr); ?>
                            <input type="hidden" name="patient_id" id="remove_patient_id">
                            <a href="#" id="dismiss-remove-patient" class="btn btn-save" onclick="return false;">No</a>
                            <input type="submit" name="btn_submit" class="btn btn-reset" value="Yes"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <?Php
            $attributes = array('id' => 'add_diagnosis');
            echo form_open(base_url() . 'diagnosis/create_diagnosis', $attributes); 
            ?>
            <div class="modal fade" id="create_cosultation">
                <div class="modal-dialog" id="treatment-modal">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a href="#" class="close" data-dismiss="modal">&times;</a>
                            <h2 class="modal-title">NEW DIAGNOSIS 
                                <span style="display: inline-block; margin-right: 20px;" class="pull-right">
                                    <span style="display: inline-block; font-size: 10px; border: #ddd thin 
                                                 solid; height: 20px; width: 20px; text-align: center; line-height: 17px; border-radius: 50%;">
                                        <i class="fa fa-user-o"></i></span> <span style="font-size: 13px;" id="patient-name"></span>
                                </span>
                            </h2>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a  href="#patient" data-toggle="tab">Patient</a></li>
                                                <li><a href="#add-notes" data-toggle="tab">Detailed reason</a></li>
                                                <li><a href="#add-diagnosis" data-toggle="tab">Diagnosis</a></li>
                                                <li><a href="#add-dispensing" data-toggle="tab">Dispense</a></li>
                                                <li><a href="#attach-docs" data-toggle="tab">Attach docs</a></li>
                                                <li><a href="#next-checkup" data-toggle="tab">Next checkup</a></li>
                                            </ul>
                                            <div id="diagnosis-group">
                                                <div class="tab-content clearfix">
                                                    <div class="tab-pane active" id="patient">
                                                        <div class="row">
                                                            <div class="col-lg-5">
                                                                <div class='media'>
                                                                    <span class='pull-left format-span'>
                                                                        <i class="fa fa-user-o"></i>
                                                                    </span>
                                                                    <div class='media-body'>
                                                                        <h4 class='media-heading'>Patient name</h4>
                                                                        <p id='patient_full_name'></p>
                                                                    </div>
                                                                </div>
                                                                <div class='media'>
                                                                    <span class='pull-left format-span'>
                                                                        <i class="fa fa-hashtag"></i>
                                                                    </span>
                                                                    <div class='media-body'>
                                                                        <h4 class='media-heading'>ID number</h4>
                                                                        <p id='id_number'></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <!--<div class="form-input-group">
                                                                    <select name="" class="text-input dr-placeholder">
                                                                        <option value="0">Billing</option>
                                                                        <?Php if(count($patient_billing_types)) : ?>
                                                                            <?Php foreach($$patient_billing_types as $patient_billing_type) :
                                                                                $patient_billing_type_id    = $patient_billing_type["patient_billing_type_id"];
                                                                                $billing_name               = $patient_billing_type["billing_name"];
                                                                                ?>
                                                                                <option value="<?Php echo $patient_billing_type_id; ?>"><?Php echo $billing_name ?></option>
                                                                            <?Php endforeach; ?>
                                                                        <?Php else : ?>
                                                                            <option value="0">No billing details found.</option>
                                                                        <?Php endif; ?>
                                                                    </select>
                                                                </div>-->
                                                                <h4 style="margin-top: 0px; font-size: 15px;">
                                                                    <i class="fa fa-file-text"></i> 
                                                                    <span id="reason-header"></span>
                                                                </h4>
                                                                <p id="appointment_reason"></p>
                                                                <input type="hidden" name="waiting_app_id" id="waiting_app_id">
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <hr id="hr-divider" style="margin-top: 0px;">
                                                            </div>
                                                        </div>
                                                        <div class="row treatment-details-frm">
                                                            <!--<div class="col-lg-4">
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
                                                            </div>-->
                                                            <div class="col-lg-12">
                                                                <h4 style="margin-top: 0px; font-size: 17px;">Treatment details</h4>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="form-input-group">
                                                                    <input type="hidden" name="practitioner" value="<?Php echo $practitioner_id; ?>">
                                                                    <input type="hidden" name="patient_id" id="patient_id">
                                                                    <input type="hidden" name="billing_code" id="billing_code">
                                                                    <input type="hidden" name="" value="">
                                                                    <input type="text" name="auth_number" id="auth_number" class="text-input" placeholder="Authorization no">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="form-input-group">
                                                                    <select name="place" id="place" class="text-input">
                                                                        <option value="0">Treatment place</option>
                                                                        <option value="1">Hospital</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="form-input-group">
                                                                    <input type="text" name="treatment_date" id="treatment_date" class="text-input" placeholder="Treatment date">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="form-input-group">
                                                                    <input type="time" name="treatment_time" id="treatment_timee" class="text-input" placeholder="Treatment time">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="add-diagnosis">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <a href="#" class="pull-right" id="add-row"><i class="fa fa-plus"></i> Add</a>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <table class="table table-bordered add-consultation">
                                                                    <thead>
                                                                        <tr class="">
                                                                            <th>Tariff code</th>
                                                                            <th>Description</th>
                                                                            <th>ICD code</th>
                                                                            <th>Mod code</th>
                                                                            <th>Price</th>
                                                                            <th>Quantity</th>
                                                                            <th colspan="2">Sub total</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="diagnose-collection" class="remove-outer-border">
                                                                        <tr id="append-tr">
                                                                            <td><input type="text" name="tariff_code[]" class="diagnosis-input text-input"></td>
                                                                            <td><input type="text" name="description[]" class="diagnosis-input text-input"></td>
                                                                            <td><input type="text" name="icd_code[]" class="diagnosis-input text-input"></td>
                                                                            <td><input type="text" name="modifier_code[]" class="diagnosis-input text-input"></td>
                                                                            <td><input type="text" name="price[]" class="diagnosis-input text-input"></td>
                                                                            <td><input type="text" name="quantity[]" class="diagnosis-input text-input"></td>
                                                                            <td><input type="text" name="sub_total[]" class="diagnosis-input text-input"></td>
                                                                            <td><a href="#" class="remove-row" title="Remove"><i class="fa fa-times-circle"></a></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="add-dispensing">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <a href="#" class="pull-right" id="add-row-dispense"><i class="fa fa-plus"></i> Add</a>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <table class="table table-bordered add-dispensing">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>NAPPI code</th>
                                                                            <th>Item number</th>
                                                                            <th>Days supply</th>
                                                                            <th>Cost</th>
                                                                            <th>Dispense Fee</th>
                                                                            <th colspan="2">Gross</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="dispense-collection" class="remove-outer-border">
                                                                        <tr id="dispense-row">
                                                                            <td><input type="text" name="nappi_code[]" class="diagnosis-input text-input"></td>
                                                                            <td><input type="text" name="item_code[]" class="diagnosis-input text-input"></td>
                                                                            <td><input type="text" name="days_supply[]" class="diagnosis-input text-input"></td>
                                                                            <td><input type="text" name="cost[]" class="diagnosis-input text-input"></td>
                                                                            <td><input type="text" name="dispense_fee[]" class="diagnosis-input text-input"></td>
                                                                            <td><input type="text" name="gross[]" class="diagnosis-input text-input"></td>
                                                                            <td><a href="#" class="remove-row-dispense" title="Remove"><i class="fa fa-times-circle"></i></a></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="add-notes">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <h5 style="font-size: 16px;">Detailed visiting reason</h5>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <p>
                                                                    <span style="display: block; margin-top: 6px;" class="pull-left">Did Mr Bongs see another practitioner for the same disease?</span>
                                                                    <label class="switch pull-right">
                                                                        <input id="has_been_treated" type="checkbox" name="has_been_treated" value="No">
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="attach-docs">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                Attach documents
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="next-checkup">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <p>Do you wnat to set a next checkup day for [Title] [patient name]?</p>
                                                                <p>
                                                                    <input type="radio" name="next_date[]" value="No" id="next_date_no" checked="checked" /> No
                                                                    <input type="radio" name="next_date[]" value="Yes" id="next_date_yes"  /> Yes
                                                                </p>
                                                            </div>
                                                            <div class="set-checkup-appointment">
                                                                <div class="col-lg-12 cls-checkup-date">
                                                                    <div class="form-input-group">
                                                                        <input type="text" name="checkup_date" id="checkup_date" class="text-input" placeholder="Next checkup date" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="form-input-group">
                                                                        <textarea name="checkup-desc" id="checkup-desc" class="text-input" placeholder="Checkup short description"></textarea>
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
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" name="btn_submit" class="btn btn-save" value="Save" />
                            <input type="submit" name="btn_submit" class="btn btn-reset" value="Reset"/>
                        </div>
                    </div>
                </div>
            </div>
        <?Php echo form_close(); ?>
    </div>
    <div class="col-lg-12">
        <div class="modal fade" id="add_user_modal">
            <div class="modal-dialog" id="modal-format">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" class="close" data-dismiss="modal">&times;</a>
                        <h2 class="modal-title"><i class="fa fa-user-plus"></i> ADD NEW PATIENT</h2>
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
                                            <input type="hidden" name="branch_id" value="<?Php echo $this->session->userdata('BRANCH_ID'); ?>" id="branch_id">
                                            <input type="hidden" name="patient_id" id="q_patient_id">
                                            <input type="search" name="q" id="q" class="text-input" placeholder="Search by patient ID no" maxlength="13">
                                            <button type="submit" class="btn-search-icon"><span id="search-waiting" class="glyphicon glyphicon-search"></span></button>
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
                            <!--<div class="col-lg-12">
                                <?Php $att = array('id' => 'frm-add-new-claima-patient');
                                    echo form_open(base_url() . 'patients/add_claima_patient', $att)
                                    ?>
                                    
                                    <button type="submit" name="" class="btn-save">
                                        Add patient
                                    </button>
                                </form>
                            </div>-->
                        </div>
                        <?Php
                            $attributes = array('id' => 'frm-add-new-patient');
                            echo form_open(base_url() . 'patients/create_patient', $attributes); 
                            ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#add-personal-details" data-toggle="tab"><i class="fa fa-user"></i> Personal Details</a></li>
                                        <li><a href="#add-contact-details" data-toggle="tab"><i class="fa fa-envelope-o"></i> Contact details</a></li>
                                        <li><a href="#add-billing-details" data-toggle="tab"><i class="fa fa-credit-card"></i> Billing details</a></li>
                                        <li><a href="#add-visiting-reason" data-toggle="tab"><i class="fa fa-sticky-note-o"></i> Visiting reason</a></li>
                                        <li><a href="#add-account-details" data-toggle="tab"><i class="fa fa-lock"></i> Account details</a></li>
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
                                        <div class="tab-pane" id="add-visiting-reason">
                                            <div class="col-lg-12 tab-content">
                                                <?Php
                                                $form_attr = array('id' => 'add-wating-room');
                                                echo form_open(base_url() . "appointment/waiting_room", $form_attr);
                                                ?>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-input-group">
                                                            <select name="appointment_practitioner" id="appointment_practitioner" class="text-input dr-placeholder">
                                                                <option value="0">Select practitioner</option>
                                                                <option value="1">Bongs Maranatha</option>
                                                            </select>
                                                            <input type="hidden" name="waiting_room_patient" id="waiting_room_patient">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-input-group">
                                                            <textarea name="visiting_reason" id="visiting_reason" class="textarea" placeholder="Reason *"></textarea>
                                                            <script>
                                                                CKEDITOR.replace('visiting_reason');
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?Php echo form_close(); ?>
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
                                                    </div>-->
                                                </div>
                                            </div>
                                        </div>
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
                    </div>
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
                            <th colspan="
                                        <?Php
                                            $is_visible = FALSE;
                                            if($this->session->userdata("USER_ROLE") != 2) {
                                                echo 4;
                                                $is_visible = TRUE;
                                            } else {
                                                echo 3;
                                            }
                                        ?>
                                        ">Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?Php foreach($patients as $patient) : ?>
                            <tr class="patient-details" data-target="<?Php echo $patient['patient_id']; ?>">
                                <td class="add-waiting-room"><?Php echo $count; ?></td>
                                <td class="add-waiting-room"><?Php echo $patient['last_name']; ?></td>
                                <td class="add-waiting-room"><?Php echo $patient['first_name']; ?></td>
                                <td class="add-waiting-room"><?Php echo $patient['id_number']; ?></td>
                                <td class="add-waiting-room"><?Php echo $patient['dob']; ?></td>
                                <td class="add-waiting-room"><?Php echo $this->patients_model->calculate_age($patient['dob']); ?></td>
                                <td class="add-waiting-room"><?Php echo $patient['gender']; ?></td>
                                <td class="add-waiting-room"><?Php echo $patient['ethnic_group']; ?></td>
                                <td class="add-waiting-room"><?Php echo $patient['contact_no']; ?></td>
                                <td class="add-waiting-room"><?Php echo $patient['contact_no']; ?></td>
                                <?Php if($is_visible == TRUE) : ?>
                                <td>
                                    <a class="consultation-btn" id="<?Php echo $patient['patient_id']; ?>" 
                                       href="#" data-url="<?Php echo base_url(); ?>patients/ajax_fetch_single_user"
                                       data-url-patient-watitng = "<?Php echo base_url(); ?>appointment/patient_waiting_room"
                                       title="New consultation" onclick="return false">
                                        <i class="fa fa-arrow-circle-left"></i>
                                    </a>
                                </td>
                                <?Php endif; ?>
                                <td><a style="font-size: 12px;" class="" href="<?Php echo base_url()?>patients/medical_details/<?Php echo $patient['patient_id']; ?>" title="Pull patient file"><i class="fa fa-fw fa-file-text-o"></i></a></td>
                                <td><a class="edit-user" href="<?Php echo base_url(); ?>patients/edit_patient/<?Php echo $patient['patient_id']; ?>" title="Edit patient"><i class="fa fa-pencil"></i></a></td>
                                <td><a class="delete-user" id="<?Php echo $patient['patient_id']; ?>" href="#" title="Remove patient"><i class="fa fa-trash"></i></a></td>
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