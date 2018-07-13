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
            Manage working days <a class="pull-right" href="#" data-toggle="modal" data-target="#edit-working-hours"><span><i class="fa fa-pencil"></i></span> Edit</a>
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
                        <?Php foreach($working_days as $working_day) : 
                            $o_time = strtotime($working_day["to_time"]);
                            $from_time = strtotime($working_day["from_time"]);
                    
                            $total_working_hours = round(abs($o_time - $from_time) / 3600, 2)
                        ?>
                            <tr>
                                <td><?Php echo $working_day["weekday_name"]; ?></td>
                                <td><?Php echo date('h:i', strtotime($working_day["from_time"])); ?> - am</td>
                                <td><?Php echo date('h:i', strtotime($working_day["to_time"])); ?> - pm</td>
                                <td><?Php echo $total_working_hours; ?></td>
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
                                <?Php echo form_open(base_url() . "workdays/add", array("id" => "")); ?>
                                    <div class="edit-oprational-hours">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Day</th>
                                                    <th>From</th>
                                                    <th>To</th>
                                                    <th>Block</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Mon</td>
                                                    <td>
                                                        <select name="mon_hr_start" id="mon_start_hr">
                                                            <option value="06:00">06:00</option>
                                                            <option value="06:30">06:30</option>
                                                            <option value="07:00">07:00</option>
                                                            <option value="07:30">07:30</option>
                                                            <option value="08:00">08:00</option>
                                                            <option value="08:30">08:30</option>
                                                            <option value="09:00">09:00</option>
                                                            <option value="09:30">09:30</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="10:30">10:30</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="11:30">11:30</option>
                                                            <option value="12:00">12:00</option>
                                                        </select>
                                                        <select name="mon_hr_start_fmt" id="mon_start_fmt" class="">
                                                            <option>am</option>
                                                            <option>pm</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="mon_hr_end" id="mon_end_hr">
                                                            <option value="06:00">06:00</option>
                                                            <option value="06:30">06:30</option>
                                                            <option value="07:00">07:00</option>
                                                            <option value="07:30">07:30</option>
                                                            <option value="08:00">08:00</option>
                                                            <option value="08:30">08:30</option>
                                                            <option value="09:00">09:00</option>
                                                            <option value="09:30">09:30</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="10:30">10:30</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="11:30">11:30</option>
                                                            <option value="12:00">12:00</option>
                                                        </select>
                                                        <select name="mon_hr_end_fmt" id="mon_end_fmt" class="">
                                                            <option>am</option>
                                                            <option>pm</option>
                                                        </select>
                                                    </td>
                                                    <td><input type="checkbox" name="mon_block"  class="" id="mon_block"/></td>
                                                </tr>
                                                <tr>
                                                    <td>Tue</td>
                                                    <td>
                                                        <select name="tue_start_hr" id="tue_start_hr">
                                                            <option value="06:00">06:00</option>
                                                            <option value="06:30">06:30</option>
                                                            <option value="07:00">07:00</option>
                                                            <option value="07:30">07:30</option>
                                                            <option value="08:00">08:00</option>
                                                            <option value="08:30">08:30</option>
                                                            <option value="09:00">09:00</option>
                                                            <option value="09:30">09:30</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="10:30">10:30</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="11:30">11:30</option>
                                                            <option value="12:00">12:00</option>
                                                        </select>
                                                        <select name="tue_start_fmt" id="tue_start_fmt">
                                                            <option>am</option>
                                                            <option>pm</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="tue_end_hr" id="tue_end_hr">
                                                            <option value="06:00">06:00</option>
                                                            <option value="06:30">06:30</option>
                                                            <option value="07:00">07:00</option>
                                                            <option value="07:30">07:30</option>
                                                            <option value="08:00">08:00</option>
                                                            <option value="08:30">08:30</option>
                                                            <option value="09:00">09:00</option>
                                                            <option value="09:30">09:30</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="10:30">10:30</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="11:30">11:30</option>
                                                            <option value="12:00">12:00</option>
                                                        </select>
                                                        <select name="tue_end_fmt" id="tue_end_fmt">
                                                            <option>am</option>
                                                            <option>pm</option>
                                                        </select>
                                                    </td>
                                                    <td><input type="checkbox" name=""  class="" id="tue_block"/></td>
                                                </tr>
                                                <tr>
                                                    <td>Wed</td>
                                                    <td>
                                                        <select>
                                                            <option value="06:00">06:00</option>
                                                            <option value="06:30">06:30</option>
                                                            <option value="07:00">07:00</option>
                                                            <option value="07:30">07:30</option>
                                                            <option value="08:00">08:00</option>
                                                            <option value="08:30">08:30</option>
                                                            <option value="09:00">09:00</option>
                                                            <option value="09:30">09:30</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="10:30">10:30</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="11:30">11:30</option>
                                                            <option value="12:00">12:00</option>
                                                        </select>
                                                        <select name="" class="">
                                                            <option>am</option>
                                                            <option>pm</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select>
                                                            <option value="06:00">06:00</option>
                                                            <option value="06:30">06:30</option>
                                                            <option value="07:00">07:00</option>
                                                            <option value="07:30">07:30</option>
                                                            <option value="08:00">08:00</option>
                                                            <option value="08:30">08:30</option>
                                                            <option value="09:00">09:00</option>
                                                            <option value="09:30">09:30</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="10:30">10:30</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="11:30">11:30</option>
                                                            <option value="12:00">12:00</option>
                                                        </select>
                                                        <select name="" class="">
                                                            <option>am</option>
                                                            <option>pm</option>
                                                        </select>
                                                    </td>
                                                    <td><input type="checkbox" name=""  class="" id=""/></td>
                                                </tr>
                                                <tr>
                                                    <td>Thu</td>
                                                    <td>
                                                        <select>
                                                            <option value="06:00">06:00</option>
                                                            <option value="06:30">06:30</option>
                                                            <option value="07:00">07:00</option>
                                                            <option value="07:30">07:30</option>
                                                            <option value="08:00">08:00</option>
                                                            <option value="08:30">08:30</option>
                                                            <option value="09:00">09:00</option>
                                                            <option value="09:30">09:30</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="10:30">10:30</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="11:30">11:30</option>
                                                            <option value="12:00">12:00</option>
                                                        </select>
                                                        <select name="" class="">
                                                            <option>am</option>
                                                            <option>pm</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select>
                                                            <option value="06:00">06:00</option>
                                                            <option value="06:30">06:30</option>
                                                            <option value="07:00">07:00</option>
                                                            <option value="07:30">07:30</option>
                                                            <option value="08:00">08:00</option>
                                                            <option value="08:30">08:30</option>
                                                            <option value="09:00">09:00</option>
                                                            <option value="09:30">09:30</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="10:30">10:30</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="11:30">11:30</option>
                                                            <option value="12:00">12:00</option>
                                                        </select>
                                                        <select name="" class="">
                                                            <option>am</option>
                                                            <option>pm</option>
                                                        </select>
                                                    </td>
                                                    <td><input type="checkbox" name=""  class="" id=""/></td>
                                                </tr>
                                                <tr>
                                                    <td>Fri</td>
                                                    <td>
                                                        <select>
                                                            <option value="06:00">06:00</option>
                                                            <option value="06:30">06:30</option>
                                                            <option value="07:00">07:00</option>
                                                            <option value="07:30">07:30</option>
                                                            <option value="08:00">08:00</option>
                                                            <option value="08:30">08:30</option>
                                                            <option value="09:00">09:00</option>
                                                            <option value="09:30">09:30</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="10:30">10:30</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="11:30">11:30</option>
                                                            <option value="12:00">12:00</option>
                                                        </select>
                                                        <select name="" class="">
                                                            <option>am</option>
                                                            <option>pm</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select>
                                                            <option value="06:00">06:00</option>
                                                            <option value="06:30">06:30</option>
                                                            <option value="07:00">07:00</option>
                                                            <option value="07:30">07:30</option>
                                                            <option value="08:00">08:00</option>
                                                            <option value="08:30">08:30</option>
                                                            <option value="09:00">09:00</option>
                                                            <option value="09:30">09:30</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="10:30">10:30</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="11:30">11:30</option>
                                                            <option value="12:00">12:00</option>
                                                        </select>
                                                        <select name="" class="">
                                                            <option>am</option>
                                                            <option>pm</option>
                                                        </select>
                                                    </td>
                                                    <td><input type="checkbox" name=""  class="" id=""/></td>
                                                </tr>
                                                <tr>
                                                    <td>Sat</td>
                                                    <td>
                                                        <select>
                                                            <option value="06:00">06:00</option>
                                                            <option value="06:30">06:30</option>
                                                            <option value="07:00">07:00</option>
                                                            <option value="07:30">07:30</option>
                                                            <option value="08:00">08:00</option>
                                                            <option value="08:30">08:30</option>
                                                            <option value="09:00">09:00</option>
                                                            <option value="09:30">09:30</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="10:30">10:30</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="11:30">11:30</option>
                                                            <option value="12:00">12:00</option>
                                                        </select>
                                                        <select name="" class="">
                                                            <option>am</option>
                                                            <option>pm</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select>
                                                            <option value="06:00">06:00</option>
                                                            <option value="06:30">06:30</option>
                                                            <option value="07:00">07:00</option>
                                                            <option value="07:30">07:30</option>
                                                            <option value="08:00">08:00</option>
                                                            <option value="08:30">08:30</option>
                                                            <option value="09:00">09:00</option>
                                                            <option value="09:30">09:30</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="10:30">10:30</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="11:30">11:30</option>
                                                            <option value="12:00">12:00</option>
                                                        </select>
                                                        <select name="" class="">
                                                            <option>am</option>
                                                            <option>pm</option>
                                                        </select>
                                                    </td>
                                                    <td><input type="checkbox" name=""  class="" id=""/></td>
                                                </tr>
                                                <tr>
                                                    <td>Sun</td>
                                                    <td>
                                                        <select>
                                                            <option value="06:00">06:00</option>
                                                            <option value="06:30">06:30</option>
                                                            <option value="07:00">07:00</option>
                                                            <option value="07:30">07:30</option>
                                                            <option value="08:00">08:00</option>
                                                            <option value="08:30">08:30</option>
                                                            <option value="09:00">09:00</option>
                                                            <option value="09:30">09:30</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="10:30">10:30</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="11:30">11:30</option>
                                                            <option value="12:00">12:00</option>
                                                        </select>
                                                        <select name="" class="">
                                                            <option>am</option>
                                                            <option>pm</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select>
                                                            <option value="06:00">06:00</option>
                                                            <option value="06:30">06:30</option>
                                                            <option value="07:00">07:00</option>
                                                            <option value="07:30">07:30</option>
                                                            <option value="08:00">08:00</option>
                                                            <option value="08:30">08:30</option>
                                                            <option value="09:00">09:00</option>
                                                            <option value="09:30">09:30</option>
                                                            <option value="10:00">10:00</option>
                                                            <option value="10:30">10:30</option>
                                                            <option value="11:00">11:00</option>
                                                            <option value="11:30">11:30</option>
                                                            <option value="12:00">12:00</option>
                                                        </select>
                                                        <select name="" class="">
                                                            <option>am</option>
                                                            <option>pm</option>
                                                        </select>
                                                    </td>
                                                    <td><input type="checkbox" name=""  class="" id=""/></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                <?Php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-save" id="update_branch_working_hrs">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>