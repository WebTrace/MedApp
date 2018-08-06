<!-- start pricing area -->
<div id="pricing" class="pricing-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2>Pricing Table</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <!--<div class="col-md-4 col-sm-4 col-xs-12">
                <div class="pri_table_list">
                    <h3>basic <br/> <span>$80 / month</span></h3>
                    <ol>
                        <li class="check">Online system</li>
                        <li class="check cross">Full access</li>
                        <li class="check">Free apps</li>
                        <li class="check">Multiple slider</li>
                        <li class="check cross">Free domin</li>
                        <li class="check cross">Support unlimited</li>
                        <li class="check">Payment online</li>
                        <li class="check cross">Cash back</li>
                    </ol>
                    <button>sign up now</button>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="pri_table_list active">
                    <span class="saleon">top sale</span>
                    <h3>standard <br/> <span>$110 / month</span></h3>
                    <ol>
                        <li class="check">Online system</li>
                        <li class="check">Full access</li>
                        <li class="check">Free apps</li>
                        <li class="check">Multiple slider</li>
                        <li class="check cross">Free domin</li>
                        <li class="check">Support unlimited</li>
                        <li class="check">Payment online</li>
                        <li class="check cross">Cash back</li>
                    </ol>
                    <button>sign up now</button>
                </div>
            </div>-->
            <?Php if(count($account_types) > 0) : ?>
                <?Php foreach($account_types as $account_type) : ?>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="pri_table_list active">
                            <?Php echo form_open(base_url() . "signup"); ?>
                                <span class="saleon">VAT excl</span>
                                <h3><?php echo $account_type["name"]; ?> <br/> <span>R <?php echo $account_type["price"]; ?> / PM</span></h3>
                                <ol>
                                    <?Php foreach($account_type["feature_details"] as $feature_detail) : ?>
                                        <li class="check">
                                            <?php
                                                if($feature_detail["feature_unit"] != null) {
                                                    echo $feature_detail["feature_unit"] . " ";
                                                }

                                                echo $feature_detail["feature_name"];
                                            ?>
                                        </li>
                                    <?Php endforeach; ?>
                                </ol>
                                <input type="hidden" name="account_type" value="<?php echo md5($account_type["account_type_code"]); ?>" />
                                <button type="submit">sign up now</button>
                            <?Php echo form_close(); ?>
                        </div>
                    </div>
                <?Php endforeach; ?>
            <?Php else : ?>

            <?Php endif; ?>
        </div>
    </div>
</div>
<!-- End pricing table area -->