<div class="row menu-row">
    <div class="col-lg-6">
        <h4><a class="nav-back-btn" href="<?Php echo base_url(); ?>branch/settings/<?Php echo $branch_id; ?>"><i class="fa fa-angle-left"></i></a> Operational hours</h4>
    </div>
    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav-controls pull-right">
                    <li>
                        <a href="<?Php echo base_url()?>addon/branch" class="link-menu addon-branch" id="addon-branch" accesskey="t">
                            <i class="fa fa-plus"></i> New service
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
<div class="row">
    <div class="col-lg-7">
        <h5 class="sub-branch-header upgrade-header">
            Manage working hours <a class="pull-right" href="#" data-toggle="modal" data-target="#edit-working-hours"><span><i class="fa fa-pencil"></i></span></a>
        </h5>
    </div>
</div>
<div class="row">
    <div class="col-lg-7">
        <div class="operational-hours-view">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Hours</th>
                        <th>Working days</th>
                    </tr>
                </thead>
                <tbody>
                    <?Php if(count($working_days) > 0) : ?>
                        <?Php foreach($working_days as $working_day) : ?>
                            <tr>
                                <td><?Php echo $working_day["weekday_name"]; ?></td>
                                <td><?Php echo $working_day["from"]; ?></td>
                                <td><?Php echo $working_day["to"]; ?></td>
                                <td>9 hrs</td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                        <?Php endforeach; ?>
                    <?Php else : ?>
                    
                    <?Php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="modal fade edit-working-hours" id="edit-working-hours">
            <div class="modal-dialog" id="working-hours">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" class="close" data-dismiss="modal">&times;</a>
                        <h2 class="modal-title">UPDATE A DAY</h2>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="edit-oprational-hours">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Day</th>
                                                <th>From</th>
                                                <th>To</th>
                                                <th>24 hours</th>
                                                <th>Block</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Mon</td>
                                                <td>08:00</td>
                                                <td>18:00</td>
                                                <td><input type="checkbox" name=""  class="" id=""/></td>
                                                <td><input type="checkbox" name=""  class="" id=""/></td>
                                            </tr>
                                            <tr>
                                                <td>Tue</td>
                                                <td>08:00</td>
                                                <td>18:00</td>
                                                <td><input type="checkbox" name=""  class="" id=""/></td>
                                                <td><input type="checkbox" name=""  class="" id=""/></td>
                                            </tr>
                                            <tr>
                                                <td>Wed</td>
                                                <td>08:00</td>
                                                <td>18:00</td>
                                                <td><input type="checkbox" name=""  class="" id=""/></td>
                                                <td><input type="checkbox" name=""  class="" id=""/></td>
                                            </tr>
                                            <tr>
                                                <td>Thu</td>
                                                <td>08:00</td>
                                                <td>18:00</td>
                                                <td><input type="checkbox" name=""  class="" id=""/></td>
                                                <td><input type="checkbox" name=""  class="" id=""/></td>
                                            </tr>
                                            <tr>
                                                <td>Fri</td>
                                                <td>08:00</td>
                                                <td>18:00</td>
                                                <td><input type="checkbox" name=""  class="" id=""/></td>
                                                <td><input type="checkbox" name=""  class="" id=""/></td>
                                            </tr>
                                            <tr>
                                                <td>Sat</td>
                                                <td>08:00</td>
                                                <td>18:00</td>
                                                <td><input type="checkbox" name=""  class="" id=""/></td>
                                                <td><input type="checkbox" name=""  class="" id=""/></td>
                                            </tr>
                                            <tr>
                                                <td>Sun</td>
                                                <td>08:00</td>
                                                <td>18:00</td>
                                                <td><input type="checkbox" name=""  class="" id=""/></td>
                                                <td><input type="checkbox" name=""  class="" id=""/></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-save" id="">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>