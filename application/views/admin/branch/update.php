<?Php if(count($branch_details) > 0) : $branch = $branch_details[0] ?>
    <div class="row menu-row">
        <div class="col-lg-12">
            <h4>Update branch</h4>
        </div>
    </div>
    <?Php echo form_open(base_url() . "", array()); ?>
        <div class="row">
            <div class="col-lg-5">
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
            </div>
            <div class="col-lg-7">
                <h4>This is not a default branch.</h4>
                <p>If you have multiple branches, a default branch will always load when you login.</p>
                <p>Make it a default branch?</p>
                <p>
                    <input type="radio" name="" id="" value="Yes"> Yes
                </p>
                <p>
                    <input type="radio" name="" id="" value="No"> No
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <input type="hidden" name="branch_id" value="<?Php echo $branch["branch_id"]; ?>" />
                <input type="submit" value="Save" name="" class="btn nav-btn">
            </div>
        </div>
    <?Php echo form_close(); ?>
<?Php else : ?>
    
<?Php endif; ?>