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
<div class="row menu-row">
    <div class="col-lg-6">
        <div class="search-control">
            <input type="search" id="search" name="search" class="search" placeholder="Search patient">
            <i id = "mg-glass" class="fa fa-search"></i>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav-controls pull-right">
                    <li>
                        <a href="#" class="link-menu" id="add-user" data-toggle="modal" data-target="#add_user_modal" onclick="return false;" accesskey="t">
                            <i class="fa fa-plus"></i> New patient
                        </a>
                    </li>
                    <li>
                        <a href="<?Php echo base_url(); ?>appointment/waiting_room" class="link-menu">
                            <i class="fa fa-wheelchair"></i> Watitng Room
                        </a>
                    </li>
                    <li>
                        <a class="link-menu" href="<?Php echo base_url()?>patients">
                            <i class="fa fa-refresh"></i> Refresh
                        </a>
                    </li>
                    <li>
                        <a class="link-menu" href="#">
                            <i class="fa fa-lightbulb-o"></i> Tips
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
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
    <!--<div style="background-image: url(<?Php echo base_url(); ?>assets/images/bg1.jpg)">
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
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
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
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                        <input type="hidden" name="rows" id="rows" value="5">
                    </div>
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
    </div>-->
</div>
<div class="row">
    <div class="col-lg-7 border-right">
        <div class="row">
            <div class="col-lg-12 margin-bottom-border">
                <h4>Patients</h4>
            </div>
        </div>
        <div class="user-table">
            <?Php if(count($patients) > 0) : $count = 1; ?>
                <table class="table table-striped" id="patients-list">
                    <thead>
                        <tr>
                            <th style="border-right: #f1f0f0 thin solid;">No.</th>
                            <th>Surname</th>
                            <th>First name</th>
                            <th>ID number</th>
                            <!--<th>Date of Birth</th>-->
                            <!--<th>Age</th>-->
                            <!--<th>Gender</th>-->
                            <!--<th>Ethnic</th>-->
                            <th>Contact no</th>
                            <!--<th>Next of keen</th>-->
                            <th colspan="
                                        <?Php
                                            $is_visible = FALSE;
                                            if($this->session->userdata("USER_ROLE") != 2) {
                                                echo 3;
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
                                <td style="border-right: #f1f0f0 thin solid;" class="add-waiting-room"><?Php echo $count; ?></td>
                                <td class="add-waiting-room"><?Php echo $patient['last_name']; ?></td>
                                <td class="add-waiting-room"><?Php echo $patient['first_name']; ?></td>
                                <td class="add-waiting-room"><?Php echo $patient['id_number']; ?></td>
                                <!--<td class="add-waiting-room"><?Php echo $patient['dob']; ?></td>-->
                                <!--<td class="add-waiting-room"><?Php echo $this->patient_model->calculate_age($patient['dob']); ?></td>-->
                                <!--<td class="add-waiting-room"><?Php echo $patient['gender']; ?></td>-->
                                <!--<td class="add-waiting-room"><?Php echo $patient['ethnic_group']; ?></td>-->
                                <td class="add-waiting-room"><?Php echo $patient['contact_no']; ?></td>
                                <!--<td class="add-waiting-room"><?Php echo $patient['contact_no']; ?></td>-->
                                <?Php if($is_visible == TRUE) : ?>
                                <td>
                                    <a style="font-size: 16px; color: #71cec0;" class="consultation-btn" id="<?Php echo $patient['patient_id']; ?>" 
                                       href="#" data-url="<?Php echo base_url(); ?>patient/ajax_fetch_single_user"
                                       data-url-patient-watitng = "<?Php echo base_url(); ?>appointment/patient_waiting_room"
                                       title="New consultation" onclick="return false">
                                        <i class="fa fa-stethoscope"></i>
                                    </a>
                                </td>
                                <?Php endif; ?>
                                <td><a style="font-size: 15px; color: #eeaa4f;" class="" href="<?Php echo base_url()?>patient/file/<?Php echo md5($patient['user_id']); ?>" title="Pull patient file: <?Php echo $patient['file_no']; ?>"><i class="fa fa-fw fa-folder-open-o"></i></a></td>
                                <!--<td><a class="edit-user" href="<?Php echo base_url(); ?>patients/edit_patient/<?Php echo $patient['patient_id']; ?>" title="Edit patient"><i class="fa fa-pencil"></i></a></td>-->
                                <td><a class="delete-user" id="<?Php echo $patient['patient_id']; ?>" href="#" title="Remove patient"><i class="fa fa-times"></i></a></td>
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
    <div class="col-lg-5">
        <div class="row margin-bottom-border">
            <div class="col-lg-12">
                <h4>Patients overview</h4>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="modal fade waiting_room" id="create_waiting_room">
            <div class="modal-dialog" id="waiting-room-modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" class="close" data-dismiss="modal">&times;</a>
                        <h2 class="modal-title">ADD VISITING REASON</h2>
                    </div>
                    <?Php echo form_open(base_url() . "appointment/waiting_room", array('id' => 'add-wating-room')); ?>
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
                    <?Php echo form_close(); ?>
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
                        <?Php echo form_open(base_url() . 'patients/remove_patient', array('id' => 'frm-remove-patient')); ?>
                        <input type="hidden" name="patient_id" id="remove_patient_id">
                        <a href="#" id="dismiss-remove-patient" class="btn btn-save" onclick="return false;">No</a>
                        <input type="submit" name="btn_submit" class="btn btn-reset" value="Yes"/>
                        <?Php echo form_close(); ?>
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
                                                                <?Php if($this->session->userdata("USER_ROLE") == 3) : ?>
                                                                <input type="hidden" name="practitioner" value="<?Php echo $practitioner_id; ?>">
                                                                <?Php endif; ?>
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
        
    </div>
</div>