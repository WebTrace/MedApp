<div class="row menu-row">
    <div class="col-lg-6">
        <h4>Appointments</h4>
    </div>
    <div class="col-lg-6">
        <ul class="nav-controls pull-right">
            <li>
                <a href="#" class="link-menu" id="add-appointment" data-toggle="modal" data-target="#create-appointment" onclick="return false;" accesskey="t">
                    <i class="fa fa-plus"></i> New appointment
                </a>
            </li>
            <li>
                <a href="#" class="link-menu" id="add-appointment"><i class="fa fa-wheelchair"></i> Waiting room</a>
            </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="upgrade-header">Appointments list</h4>
            </div>
        </div>
        <div style="margin-top: 20px;" class="row">
            <?Php for($i = 0; $i < 6; $i ++) : ?>
                <div class="col-lg-4">
                    <a href="#" class="appointment-item" data-toggle="modal" data-target="#patient-app-details">
                        <div class="app-item-header">
                            <h5>Alfred Mosweu</h5>
                        </div>
                        <hr style="margin: 0px;">
                        <div class="app-item-body">
                            <p>
                                <span class="app-label">Date</span>
                                <span class="app-data"><i class="fa fa-calendar"></i> 21 Jul 2018</span>
                            </p>
                            <p>
                                <span class="app-label">Time</span>
                                <span class="app-data"><i class="fa fa-clock-o"></i> 09:30</span>
                            </p>
                            <p>
                                <span class="app-label">Service</span>
                                <span class="app-data"><i class="fa fa-heart-o"></i> Dentist</span>
                            </p>
                        </div>
                    </a>
                </div>
            <?Php endfor; ?>
        </div>
    </div>
    <div class="col-lg-4">
        <h4 class="upgrade-header">Appointments overview</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="modal fade" id="create-appointment">
            <div class="modal-dialog" id="appointment-modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" class="close" data-dismiss="modal">&times;</a>
                        <h2 class="modal-title">NEW APPOINTMENT</h2>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <p>Add new or search existing patient.</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="">
                                    <?Php echo form_open(base_url() . "patient/search", array("id" => "search-ex-patient")); ?>
                                        <div style="margin-bottom: 50px; position: relative;" class="app-search-grp">
                                            <input autocomplete="off" type="text" name="app_search_patient"  placeholder="Search patient" id="app-search-patient" />
                                            <span id="app-se-icon"><i class="fa fa-search"></i></span>
                                            <div id="response"></div>
                                        </div>
                                    <?Php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-lg-12">
                                <a id="add-details-appointment" class="btn btn-save pull-right" href="#">Continue <i class="fa fa-angle-right"></i></a>
                                <a style="margin-right: 15px;" id="add-app-new-user" class="btn btn-save pull-right" href=""><i class="fa fa-plus"></i> New patient</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="modal fade" id="patient-app-details">
            <div class="modal-dialog" id="app-details-modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" class="close" data-dismiss="modal">&times;</a>
                        <h2 class="modal-title">A MOSWEU</h2>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-lg-12">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="modal fade" id="add-appointment-details">
            <div class="modal-dialog" id="add-app-details-modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" class="close" data-dismiss="modal">&times;</a>
                        <h2 class="modal-title">APPOINTMENT DETAILS</h2>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="app-field-group">
                                    <label class="input-label" for="">Date</label>
                                    <input type="text" name="appointment_date" class="app-input-field" id="appointment-date" placeholder="">
                                    <input type="hidden" id="appointment-slots-url" value="<?Php echo base_url(); ?>appointment/slots">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="app-field-group">
                                    <label class="input-label" for="">Time</label>
                                    <select name="" class="app-input-field" id="available-time-slots">
                                        <option></option>
                                    </select>
                                    <!--<div class="select" tabindex="1">
                                        <input class="selectopt" name="test" type="radio" id="opt1" checked>
                                        <label for="opt1" class="option">Oranges</label>
                                        <input class="selectopt" name="test" type="radio" id="opt2">
                                        <label for="opt2" class="option">Apples</label>
                                        <input class="selectopt" name="test" type="radio" id="opt3">
                                        <label for="opt3" class="option">Grapefruit</label>
                                        <input class="selectopt" name="test" type="radio" id="opt4">
                                        <label for="opt4" class="option">Bananas</label>
                                        <input class="selectopt" name="test" type="radio" id="opt5">
                                        <label for="opt5" class="option">Watermelon</label>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="app-field-group">
                                    <label class="input-label" for="">Service</label>
                                    <select name="" class="app-input-field" id="">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="app-field-group">
                                    <label class="input-label" for="">Service provider</label>
                                    <select name="" class="app-input-field" id="">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="app-field-group">
                                    <p>
                                        <label style="margin: 10px 0px 0px 0px" class="input-label" for="">Notes</label>
                                        <textarea rows="4" name="" class="app-multi-field" id=""></textarea>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-lg-12">
                                <a id="add-app-new-user" class="btn btn-save pull-right" href="">Save appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
<div class="row">
    <div class="col-lg-12">
         Notification 
        <div class="alert"></div>
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div id='calendar'></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div class="error"></div>
                <form class="form-horizontal" id="crud-form">
                <input type="hidden" id="start">
                <input type="hidden" id="end">
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="title">Patient First Name(s)</label>
                        <div class="col-md-6">
                            <input id="title" name="title" type="text" class="form-control input-md" />
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-4 control-label" for="title">Patient Last Name</label>
                        <div class="col-md-6">
                            <input id="lastName" name="lastName" type="text" class="form-control input-md" />
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-4 control-label" for="title">Patient ID No</label>
                        <div class="col-md-6">
                            <input id="idNumber" name="idNumber" type="text" class="form-control input-md" />
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-4 control-label" for="title">Patient Address</label>
                        <div class="col-md-6">
                            <input id="address" name="address" type="text" class="form-control input-md" />
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-md-4 control-label" for="title">Venue</label>
                        <div class="col-md-6">
                            <input id="venue" name="venue" type="text" class="form-control input-md" />
                        </div>
                    </div>
                        <div class="form-group">
                        <label class="col-md-4 control-label" for="title">Time</label>
                        <div class="col-md-6">
                            <input id="time" name="time" type="text" class="form-control input-md" />
                        </div>
                    </div>                            
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="description">Description</label>
                        <div class="col-md-6">
                            <textarea class="form-control" id="description" name="description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="color">Color</label>
                        <div class="col-md-6">
                            <input id="color" name="color" type="text" class="form-control input-md" readonly="readonly" />
                            <span class="help-block">Click to pick a color</span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>-->
