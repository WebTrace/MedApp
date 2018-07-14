<div class="row menu-row">
    <div class="col-lg-6">
        <h4><a class="nav-back-btn" href="<?Php echo base_url(); ?>branch/settings/<?Php echo $branch_id; ?>"><i class="fa fa-angle-left"></i></a> Services manager</h4>
    </div>
    <div class="col-lg-6">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav-controls pull-right">
                    <li>
                        <a data-toggle="modal" data-target="#add-service-modal" href="#" accesskey="t">
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
    <div class="col-lg-12">
        <div class="">
            <label for="">Appoontment start time</label>
            <select name="">
                <option>06:00</option>
                <option>06:30</option>
                <option>07:00</option>
                <option>07:30</option>
                <option>08:00</option>
                <option>08:30</option>
                <option>09:00</option>
                <option>09:30</option>
                <option>10:00</option>
                <option>10:30</option>
                <option>11:00</option>
                <option>11:30</option>
                <option>12:00</option>
            </select>
            <select name="">
                <option>am</option>
                <option>pm</option>
            </select>
        </div>
        <div class="">
            <label for="">Appointment duration</label>
            <select name="appointment_duration">
                <option></option>
                <option>15 minutes</option>
                <option>30 minutes</option>
            </select>
        </div>
    </div>
</div>