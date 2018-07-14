<div class="row menu-row">
    <div class="col-lg-12">
        <h4>Branch settings</h4>
    </div>
</div>
<div style="margin-top: 35px;" class="row text-center">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <a href="<?Php echo base_url(); ?>branch/update/<?Php echo $branch_id; ?>" class="setting-btn">
            <h2 class="branch-setting-icon icon-size"><i class="fa fa-pencil"></i></h2>
            <h4>Edit branch</h4>
            <p>Change branch details</p>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <a href="<?Php echo base_url(); ?>branch/services/<?Php echo $branch_id; ?>" class="setting-btn">
            <h2 class="branch-setting-icon icon-size"><i class="fa fa-stethoscope"></i></h2>
            <h4>Branch services</h4>
            <p>Manage branch services</p>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <a href="<?Php echo base_url(); ?>branch/workingdays/<?Php echo $branch_id; ?>" class="setting-btn">
            <h2 class="branch-setting-icon icon-size"><i class="fa fa-clock-o"></i></h2>
            <h4>Operational hours</h4>
            <p>Manage working hours</p>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <a href="<?Php echo base_url(); ?>branch/schedular/<?Php echo $branch_id; ?>" class="setting-btn">
            <h2 class="branch-setting-icon icon-size"><i class="fa fa-calendar-minus-o"></i></h2>
            <h4>Appointment schedule</h4>
            <p>Manage appointment duration</p>
        </a>
    </div>
</div>