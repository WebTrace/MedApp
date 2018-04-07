<div class="row">
    <div class="controls">
        <div class="col-lg-7">
            <div class="btn-controls-group">
                <button class="btn-controls" id="add-user" type="submit" data-toggle="modal" data-target="#add_user_modal">
                    <i class="fa fa-plus"></i> Add user
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
            <div class="modal fade" id="add_user_modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a href="#" class="close" data-dismiss="modal">&times;</a>
                            <h2 class="modal-title">ADD USER </h2>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="error-list">
                                                <p class="error" id="err-title">Title is required</p>
                                                <p class="error" id="err-fname">First name is required</p>
                                                <p class="error" id="err-lname">Last name is required</p>
                                                <p class="error" id="err-id-no">ID number is required</p>
                                                <p class="error" id="err-dob">Date of birth is required</p>
                                                <p class="error" id="err-practice-no">Practice number required</p>
                                                <p class="error" id="err-hpcsa-no">HPCSA number is required</p>
                                                <p class="error" id="err-specaility">Speciality is required</p>
                                                <p class="error" id="err-contact-no">Contact number is required</p>
                                                <p class="error" id="err-email-address">Email address is required</p>
                                                <p class="error" id="err-confirm-email">Confirm email don't match</p>
                                                <p class="error" id="err-username">Username is required</p>
                                                <p class="error" id="err-password">Password is required</p>
                                                <p class="error" id="err-confirm-passw">Confirm password don't match</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <?Php echo form_open(base_url() . "", array("id" => "frm-search-user")); ?>
                                                <div class="form-input-group user-search">
                                                    <input type="search" name="q" id="" class="text-input" placeholder="Search user">
                                                    <button type="submit" class="btn-search-icon" id="btn-search-icon"><span id="search-waiting" class="glyphicon glyphicon-search"></span></button>
                                                </div>
                                            <?Php echo form_close(); ?>
                                        </div>
                                    </div>
                                    <?Php echo form_open(base_url() . "users/create_user", array('id' => 'frm_add_user')); ?>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-input-group">
                                                    <select name="user_branch" id="user_branch" class="text-input dr-placeholder">
                                                        <option value="0">Select branch</option>
                                                        <?Php if(isset($branches)) : ?>
                                                            <?Php foreach($branches as $branch) : ?>
                                                                <option value="<?Php echo $branch['branch_id']; ?>"><?Php echo $branch['branch_name']; ?></option>
                                                            <?Php endforeach; ?>
                                                        <?Php endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-input-group">
                                                    <select name="user_role" id="user_role" class="text-input dr-placeholder">
                                                        <option value="0">Select role</option>
                                                        <?Php if(isset($roles)) : ?>
                                                            <?Php foreach($roles as $role) : ?>
                                                                <?Php if($role['role_code'] != 1 && $role['role_code'] != 5 && $role['role_code'] != 4) : ?>
                                                                    <option value="<?Php echo $role['role_code']; ?>"><?Php echo $role['role_name']; ?></option>
                                                                <?Php endif; ?>
                                                            <?Php endforeach; ?>
                                                        <?Php endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="dropdown form-input-group">
                                                    <select name="title" id="title" class="text-input dr-placeholder">
                                                        <option value="0">Title</option>
                                                        <option value="Mr">Mr</option>>
                                                        <option value="Ms">Ms</option>>
                                                        <option value="Mrs">Mrs</option>
                                                        <option value="Dr">Dr</option>
                                                        <option value="Prof">Prof</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-input-group">
                                                    <input type="text" name="fname" id="fname" class="text-input" placeholder="First name">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-input-group">
                                                    <input type="text" name="lname" id="lname" class="text-input" placeholder="Last name">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-input-group">
                                                    <input type="text" name="id_number" id="id_number" class="text-input" placeholder="ID number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="practice-details">
                                            <div class="col-lg-4">
                                                <div class="form-input-group">
                                                    <input type="text" name="practice_no" id="practice_no" class="text-input" placeholder="Practice No.">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-input-group">
                                                    <input type="text" name="hpcsa_no" id="hpcsa_no" class="text-input" placeholder="HPCSA No.">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-input-group">
                                                    <select class="reg-input dr-placeholder" name="speciality" id="speciality">
                                                        <option value="0">Speciality</option>
                                                        <?Php if(count($specialities) > 0) : ?>
                                                            <?Php foreach($specialities as $specialitie) : ?>
                                                                <option value="<?Php echo $specialitie['speciality_code']; ?>"><?Php echo $specialitie['speciality_name']; ?></option>
                                                            <?Php endforeach; ?>
                                                        <?Php else : ?>
                                                            <option value="0">No specialities found</option>
                                                        <?Php endif; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-input-group">
                                                    <input type="text" name="contact_no" id="contact_no" class="text-input" placeholder="Contact number">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-input-group">
                                                    <input type="text" name="email" id="email_address" class="text-input" placeholder="Email address">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-input-group">
                                                    <input type="text" name="confirm_email" id="confirm_email" class="text-input" placeholder="Confirm email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-input-group">
                                                <input type="text" name="username" id="username" class="text-input" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-input-group">
                                                <input type="password" name="password" id="passw" class="text-input" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-input-group">
                                                <input type="password" name="confirm_passw" id="confirm_passw" class="text-input" placeholder="Confirm password">
                                            </div>
                                        </div>
                                    </div>
                                    <?Php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" name="btn_submit" id="" class="btn btn-reset" value="Reset"/>
                            <input type="button" name="btn_submit" id="save-user" class="btn btn-save" value="Save" />
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="user-table">
            <table class="table table-striped" id="user-list">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Picture</th>
                        <th>Surname</th>
                        <th>First name</th>
                        <th>ID number</th>
                        <th>Contact number</th>
                        <th>Email address</th>
                        <th>Branch </th>
                        <th>User role</th>
                        <th>Status</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                   <?Php if(isset($branches)) : $count = 1; ?>
                        
                        <?Php foreach($users as $user) : ?>
                            <tr>
                                <td><?Php echo $count++; ?></td>
                                <td><img src="<?Php echo base_url()?>assets/images/pic06.jpg" class="img-circle" height="25" width="25"></td>
                                <td><?Php echo $user['last_name']; ?></td>
                                <td><?Php echo $user['first_name']; ?></td>
                                <td><?Php echo $user['id_number']; ?></td>
                                <td><?Php echo $user['contact_no']; ?></td>
                                <td><?Php echo $user['email_address']; ?></td>
                                <td><?Php echo $user['branch_name']; ?></td>
                                <td><?Php echo $user['role_name']; ?></td>
                                <td><?Php echo $user['status_name']; ?></td>
                                <td><a class="edit-user" href="#" onclick="return false"><i class="fa fa-pencil"></i></a></td>
                                <td><a href="#"><i class="fa fa-lock"></i></a></td>
                                <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        <?Php endforeach; ?>
                    <?Php endif; ?>
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