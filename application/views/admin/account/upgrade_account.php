<div class="row">
    <div class="col-lg-12">
        <h3 style="margin-bottom: 0px;">Upgrade account</h3>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h4 class="upgrade-header">Account type</h4>
    </div>
    <?php if(count($account_types) > 0) : ?>
        <div class="col-lg-8">
            <?Php echo form_open(base_url() . '', array('id' => '')); ?>
                <div class="row">
                    <?php foreach($account_types as $account_type) : ?>
                        <div class="col-lg-4">
                            <div class="account-tile">
                                <?Php echo $account_type['name']; ?>
                                <input type="hidden" name="account_type" value="<?Php echo $account_type['account_type_code']; ?>" />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?Php echo form_close(); ?>
        </div>
    <?php else : ?>
        
    <?php endif; ?>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="upgrade-header">Amount payable today</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <table class="table">
                        <tr>
                            <td>Account type</td>
                            <td>Standarad</td>
                        </tr>
                        <tr>
                            <td>Amount</td>
                            <td>R 246.24</td>
                        </tr>
                        <tr>
                            <td>VAT</td>
                            <td>R 56.12</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td><span class="disp-price">R 312.34</span></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h4 class="upgrade-header">Monthly payment</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <p style="margin: 0px; padding: 10px 0px;">Please note that this payment will start on the 21/07/2018.</p>
                </div>
                <div class="">
                    <table class="table">
                        <tr>
                            <td>Account type</td>
                            <td>Standarad</td>
                        </tr>
                        <tr>
                            <td>Amount</td>
                            <td>R 246.24</td>
                        </tr>
                        <tr>
                            <td>VAT</td>
                            <td>R 56.12</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td><span class="disp-price">R 312.34</span></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="upgrade-header">Payment details</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="edit-input-grouper sp-margin">
                    <div class="pay-label"><label>Account holder</label></div>
                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                    <input type="text" name="" id="" class="edit-input" value="">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="edit-input-grouper sp-margin">
                    <div class="pay-label"><label>Account number</label></div>
                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                    <input type="text" name="" id="" class="edit-input" value="">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="edit-input-grouper sp-margin">
                    <div class="pay-label"><label>CCV</label></div>
                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                    <input type="text" name="" id="" class="edit-input" value="">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="edit-input-grouper sp-margin">
                    <div class="pay-label"><label>Expiry date</label></div>
                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                    <input type="text" name="" id="" class="edit-input" value="">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="sp-margin">
                    <input type="checkbox" name="" /> I accept terms and conditions
                </div>
            </div>
            <div class="col-lg-12">
                <div class="sp-margin">
                    <input type="submit" name="" value="Proceed" class="nav-btn"/>
                </div>
            </div>
        </div>
    </div>
</div>