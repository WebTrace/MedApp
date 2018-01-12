<div class="row">
    <div class="controls">
        <div class="col-lg-7">
            <div class="btn-controls-group">
                <button class="btn-controls" id="add-user" type="submit" data-toggle="modal" data-target="#create_waiting_room" accesskey="t">
                    <i class="fa fa-plus"></i> Add
                </button>
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
        <div class="modal fade waiting_room" id="create_waiting_room">
            <div class="modal-dialog" id="waiting-room-modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" class="close" data-dismiss="modal">&times;</a>
                        <h2 class="modal-title">ADD PATIENT TO WAITING ROOM</h2>
                    </div>
                    <?Php
                        $form_attr = array('id' => 'add-wating-room');
                        echo form_open(base_url() . "appointment/create_waiting_room", $form_attr);
                    ?>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-input-group">
                                    <div class="patient-search-grp">
                                        <input type="search" name="q" id="q" class="text-input" placeholder="Search by patient ID no">
                                        <button type="button" class="btn-search-icon" id="branch-patient-search"><span id="search-waiting" class="glyphicon glyphicon-search"></span></button>
                                        <input type="hidden" name="search_url" id="search_url" value="<?Php echo base_url(); ?>patients/search_branch_patient">
                                    </div>
                                </div>
                            </div>
                            <div id="waiting-input" class="waiting-input">
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
                                        <input type="hidden" name="waiting_room_patient" id="waiting_room_patient">
                                        <input type="hidden" name="billing_type_url" id="billing_type_url" value="<?Php echo base_url(); ?>billing/patient_billing_type">                                    </div>
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
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-save waiting-input">
                            Save
                        </button>
                    </div>
                </form>
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
                    $form_attr = array('id' => 'add-wating-room');
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
                    </form>
            </div>
        </div>
    </div>
    </div>
    <div class="col-lg-6">
        <div class="x_title">
            <h2>Waiting room list</h2>
        </div>
        <?Php if(count($waiting_room_patients) > 0) : ?>
            <?Php foreach($waiting_room_patients as $waiting_room_patient) : ?>
                <div class="upcoming-appointments">
                    <div class="appointment-preview">
                        <a class="appointment-details" href="#" onclick="return false;">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="media-heading">
                                        <strong><?Php echo $waiting_room_patient['first_name'] . " " . $waiting_room_patient['last_name']; ?></strong>
                                        <div class="pull-right">
                                            <span data="<?Php echo $waiting_room_patient['appointment_id']; ?>" class="manage-waiting" data-toggle="modal" data-target="#edit_waiting_room"><i class="fa fa-pencil"></i></span>
                                            <span data="<?Php echo $waiting_room_patient['appointment_id']; ?>" class="manage-waiting"><i class="fa fa-times"></i></span>
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