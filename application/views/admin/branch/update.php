<?Php if(count($branch_details) > 0) : $branch = $branch_details[0] ?>
    <div class="row menu-row">
        <div class="col-lg-12">
            <h4><a class="nav-back-btn" href="<?Php echo base_url(); ?>branch/settings/<?Php echo md5($this->session->userdata("")); ?>"><i class="fa fa-angle-left"></i></a> Branch settings</h4>
        </div>
    </div>
    <?Php echo form_open(base_url() . "", array()); ?>
        <div class="row">
            <div class="col-lg-5 border-right">
                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="sub-branch-header upgrade-header">Update branch details</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row edit-group">
                            <div class="col-lg-5">
                                Branch name
                            </div>
                            <div class="col-lg-7">
                                <div class="edit-input-grouper">
                                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                    <input type="text" name="" id="" class="edit-input" value="<?Php echo $branch["branch_name"]; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row edit-group">
                            <div class="col-lg-5">
                                Address line
                            </div>
                            <div class="col-lg-7">
                                <div class="edit-input-grouper">
                                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                    <input type="text" name="" id="" class="edit-input" value="<?Php echo $branch["address_line"]; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row edit-group">
                            <div class="col-lg-5">
                                Location
                            </div>
                            <div class="col-lg-7">
                                <div class="edit-input-grouper">
                                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                    <input type="text" name="" id="" class="edit-input" value="<?Php echo $branch["location"]; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row edit-group">
                            <div class="col-lg-5">
                                City
                            </div>
                            <div class="col-lg-7">
                                <div class="edit-input-grouper">
                                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                    <input type="text" name="" id="" class="edit-input" value="<?Php echo $branch["city"]; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row edit-group">
                            <div class="col-lg-5">
                                Postal code
                            </div>
                            <div class="col-lg-7">
                                <div class="edit-input-grouper">
                                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                    <input type="text" name="" id="" class="edit-input" value="<?Php echo $branch["address_line"]; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row edit-group">
                            <div class="col-lg-5">
                                Province
                            </div>
                            <div class="col-lg-7">
                                <div class="edit-input-grouper">
                                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                    <input type="text" name="" id="" class="edit-input" value="<?Php echo $branch["province"]; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row edit-group">
                            <div class="col-lg-5">
                                Telephone number
                            </div>
                            <div class="col-lg-7">
                                <div class="edit-input-grouper">
                                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                    <input type="text" name="" id="" class="edit-input" value="<?Php echo $branch["tel_no"]; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row edit-group">
                            <div class="col-lg-5">
                                Email adddress
                            </div>
                            <div class="col-lg-7">
                                <div class="edit-input-grouper">
                                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                    <input type="text" name="" id="" class="edit-input" value="<?Php echo $branch["email_address"]; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p><strong>Make it a default branch?</strong></p>
                        <p>If you have multiple branches, a default branch will always load first when you login.</p>
                        <p>
                            <input type="radio" name="default_branch" id="" value="Yes"> Yes
                        </p>
                        <p>
                            <input type="radio" name="default_branch" id="" value="No"> No
                        </p>
                    </div>
                </div>
            </div>
            <!--<div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="sub-branch-header upgrade-header">Manage branch services</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="sub-branch-header upgrade-header">Branch operational hours</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="sub-branch-header upgrade-header">Appointment schedular settings</h5>
                    </div>
                </div>
            </div>-->
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <input type="hidden" name="branch_id" value="<?Php echo $branch["branch_id"]; ?>" />
                <button class="btn btn-save" type="submit" class="btn nav-btn"><i class="fa fa-floppy-o"></i> Save</button>
                <!--<input type="submit" value="Save" name="" class="btn nav-btn">-->
            </div>
        </div>
    <?Php echo form_close(); ?>
<?Php else : ?>
    here
<?Php endif; ?>