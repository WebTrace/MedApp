<div id="header-ribbon">
    <a href="#fh5co-main" class="smoothscroll fh5co-arrow to-animate hero-animate-4"><i class="ti-angle-down"></i></a>
    <!-- End fh5co-arrow -->
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            
        </div>
    </div>		
</div>

<div id="fh5co-main">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Signup for a premium package</h3>
            </div>
        </div>
        <div class="row">
            <?Php if(count($account_types) > 0) : ?>
                <?Php foreach($account_types as $account_type) : ?>
                    <div class="col-lg-4">
                        <div class="pricing-group">
                            <div class="pricing-header text-center">
                                <h3 style="margin: 0px; color: #fff;"><?php echo $account_type["name"]; ?></h3>
                            </div>
                            <div class="pricing-body text-center">
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
                                    <ul>
                                        <?Php if(count($account_type["feature_details"]) > 0) : ?>
                                            <?Php foreach($account_type["feature_details"] as $feature_detail) : ?>
                                        <li>
                                            
                                            <?php
                                            if($feature_detail["unit"] > 0) 
                                            {
                                                echo $feature_detail["unit"];
                                            }
                                                
                                            echo " " . $feature_detail["feature_name"]; ?>
                                        </li>
                                            <?Php endforeach; ?>
                                        <?Php else : ?>
                                        
                                        <?Php endif; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="pricing-footer">
                                <div class="text-center">
                                    <a target="_blank" class="signup-btn" href="<?Php echo base_url()?>signup/account_type/<?php echo strtolower($account_type["name"]); ?>">Sign up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?Php endforeach; ?>
            <?Php else : ?>
            
            <?Php endif; ?>
        </div>
    </div>
</div>
