<div class="row">
    <div style="background-image: url(<?Php echo base_url(); ?>assets/images/bg1.jpg)">
        <div class="controls" style="background: rgba(255, 255, 255, 0.9);" class="overlay-bg">
            <div class="col-lg-7">
                <div class="btn-controls-group">
                    <a href="<?Php echo base_url(); ?>patients" id="back-btn" class="back-btn" title="Back"><i class="fa fa-arrow-left"></i></a>
                    <a href="#" class="btn-controls" id="add-to-waiting-room" accesskey="t">
                        <i class="fa fa-plus"></i> Add
                    </a>
                    <button class="btn-controls" id="email" type="submit"><i class="fa fa-envelope"></i> Email</button>
                    <button class="btn-controls" id="print" type="submit"><i class="fa fa-print"></i> Print</button>
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
                        </ul>
                    </div>
                </div>
            </div>
            <div class="fix-spacing col-lg-2 col-md-4 col-sm-4 col-xs-4">
                Show
                <select name="limit" id="limit" class="limit">
                    <option value="0">---</option>
                    <option value="">10</option>
                    <option value="">20</option>
                    <option value="">30</option>
                    <option value="">40</option>
                    <option value="">50</option>
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
                    <input type="search" id="search" name="search" class="search">
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
                        <h2 class="modal-title">ADD PATIENT TO WAITING ROOM</h2>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-input-group">
                                    <div class="patient-search-grp">
                                        <input type="search" name="q" id="q" class="text-input" placeholder="Search by patient ID no">
                                        <button type="button" class="btn-search-icon" id="branch-patient-search"><span id="search-waiting" class="glyphicon glyphicon-search"></span></button>
                                        <input type="hidden" name="search_url" id="search_url" value="<?Php echo base_url(); ?>patients/search_branch_patient">
                                        <input type="hidden" name="check_waiting_url" id="check_waiting_url" value="<?Php echo base_url(); ?>appointment/waiting_patient">
                                        <input type="hidden" name="fetch_waiting_room" id="fetch_waiting_room" value="<?Php echo base_url()?>appointment/checkup_appointment">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="check-appointment-list">
                            <div style="margin-bottom: 20px; margin-top: 10px;" class="row">
                                <div class="col-lg-12">
                                    <p style="margin-bottom: 2px;"><span style="margin-top: 5px; display: block; float: left; font-size: 18px;" id="checkup-par-one"></span> <span></span>
                                        <label class="switch pull-right">
                                            <input id="is_waiting_room" type="checkbox" name="is_waiting_room" value="No">
                                            <span class="slider round"></span>
                                        </label>
                                        <input type="hidden" name="checkup_form_action" id="checkup-form-action" 
                                               value="<?Php echo base_url(); ?>appointment/create_checkup">
                                    </p>
                                </div>
                            </div>
                            <div class="checkup-list"></div>
                        </div>
                        <?Php
                            echo form_open(base_url() . "appointment/create_waiting_room", array('id' => 'add-new-wating-room'));
                            ?>
                            <div id="waiting-input" class="waiting-input">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-input-group">
                                            <select name="appointment_practitioner" id="appointment_practitioner" class="text-input dr-placeholder">
                                                <option value="0">Select practitioner</option>
                                                <?Php if(count($practitioners) > 0) : ?>
                                                <?Php foreach($practitioners as $practitioner) : ?>
                                                <option value="<?Php echo $practitioner['practitioner_id']; ?>"><?Php echo $practitioner['first_name'] . " " . $practitioner['last_name']; ?></option>
                                                <?Php endforeach; ?>
                                                <?Php else : ?>
                                                <option value="0">No practitioners found.</option>
                                                <?Php endif; ?>
                                            </select>
                                            <input type="hidden" name="patient_billing_code" id="patient_billing_code"/>
                                            <input type="hidden" name="waiting_room_patient" id="waiting_room_patient">
                                            <input type="hidden" name="link" id="link" value="<?Php echo base_url(); ?>appointment/single_waiting_room">
                                            <input type="hidden" name="billing_type_url" id="billing_type_url" value="<?Php echo base_url(); ?>billing/patient_billing_type">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-input-group">
                                            <select name="appointment_billing_id" id="appointment_billing_id" class="text-input dr-placeholder">
                                                <option value="0">Billing</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-input-group">
                                            <input type="text" name="appointment_title" id="appointment_title" placeholder="Appointment title" class="text-input dr-placeholder">
                                        </div>
                                    </div>
                                </div>
                                <div class="select-medical-aid">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-input-group">
                                                <input type="hidden" name="medical_aid_url" id="medical_aid_url" value="<?Php echo base_url(); ?>patients/medical_aid">
                                                <select name="medical_aid_scheme" class="text-input dr-placeholder" id="medical-aid-scheme">
                                                    <option value="0">Medical aid scheme</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-input-group">
                                            <textarea name="visiting_reason" id="visiting_reason" class="textarea" placeholder="Reason *"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?Php echo form_close(); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-save waiting-input" id="save-to-waiting">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="modal fade appointment_referrer" id="create_appointment_referrer">
            <div class="modal-dialog" id="appointment_referrer">
                <div class="modal-content">
                    <?Php
                        $attrib = array('id' => 'frmpractitioner_refer');
                        echo form_open(base_url() . 'appointment/create_reffer_patient');
                        ?>
                        <div class="modal-header">
                            <a href="#" class="close" data-dismiss="modal">&times;</a>
                            <h2 class="modal-title"><i class="fa fa-share-square-o"></i> REFER APPOINTMENT</h2>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-input-group">
                                        <select name="practitioner_id" id="practitioner_id" class="text-input dr-placeholder">
                                            <option value="0">Select practitioner</option>
                                            <?Php if(count($practitioners) > 0) : ?>
                                                <?Php foreach($practitioners as $practitioner) : ?>
                                                    <option value="<?Php echo $practitioner['practitioner_id']; ?>"><?Php echo $practitioner['first_name'] . " " . $practitioner['last_name']; ?></option>
                                                <?Php endforeach; ?>
                                            <?Php else : ?>
                                                <option value="0">No practitioners found.</option>
                                            <?Php endif; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-input-group">
                                        <input type="hidden" name="practitioner_app_id" id="practitioner_app_id">
                                        <textarea class="text-input" placeholder="Referring reason" id="referring_reason" name="referring_reason"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-save">
                                Update
                            </button>
                        </div>
                    <?Php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="modal fade waiting_room" id="edit_waiting_room">
            <div class="modal-dialog" id="waiting-room-modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" class="close" data-dismiss="modal">&times;</a>
                        <h2 class="modal-title">EDIT</h2>
                    </div>
                    <?Php
                        $form_attr = array('id' => 'edit-waiting-room');
                        echo form_open(base_url() . "appointment/create_waiting_room", $form_attr);
                        ?>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-input-group">
                                        <select name="appointment_practitioner" id="appointment_practitioner" class="text-input dr-placeholder">
                                            <option value="0">Select practitioner</option>
                                            <?Php if(count($practitioners) > 0) : ?>
                                                <?Php foreach($practitioners as $practitioner) : ?>
                                                    <option value="<?Php echo $practitioner['practitioner_id']; ?>"><?Php echo $practitioner['first_name'] . " " . $practitioner['last_name']; ?></option>
                                                <?Php endforeach; ?>
                                            <?Php else : ?>
                                                <option value="0">No practitioners found.</option>
                                            <?Php endif; ?>
                                        </select>
                                        <input type="hidden" name="appointment_id" id="appointment_id">
                                        <input type="hidden" name="edit_waiting_url" id="edit_waiting_url" value="<?Php echo base_url(); ?>billing/patient_billing_type">    
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-input-group">
                                        <select name="appointment_billing_id" id="appointment_billing_id" class="text-input dr-placeholder">
                                            <option value="0">Billing</option>

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
                                Update
                            </button>
                        </div>
                    <?Php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5 col-md-5 col-sm-6" style="height: 500px; overflow-y: scroll;">
        <div style="">
            <?Php //var_dump($waiting_room_patients);?>
            <div class="x_title">
                <h2 style="margin-top: 0px;">Manage waiting room list</h2>
            </div>
            <div class="refresh-waiting-room-data">
                <?Php if(count($waiting_room_patients) > 0) : ?>
                    <?Php foreach($waiting_room_patients as $waiting_room_patient) : ?>
                        <div class="upcoming-appointments">
                            <div class="appointment-preview fency">
                                <a class="appointment-details" href="<?Php echo base_url(); ?>appointment/single_waiting_room" 
                                   data-prac-app-id="<?Php echo $waiting_room_patient['practitioner_appointment_id']; ?>" 
                                   data-value="<?Php echo $waiting_room_patient['appointment_id']; ?>">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5 style="text-transform: uppercase; margin-bottom: 10px;" class="media-heading">
                                                <?Php echo $waiting_room_patient['first_name'] . " " . $waiting_room_patient['last_name']; ?>
                                                <!--<div class="pull-right">
                                                    <span data="<?Php echo $waiting_room_patient['practitioner_appointment_id']; ?>" title="Reffer to another practitioner" 
                                                          class="practitioner_refer_id" data-toggle="modal" data-target="#create_appointment_referrer"><i class="fa fa-share-square-o"></i></span>
                                                    <span data="<?Php echo $waiting_room_patient['appointment_id']; ?>" title="Edit" 
                                                          class="manage-waiting" data-toggle="modal" data-target="#edit_waiting_room"><i class="fa fa-pencil"></i></span>
                                                    <span data="<?Php echo $waiting_room_patient['appointment_id']; ?>" title="Remove" 
                                                          class="manage-waiting"><i class="fa fa-times"></i></span>
                                                </div>-->
                                                <div class="pull-right">
                                                    <div class="loading"></div>
                                                </div>
                                            </h5>
                                            <div class="pull-left">
                                                <p style="margin-bottom: 2px;" class="small text-muted"><i class="fa fa-clock-o"></i> 23 Jan 2017 | 4:32 PM</p>
                                                <p style="margin-bottom: 0px;" class="appointment-desc"><?Php echo $waiting_room_patient['reason']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?Php endforeach; ?>
                <?Php else : ?>

                <?Php endif; ?>
            </div>
        </div>
    </div>
    <div class="col-lg-7 col-md-7 col-sm-6">
        <div class="x_title">
            <h2 style="margin-top: 0px;">Details</h2>
        </div>
        <div style="" id="waiting-room-data">
            <div style="margin-top: 140px; text-align: center;">
                <span style="font-size: 100px; color: #ddd;"><i class="fa fa-folder-open-o"></i></span>
                <p>No waiting room list selected.</p>
            </div>
        </div>
    </div>
</div>