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
        <div class="col-lg-2">
            <label id="control-show-lbl">
                Show 
                <div id="view-control" class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="diplay-option" 
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            5
                        <span class="caret"></span>
                    </button>
                    <ul id="width-fix" class="dropdown-menu  dropdown-menu-fix" aria-labelledby="dropdownMenu1">
                        <li><a href="#">5</a></li>
                        <li><a href="#">15</a></li>
                        <li><a href="#">25</a></li>
                        <li><a href="#">35</a></li>
                        <li><a href="#">Show all</a></li>
                        <!--<li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>-->
                    </ul>
                    <input type="hidden" name="rows" id="rows" value="5">
                </div>
            </label>
        </div>
        <div class="col-lg-3">
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
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #b9bdbb">
                            <a href="#" class="close" data-dismiss="modal">&times;</a>
                            <h2 class="modal-title" style="color: #737377">ADD USER</h2>
                        </div>
                        <div class="modal-body" style="background-color:#f1f7f4">
                            <h3 style="color:#737377">USER DETAILS</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <label for="">First name</label>
                                        <input type="text" name="" class="form-control text-input">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <label for="">Surname</label>
                                        <input type="text" name="" class="form-control text-input">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <label for="">ID number</label>
                                        <input type="text" name="" class="form-control text-input">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <label for="">Gender</label>
                                        <input type="text" name="" class="form-control text-input">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <label for="">Contact number</label>
                                        <input type="text" name="" class="form-control text-input">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <label for="">Email address</label>
                                        <input type="text" name="" class="form-control text-input">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <label for="">User role</label>
                                        <input type="text" name="" class="form-control text-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer" style="background-color:#c5f7dc">
                        <input style="border-radius: 0;width: 100%; font-size: 15px;background-color: #a0fbcb; color: #49544e" class="btn btn-success" id="btnSubmit" type="submit" name="btnSubmit" />
                    </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <table class="table table-bordered" id="user-list">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Picture</th>
                    <th>Surname</th>
                    <th>First name</th>
                    <th>Contact number</th>
                    <th>Email address</th>
                    <th>User role</th>
                    <th colspan="4">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="<?Php echo base_url()?>assets/images/pic06.jpg" class="img-circle" height="35" width="35"></td>
                    <td>Kgatla</td>
                    <td>Emmanuel</td>
                    <td>062 023 6010</td>
                    <td>emmanuel66@live.co.za</td>
                    <td>Manager</td>
                    <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-eye"></i></a></td>
                    <td><a href="#"><i class="fa fa-lock"></i></a></td>
                    <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="<?Php echo base_url()?>assets/images/pic06.jpg" class="img-circle" height="35" width="35"></td>
                    <td>Sibiya</td>
                    <td>Joseph</td>
                    <td>062 023 6010</td>
                    <td>jose@live.co.za</td>
                    <td>Receptionist</td>
                    <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-eye"></i></a></td>
                    <td><a href="#"><i class="fa fa-lock"></i></a></td>
                    <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><img src="<?Php echo base_url()?>assets/images/pic06.jpg" class="img-circle" height="35" width="35"></td>
                    <td>Madella</td>
                    <td>Lee-Roy</td>
                    <td>062 023 6010</td>
                    <td>roy@live.co.za</td>
                    <td>Staff</td>
                    <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-eye"></i></a></td>
                    <td><a href="#"><i class="fa fa-lock"></i></a></td>
                    <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><img src="<?Php echo base_url()?>assets/images/pic06.jpg" class="img-circle" height="35" width="35"></td>
                    <td>Mojela</td>
                    <td>Tshego</td>
                    <td>062 023 6010</td>
                    <td>tshego@live.co.za</td>
                    <td>Practitioner</td>
                    <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-eye"></i></a></td>
                    <td><a href="#"><i class="fa fa-lock"></i></a></td>
                    <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><img src="<?Php echo base_url()?>assets/images/pic06.jpg" class="img-circle" height="35" width="35"></td>
                    <td>Madella</td>
                    <td>Lee-Roy</td>
                    <td>062 023 6010</td>
                    <td>roy@live.co.za</td>
                    <td>Staff</td>
                    <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-eye"></i></a></td>
                    <td><a href="#"><i class="fa fa-lock"></i></a></td>
                    <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><img src="<?Php echo base_url()?>assets/images/pic06.jpg" class="img-circle" height="35" width="35"></td>
                    <td>Madella</td>
                    <td>Lee-Roy</td>
                    <td>062 023 6010</td>
                    <td>roy@live.co.za</td>
                    <td>Staff</td>
                    <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-eye"></i></a></td>
                    <td><a href="#"><i class="fa fa-lock"></i></a></td>
                    <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><img src="<?Php echo base_url()?>assets/images/pic06.jpg" class="img-circle" height="35" width="35"></td>
                    <td>Madella</td>
                    <td>Lee-Roy</td>
                    <td>062 023 6010</td>
                    <td>roy@live.co.za</td>
                    <td>Staff</td>
                    <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-eye"></i></a></td>
                    <td><a href="#"><i class="fa fa-lock"></i></a></td>
                    <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td><img src="<?Php echo base_url()?>assets/images/pic06.jpg" class="img-circle" height="35" width="35"></td>
                    <td>Madella</td>
                    <td>Lee-Roy</td>
                    <td>062 023 6010</td>
                    <td>roy@live.co.za</td>
                    <td>Staff</td>
                    <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-eye"></i></a></td>
                    <td><a href="#"><i class="fa fa-lock"></i></a></td>
                    <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td><img src="<?Php echo base_url()?>assets/images/pic06.jpg" class="img-circle" height="35" width="35"></td>
                    <td>Madella</td>
                    <td>Lee-Roy</td>
                    <td>062 023 6010</td>
                    <td>roy@live.co.za</td>
                    <td>Staff</td>
                    <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-eye"></i></a></td>
                    <td><a href="#"><i class="fa fa-lock"></i></a></td>
                    <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td><img src="<?Php echo base_url()?>assets/images/pic06.jpg" class="img-circle" height="35" width="35"></td>
                    <td>Madella</td>
                    <td>Lee-Roy</td>
                    <td>062 023 6010</td>
                    <td>roy@live.co.za</td>
                    <td>Staff</td>
                    <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-eye"></i></a></td>
                    <td><a href="#"><i class="fa fa-lock"></i></a></td>
                    <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td><img src="<?Php echo base_url()?>assets/images/pic06.jpg" class="img-circle" height="35" width="35"></td>
                    <td>Madella</td>
                    <td>Lee-Roy</td>
                    <td>062 023 6010</td>
                    <td>roy@live.co.za</td>
                    <td>Staff</td>
                    <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-eye"></i></a></td>
                    <td><a href="#"><i class="fa fa-lock"></i></a></td>
                    <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td><img src="<?Php echo base_url()?>assets/images/pic06.jpg" class="img-circle" height="35" width="35"></td>
                    <td>Madella</td>
                    <td>Lee-Roy</td>
                    <td>062 023 6010</td>
                    <td>roy@live.co.za</td>
                    <td>Staff</td>
                    <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-eye"></i></a></td>
                    <td><a href="#"><i class="fa fa-lock"></i></a></td>
                    <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td><img src="<?Php echo base_url()?>assets/images/pic06.jpg" class="img-circle" height="35" width="35"></td>
                    <td>Madella</td>
                    <td>Lee-Roy</td>
                    <td>062 023 6010</td>
                    <td>roy@live.co.za</td>
                    <td>Staff</td>
                    <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                    <td><a href="#"><i class="fa fa-eye"></i></a></td>
                    <td><a href="#"><i class="fa fa-lock"></i></a></td>
                    <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                </tr>
            </tbody>
        </table>
        <div class="pagination-container">
            <nav>
                <ul class="pagination"></ul>
            </nav>
        </div>
    </div>
</div>