<div class="row">
    <div class="controls">
        <div class="col-lg-7">
            <div class="btn-controls-group">
                <button class="btn-controls" id="add-user" type="submit" data-toggle="modal" data-target="#add_user_modal">
                    <i class="fa fa-plus"></i> New consultation
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
            $attributes = array('id' => 'add_patient');
            echo form_open(base_url() . 'consultation/create_consultation', $attributes); 
        ?>
            <div class="modal fade" id="add_user_modal">
                <div class="modal-dialog" id="modal-format">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a href="#" class="close" data-dismiss="modal">&times;</a>
                            <h2 class="modal-title">PATIENT DETAILS</h2>
                        </div>
                        <div class="modal-body">
                            <!--<div id="fuelux-wizard-container">
                                <div>
                                    <ul class="steps">
                                        <li data-step="1" class="active">
                                            <span class="step">1</span>
                                            <span class="title">Personal Details</span>
                                        </li>
                                        <li data-step="2">
                                            <span class="step">2</span>
                                            <span class="title">Contact Details</span>
                                        </li>
                                        <li data-step="3">
                                            <span class="step">3</span>
                                            <span class="title">Billing Details</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="step-content post-rel">
                                    <div class="step-pane" data-step="1">
                                        <h4>Personal Details</h4>
                                    </div>
                                    <div class="step-pane" data-step="2">
                                        <h4>Personal Details</h4>
                                    </div>
                                    <div class="step-pane" data-step="3">
                                        <h4>Personal Details</h4>
                                    </div>
                                </div>
                                <div class="wizard-actions">
                                    <div class="wizard-actions">
                                        <button class="btn">
                                            <i class="ace-icon fa fa-arrow-left"></i>
                                            Prev
                                        </button>

                                        <button class="btn btn-success" data-last="Finish">
                                            Next
                                            <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>-->
                            <div class="row">
                                <div class="col-lg-4 col-lg-offset-8">
                                    <div class="">
                                        <input type="search" name="search" class="text-input" placeholder="Search patient">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Personal details</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                <select name="title" id="title" class="text-input">
                                                    <option value="0">Title</option>
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
                                                <select name="ethnic_group" id="ethnic_group" class="text-input">
                                                    <option value="0">Ethnic group</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5 class="details-header">Physical address</h5>
                                        </div>
                                    </div>
                                    <div class="row">
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
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5 class="details-header">Postal address</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                Same as above <input type="checkbox" name="same_address" id="same_address" value="3">
                                            </div>
                                        </div>
                                    </div>
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
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Contact details</h5>
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
                                                <input type="text" name="email_address" id="email_address" class="text-input" placeholder="Email address">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-input-group">
                                                <input type="text" name="confirm_email" id="confirm_email" class="text-input" placeholder="Confirm email address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Billing details</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-input-group">
                                                <select name="" id="" class="text-input">
                                                    <option value="0">Billing type</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                <select name="med_aid_scheme" id="med_aid_scheme" class="text-input">
                                                    <option value="0">Medical aid scheme</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                <select name="med_aid_option" id="med_aid_option" class="text-input">
                                                    <option value="0">Medical aid option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                <select name="med_aid_number" id="med_aid_number" class="text-input">
                                                    <option value="0">Medical aid number</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-input-group">
                                                Dependant : 
                                                <input type="radio" name="dependant"> Yes
                                                <input type="radio" name="dependant"> No
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Account details</h5>
                                        </div>
                                    </div>
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
                            <div class="row">
                                <div class="col-lg-6">
                                    
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
        </form>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="user-table">
            <table class="table table-bordered" id="user-list">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Surname</th>
                        <th>First name</th>
                        <th>ID No.</th>
                        <th>Gender</th>
                        <th>Ethnic</th>
                        <th>Contact number</th>
                        <th>Email address</th>
                        <th>User role</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Kgatla</td>
                        <td>Emmanuel</td>
                        <td>956263 5988 026</td>
                        <td>Male</td>
                        <td>African</td>
                        <td>062 023 6010</td>
                        <td>emmanuel66@live.co.za</td>
                        <td>Manager</td>
                        <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                        <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                        <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Sibiya</td>
                        <td>Joseph</td>
                        <td>952363 2561 021</td>
                        <td>Male</td>
                        <td>African</td>
                        <td>062 023 6010</td>
                        <td>jose@live.co.za</td>
                        <td>Receptionist</td>
                        <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                        <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                        <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Madella</td>
                        <td>Lee-Roy</td>
                        <td>962563 2103 251</td>
                        <td>Male</td>
                        <td>Coloured</td>
                        <td>062 023 6010</td>
                        <td>roy@live.co.za</td>
                        <td>Staff</td>
                        <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                        <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                        <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Mojela</td>
                        <td>Tshego</td>
                        <td>789456 8523 542</td>
                        <td>Tshego</td>
                        <td>Tshego</td>
                        <td>062 023 6010</td>
                        <td>tshego@live.co.za</td>
                        <td>Practitioner</td>
                        <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                        <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                        <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Madella</td>
                        <td>Lee-Roy</td>
                        <td>463214 7854 152</td>
                        <td>Lee-Roy</td>
                        <td>Lee-Roy</td>
                        <td>062 023 6010</td>
                        <td>roy@live.co.za</td>
                        <td>Staff</td>
                        <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                        <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                        <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Madella</td>
                        <td>Lee-Roy</td>
                        <td>874569 1452 214</td>
                        <td>Lee-Roy</td>
                        <td>Lee-Roy</td>
                        <td>062 023 6010</td>
                        <td>roy@live.co.za</td>
                        <td>Staff</td>
                        <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                        <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                        <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Madella</td>
                        <td>Lee-Roy</td>
                        <td>564265 2352 120</td>
                        <td>Lee-Roy</td>
                        <td>Lee-Roy</td>
                        <td>062 023 6010</td>
                        <td>roy@live.co.za</td>
                        <td>Staff</td>
                        <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                        <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                        <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Madella</td>
                        <td>Lee-Roy</td>
                        <td>1203256 4586 852</td>
                        <td>Lee-Roy</td>
                        <td>Lee-Roy</td>
                        <td>062 023 6010</td>
                        <td>roy@live.co.za</td>
                        <td>Staff</td>
                        <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                        <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                        <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Madella</td>
                        <td>Lee-Roy</td>
                        <td>142510 1256 321</td>
                        <td>Lee-Roy</td>
                        <td>Lee-Roy</td>
                        <td>062 023 6010</td>
                        <td>roy@live.co.za</td>
                        <td>Staff</td>
                        <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                        <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                        <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Madella</td>
                        <td>Lee-Roy</td>
                        <td>894562 1452 256</td>
                        <td>Lee-Roy</td>
                        <td>Lee-Roy</td>
                        <td>062 023 6010</td>
                        <td>roy@live.co.za</td>
                        <td>Staff</td>
                        <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                        <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                        <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Madella</td>
                        <td>Lee-Roy</td>
                        <td>582365 0325 758</td>
                        <td>Lee-Roy</td>
                        <td>Lee-Roy</td>
                        <td>062 023 6010</td>
                        <td>roy@live.co.za</td>
                        <td>Staff</td>
                        <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                        <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                        <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Madella</td>
                        <td>Lee-Roy</td>
                        <td>985632 0123 145</td>
                        <td>Lee-Roy</td>
                        <td>Lee-Roy</td>
                        <td>062 023 6010</td>
                        <td>roy@live.co.za</td>
                        <td>Staff</td>
                        <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                        <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                        <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Madella</td>
                        <td>Lee-Roy</td>
                        <td>125896 2563 320</td>
                        <td>Lee-Roy</td>
                        <td>Lee-Roy</td>
                        <td>062 023 6010</td>
                        <td>roy@live.co.za</td>
                        <td>Staff</td>
                        <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
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