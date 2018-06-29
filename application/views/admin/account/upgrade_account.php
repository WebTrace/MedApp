<div class="row">
    <div class="col-lg-12">
        <h3>Upgrade account</h3>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h4>Account type</h4>
    </div>
    <div class="col-lg-12">
        <?Php echo form_open(base_url() . '', array('id' => '')); ?>
            <?php if(count($account_types) > 0) : ?>
                <?php foreach($account_types as $account_type) : ?>
                    <div>
                        <input type="radio" name="account_type" class="" /> <?Php echo $account_type['name']?>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
            <?php endif; ?>
        <?Php echo form_close(); ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="">Amount payable today</h4>
            </div>
            <div class="col-lg-12">
                <h4 class="">Amount payable today</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h4 class="">Monthly payment</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="">Payment details</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="edit-input-grouper">
                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                    <input type="text" name="" id="" class="edit-input" value="" placeholder="Account holder">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="edit-input-grouper">
                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                    <input type="text" name="" id="" class="edit-input" value="" placeholder="Account number">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="edit-input-grouper">
                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                    <input type="text" name="" id="" class="edit-input" value="" placeholder="CCV">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="edit-input-grouper">
                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                    <input type="text" name="" id="" class="edit-input" value="" placeholder="Expiry date">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="">
                    <input type="submit" name="" value="Proceed" class="nav-btn"/>
                </div>
            </div>
        </div>
    </div>
</div>