<div class="row">
    <div style="background-image: url(<?Php echo base_url(); ?>assets/images/bg1.jpg)">
        <div class="controls" style="background: rgba(255, 255, 255, 0.9);" class="overlay-bg">
            <div class="col-lg-7">
                <div class="btn-controls-group">
                    <button class="btn-controls" id="add-user" type="submit" data-toggle="modal" data-target="#add_user_modal">
                        <i class="fa fa-plus"></i> New claim
                    </button>
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
                        </ul>
                    </div>
                    <button class="btn-controls" id="email" type="submit"><i class="fa fa-envelope"></i> Email</button>

                </div>
            </div>
            <div class="fix-spacing col-lg-2 col-md-4 col-sm-4 col-xs-4">
                <!--<label id="control-show-lbl">
                    <div id="view-control" class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="diplay-option" 
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Show all Claims
                            <span class="caret"></span>
                        </button>
                        <ul id="width-fix" class="dropdown-menu  dropdown-menu-fix" aria-labelledby="dropdownMenu1">
                            <li><a style="color:#FF0000"; href="#">Rejected Claims</a></li>
                            <li><a style="color:#000000"; href="#">Claims Waiting for Response</a></li>
                            <li><a style="color:#00ff80"; href="#">Fully Accepted Claims</a></li>
                            <li><a style="color:#ff8000"; href="#">Partially Accepted</a></li>
                            <li><a style="color:#00bfff"; href="#">Cash and Private patient</a></li>
                            <li><a style="color:#ffff00"; href="#">Draft Consultation</a></li>
                        </ul>
                        <input type="hidden" name="rows" id="rows" value="5">
                    </div>
                </label>-->
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
        <?Php
            $attributes = array('id' => 'add_diagnosis');
            echo form_open(base_url() . 'claim/create_diagnosis', $attributes);  
            ?>
            <div class="modal fade" id="add_user_modal">
                <div class="modal-dialog" id="modal-format">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a href="#" class="close" data-dismiss="modal">&times;</a>
                            <h2 class="modal-title">CREATE NEW CLAIM</h2>
                        </div>
                        <div class="modal-body">
                            <?Php
                                $attrib = array(
                                    'id' => ''
                                );
                                echo form_open(base_url() .  "", $attrib);
                                ?>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12">
                                            <div class="form-input-group">
                                            <div class="patient-search-grp">
                                                <input type="search" name="q" id="q" class="text-input" placeholder="Search patient" maxlength="13">
                                                <button type="submit" class="btn-search-icon"><span id="search-waiting" class="glyphicon glyphicon-search"></span></button>
                                            </div>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a  href="#patient" data-toggle="tab">Patient</a></li>
                                            <li><a href="#add-diagnosis" data-toggle="tab">Diagnosis</a></li>
                                            <li><a href="#add-dispensing" data-toggle="tab">Dispense</a></li>
                                        </ul>
                                        <div id="diagnosis-group">
                                            <div class="tab-content clearfix">
                                                <div class="tab-pane active" id="patient">
                                                    <div class="row">
                                                        <div class="col-lg-8">
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
                                                        <div class="col-lg-4">
                                                            <div class="form-input-group">
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
                                                            </div>
                                                            <div class="form-input-group">
                                                                <select name="" class="text-input dr-placeholder">
                                                                    <option value="0">Price option</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <hr>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-input-group">
                                                                <select name="practitioner" id="practitioner" class="text-input">
                                                                    <option value="0">Referring Dr</option>
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
                                                                <input type="text" name="practice_number" id="practice_number" class="text-input" placeholder=" practice number">
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
                                                                <input type="text" name="treatment_date" id="treatment_date" class="text-input" placeholder="Treatment date">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-input-group">
                                                                <select name="place" id="place" class="text-input dr-placeholder">
                                                                    <option value="0">Billing</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="add-diagnosis">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <a href="#" class="pull-right" id="add-row"><i class="fa fa-plus"></i> Add</a>
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
                                                                <tbody id="diagnose-collection">
                                                                    <tr>
                                                                        <td><input type="text" name="tariff_code[]" class="text-input"></td>
                                                                        <td><input type="text" name="description[]" class="text-input"></td>
                                                                        <td><input type="text" name="idc_code[]" class="text-input"></td>
                                                                        <td><input type="text" name="price[]" class="text-input"></td>
                                                                        <td><input type="text" name="quantity[]" class="text-input"></td>
                                                                        <td><input type="text" name="sub_total[]" class="text-input"></td>
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
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <table class="table table-bordered">
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
                                                                <tbody id="dispense-collection">
                                                                    <tr>
                                                                        <td><input type="text" name="nappi_code[]" class="text-input"></td>
                                                                        <td><input type="text" name="item_code[]" class="text-input"></td>
                                                                        <td><input type="text" name="days_supply[]" class="text-input"></td>
                                                                        <td><input type="text" name="cost[]" class="text-input"></td>
                                                                        <td><input type="text" name="dispense_fee[]" class="text-input"></td>
                                                                        <td><input type="text" name="gross[]" class="text-input"></td>
                                                                        <td><a href="#" class="remove-row-dispense" title="Remove"><i class="fa fa-times-circle"></a></td>
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
                    </form>
                    <form action="" method="post">
                        <div class="modal-footer">
                             <input type="submit" name="btn_submit" class="btn btn-save" value="Sent" />
                            <input type="submit" name="btn_submit" class="btn btn-save" value="Save" />
                            <input type="submit" name="btn_submit" class="btn btn-reset" value="Reset"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="user-table">
            <table class="table table-bordered" id="user-list">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Reference</th>
                        <th>Surname</th>
                        <th>First name</th>
                        <th>ID number</th>
                        <th>Date</th>
                        <th>Amount (ZAR)</th>
                        <th>Balance (ZAR)</th>
                        <th>Status</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr style="background: linear-gradient(to top, rgba(255, 0, 0, 0), rgba(255, 0, 0, 0.1));">
                            <td>1</td>
                            <td>FG45632</td>
                            <td>Kgatla</td>
                            <td>Emmanuel</td>
                            <td>91203658988</td>
                            <td>16/9/2017</td>
                            <td>R200</td>
                            <td>R250</td>
                            <td>Rejected</td>
                            <td><a href="#"><i class="fa fa-eye"></i></a></td>
                            <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                            <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr style="background: linear-gradient(to top, rgba(255, 0, 0, 0), rgba(255, 0, 0, 0.1));">
                            <td>2</td>
                            <td>TH88832</td>
                            <td>Sibiya</td>
                            <td>Joseph</td>
                            <td>95503658898</td>
                            <td>16/9/2017</td>
                            <td>R200</td>
                            <td>R250</td>
                            <td>Rejected</td>
                            <td><a href="#"><i class="fa fa-eye"></i></a></td>
                            <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                            <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr style="background: linear-gradient(to top, rgba(255, 0, 0, 0), rgba(255, 0, 0, 0.1));">
                            <td>3</td>
                            <td>FG85632</td>
                            <td>Serope</td>
                            <td>Karabo</td>
                            <td>95123658999</td>
                            <td>16/9/2017</td>
                            <td>R200</td>
                            <td>R250</td>
                            <td>Rejected</td>
                            <td><a href="#"><i class="fa fa-eye"></i></a></td>
                            <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                            <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr style="background: linear-gradient(to top, rgba(255, 0, 0, 0), rgba(255, 0, 0, 0.1));">
                            <td>4</td>
                            <td>FG45642</td>
                            <td>Maluleke</td>
                            <td>Bongani</td>
                            <td>91203658988</td>
                            <td>16/9/2017</td>
                            <td>R200</td>
                            <td>R250</td>
                            <td>Rejected</td>
                            <td><a href="#"><i class="fa fa-eye"></i></a></td>
                            <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                            <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr style="background: linear-gradient(to top, rgba(255, 0, 0, 0), rgba(255, 0, 0, 0.1));">
                            <td>5</td>
                            <td>FG45612</td>
                            <td>Kgatla</td>
                            <td>Emmanuel</td>
                            <td>91203658988</td>
                            <td>16/9/2017</td>
                            <td>R200</td>
                            <td>R250</td>
                            <td>Rejected</td>
                            <td><a href="#"><i class="fa fa-eye"></i></a></td>
                            <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                            <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="pagination-container">
                <nav>
                    <ul class="pagination"></ul>
                </nav>
            </div>
        </div>
    </div>