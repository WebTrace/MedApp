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
        <form method="post" id="form_add">
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
                                <div class="col-lg-12">
                                    <fieldset>
                                        <legend class="legend-head">Personal Details</legend>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div id="title-control" class="dropdown form-input-group">
                                                    <button class="btn btn-default dropdown-toggle gender-control" type="button" 
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <span id="title-text">Title</span>
                                                        <span class="caret dropdown-caret"></span>
                                                    </button>
                                                    <ul id="title-list" class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                        <li><a href="#">Mr</a></li>
                                                        <li><a href="#">Mrs</a></li>
                                                        <li><a href="#">Ms</a></li>
                                                        <li><a href="#">Dr</a></li>
                                                        <li><a href="#">Prof</a></li>
                                                    </ul>
                                                </div>
                                                <input type="hidden" name="title" value="0" id="user_title">
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-input-group">
                                                    <input type="text" name="" class="text-input" placeholder="First name">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-input-group">
                                                    <input type="text" name="" class="text-input" placeholder="Last name">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-input-group">
                                                    <input type="text" name="" class="text-input" placeholder="ID No.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-input-group">
                                                    <input type="text" name="" class="text-input" placeholder="Date of Birth">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div id="title-control" class="dropdown form-input-group">
                                                    <button class="btn btn-default dropdown-toggle gender-control" type="button" 
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <span id="title-text">Ethnic group</span>
                                                        <span class="caret dropdown-caret"></span>
                                                    </button>
                                                    <ul id="title-list" class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                        <li><a href="#">Afican</a></li>
                                                        <li><a href="#">Coloured</a></li>
                                                        <li><a href="#">White</a></li>
                                                        <li><a href="#">Indian</a></li>
                                                        <li><a href="#">Other</a></li>
                                                    </ul>
                                                </div>
                                                <input type="hidden" name="title" value="0" id="user_title">
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-input-group">
                                                    <input type="text" name="" class="text-input" placeholder="ID number">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-input-group">
                                                    <input type="text" name="" class="text-input" placeholder="ID number">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="legend-head">Contact Details</legend>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-input-group">
                                                    <input type="text" name="" class="text-input" placeholder="Contact number">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-input-group">
                                                    <input type="text" name="" class="text-input" placeholder="Email address">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-input-group">
                                                    <input type="text" name="" class="text-input" placeholder="Confirm Email address">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset id="practice-details">
                                        <legend class="legend-head">Practice Details</legend>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-input-group">
                                                    <input type="text" name="" class="text-input" placeholder="Practice No.">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-input-group">
                                                    <input type="text" name="" class="text-input" placeholder="HPC No.">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div id="specility-control" class="dropdown form-input-group">
                                                    <button class="btn btn-default dropdown-toggle gender-control" type="button" 
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <span id="specility-text">Speciality</span>
                                                        <span class="caret dropdown-caret"></span>
                                                    </button>
                                                    <ul id="speciality-list" class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                        <li><a href="#">Dentist</a></li>
                                                        <li><a href="#">Physiology</a></li>
                                                        <li><a href="#">Psycology</a></li>
                                                        <li><a href="#">Optemtrist</a></li>
                                                        <li><a href="#">General Practitioner</a></li>
                                                    </ul>
                                                </div>
                                                <input type="hidden" name="speciality" value="0" id="user_speciality">
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="legend-head">Account Details</legend>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-input-group">
                                                    <input type="text" name="" class="text-input" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-input-group">
                                                    <input type="text" name="" class="text-input" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-input-group">
                                                    <input type="text" name="" class="text-input" placeholder="Confirm password">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
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