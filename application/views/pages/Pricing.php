<div id="header-ribbon">
    <a href="#fh5co-main" class="smoothscroll fh5co-arrow to-animate hero-animate-4"><i class="ti-angle-down"></i></a>
    <!-- End fh5co-arrow -->
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            
        </div>
    </div>		
</div>

<div id="fh5co-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="package-header">
                    <h3 class="text-center">Choose your package and sign up for 15 days free trial.</h3>
                </div>

        <div class="cus-table">
            <div class="row cus-row">
                <?Php if(count($account_types) > 0) : ?>
                    <?Php foreach($account_types as $account_type) : ?>
                        <div class="col-lg-4">
                            <div class="pricing-group">
                                <?Php echo form_open(base_url() . "signup"); ?>
                                    <div class="pricing-header text-center">
                                        <h3 style="margin: 0px; color: #fff;"><?php echo $account_type["name"]; ?></h3>
                                    </div>
                                    <div class="pricing-body cus-cell text-center">
                                        <div class="price-header">
                                            <div class="feature-price">
                                                <div style="position: relative;">
                                                    <span style="vertical-align: super;">R</span> 
                                                    <span style="font-size: 35px;"><?php echo $account_type["price"]; ?></span>
                                                </div>
                                                <div>
                                                    <span style="margin: 0px;">pm</span>
                                                </div>
                                            </div>
                                            <div class="">
                                                <p class="vat-display">VAT excluded</p>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="feature-header">
                                            <h5 style="margin: 0px; font-size: 18px;">Features</h5>
                                        </div>
                                        <div class="feature-body">
                                            <?Php if(count($account_type["feature_details"]) > 0) : ?>
                                                <ul>
                                                    <?Php foreach($account_type["feature_details"] as $feature_detail) : ?>
                                                        <li>
                                                            <?php
                                                                if($feature_detail["feature_unit"] != null) {
                                                                    echo $feature_detail["feature_unit"] . " ";
                                                                }

                                                                echo $feature_detail["feature_name"];
                                                            ?>
                                                        </li>
                                                    <?Php endforeach; ?>
                                                </ul>
                                            <?Php else : ?>

                                            <?Php endif; ?>
                                        </div>
                                        <?Php if(count($account_type["addons"]) > 0) : ?>
                                            <hr />
                                            <div class="feature-header">
                                                <h5 style="margin: 0px; font-size: 18px;">Add-ons</h5>
                                            </div>
                                            <div class="addon-body">
                                                <ul>
                                                    <?Php foreach($account_type["addons"] as $addon) : ?>
                                                        <li><span style="font-size: 12px;">R</span> <span class=""><?php echo $addon["price"]; ?></span> <span class=""> / </span> <span class=""><?Php echo $addon["feature_name"]; ?></span></li>
                                                    <?Php endforeach; ?>
                                                </ul>
                                            </div>
                                        <?Php else : ?>

                                        <?Php endif; ?>
<<<<<<< HEAD
                                    </div>
                                    <div class="pricing-footer">
                                        <div class="text-center">
                                            <input type="hidden" name="account_type" value="<?php echo md5($account_type["account_type_code"]); ?>" />
                                            <input type="submit" value="Try now" class="signup-btn sec-signup" />
                                            <!--<a target="_blank" class="signup-btn" href="<?Php echo base_url()?>signup/account_type/<?php echo strtolower($account_type["name"]); ?>">Try now</a>-->
                                        </div>
                                    </div>
                                <?Php echo form_open(); ?>
=======
                                    </ul>
                                </div>
                                <hr />
                                <div class="feature-header">
                                    <h5 style="margin: 0px; font-size: 18px;">Add-ons</h5>
                                </div>
                            </div>
                            <div class="pricing-footer">
                                <div class="text-center">
                                    <a target="_blank" class="signup-btn" href="<?Php echo base_url()?>signup/account_type/<?php echo strtolower($account_type["name"]); ?>">Try now</a>
                                </div>
>>>>>>> 82f5726eb659182ca21548e9693a70ecff3ce803
                            </div>
                        </div>
                    <?Php endforeach; ?>
                <?Php else : ?>

                <?Php endif; ?>
            </div>
        </div>
    </div>
</div>
