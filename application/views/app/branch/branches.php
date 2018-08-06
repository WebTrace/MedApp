<div class="row menu-row">
    <div class="col-lg-6">
        <h4>My Branches</h4>
    </div>
    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav-controls pull-right">
                    <li>
                        <a href="<?Php echo base_url()?>addon/branch" class="link-menu addon-branch" id="addon-branch" accesskey="t">
                            <i class="fa fa-plus"></i> New branch
                        </a>
                    </li>
                    <li>
                        <a class="link-menu" href="#">
                            <i class="fa fa-lightbulb-o"></i> Tips
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div style="margin-top: 25px;" class="row">
    <?Php if(count($branches) > 0) : ?>
        <?Php foreach($branches as $branch) : ?>
            <div class="col-lg-4">
                <div class="branch-item">
                    <div class="row">
                        <div class="br-details-wrap">
                            <div class="col-lg-12">
                                <h5 style="font-size: 16px; font-weight: bold; margin: 0px 0px 10px; padding: 10px 0px; border-bottom: #f5f5f5 thin solid;"><?Php echo $branch['branch_name']; ?>
                                    <span class="pull-right">
                                        <?Php
                                            if($this->session->userdata("BRANCH_ID") == $branch['branch_id'])
                                            {
                                                echo "<span title='Default branch' class='def-branch'><i class='fa fa-check-circle'></i></span> ";
                                            }
                                        ?>
                                        <a title="Branch settings" id="branch-setup-link" href="<?Php echo base_url(); ?>branch/settings/<?Php echo md5($branch['branch_id']); ?>"><i class="fa fa-gear"></i></a>
                                    </span>
                                </h5>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="br-details-wrap">
                            <div class="col-lg-5">
                                Reference number
                            </div>
                            <div class="col-lg-7">
                                <span><?Php echo 56899745;//$branch['branch_name']; ?></span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="br-details-wrap">
                            <div class="col-lg-5">
                                Contact number
                            </div>
                            <div class="col-lg-7">
                                <span><?Php echo $branch['email_address']; ?></span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="br-details-wrap">
                            <div class="col-lg-5">
                                Address line
                            </div>
                            <div class="col-lg-7">
                                <span><?Php echo $branch['address_line']; ?></span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="br-details-wrap">
                            <div class="col-lg-5">
                                City
                            </div>
                            <div class="col-lg-7">
                                <span><?Php echo $branch['city']; ?></span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="br-details-wrap">
                            <div class="col-lg-5">
                                Province
                            </div>
                            <div class="col-lg-7">
                                <span><?Php echo $branch['province']; ?></span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="br-details-wrap">
                            <div class="col-lg-5">
                                Location
                            </div>
                            <div class="col-lg-7">
                                <span><?Php echo $branch['location']; ?></span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="br-details-wrap">
                            <div class="col-lg-5">
                                Date created
                            </div>
                            <div class="col-lg-7">
                                <span>
                                    <?Php
                                        $timestamp = strtotime($branch['date_created']);
                                        echo date('d M Y', $timestamp);
                                    ?>
                                </span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        <?Php endforeach; ?>
    <?Php else : ?>
        <p>No branches</p>
    <?Php endif; ?>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="modal fade waiting_room" id="buy-branch-denied">
            <div class="modal-dialog" id="buy-branch-addon-denied">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" class="close" data-dismiss="modal">&times;</a>
                        <h2 class="modal-title">Denied</h2>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Your branch edition limit is reached.</h4>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-save" id="">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="modal fade waiting_room" id="buy-branch">
            <div class="modal-dialog" id="buy-branch-addon">
                <div class="modal-content">
                    <?Php echo form_open(base_url() . "addon/buy", array('id' => 'frm-buy-branch')); ?>
                        <div class="modal-header">
                            <a href="#" class="close" data-dismiss="modal">&times;</a>
                            <h2 class="modal-title">BUY A BRANCH</h2>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4>Your branch edition limit is reached.</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <span id="item_name"></span>
                                    <span id="price"></span>
                                    <span id="vat"></span>
                                    <span id="total_price"></span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="" id="" value="branch_it">
                            <input type="hidden" name="" id="" value="">
                            <input type="hidden" name="" id="" value="">
                            <input type="hidden" name="" id="" value="">
                            <button type="submit" class="btn btn-save" id="">Buy</button>
                        </div>
                    <?Php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="modal fade waiting_room" id="create_branch">
            <div class="modal-dialog" id="newbranch-room-modal">
                <div class="modal-content">
                    <?Php echo form_open(base_url() . "branch/create_branch", array('id' => 'frm-create-branch')); ?>
                    <div class="modal-header">
                        <a href="#" class="close" data-dismiss="modal">&times;</a>
                        <h2 class="modal-title">ADD NEW BRANCH</h2>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-input-group">
                                    <input type="text" name="practice_name" id="" class="text-input" placeholder="Branch name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input-group">
                                    <input type="text" name="" id="" class="text-input" placeholder="Contact number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-input-group">
                                    <input type="text" name="" id="" class="text-input" placeholder="Email address">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input-group">
                                    <input type="text" name="address_line" id="" class="text-input" placeholder="Address line">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-input-group">
                                    <input type="text" name="" id="location" class="text-input" placeholder="Location">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input-group">
                                    <input type="text" name="city" id="" class="text-input" placeholder="City">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-input-group">
                                    <input type="text" name="" id="" class="text-input" placeholder="Postal code">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input-group">
                                    <input type="text" name="province" id="" class="text-input" placeholder="Province">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <?php if(count($specialities) > 0) : ?>
                                    <?php foreach($specialities as $speciality) : ?>
                                        <div>
                                            <input type="checkbox" name="speciality[]" value="<?Php echo $speciality['speciality_code']; ?>"> 
                                            <?Php echo $speciality['speciality_name']; ?>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-save" id="">
                            Save
                        </button>
                    </div>
                    <?Php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>