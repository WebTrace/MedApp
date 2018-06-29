<!--<div class="row top-spacing">
    <div class="col-lg-4">
        <div class='media'>
            <span class='pull-left format-span'>
                <i class='fa fa-user-o'></i>
            </span>
            <div style="padding-top: 3px;" class='media-body'>
                <h4 class='media-heading'>
                    <div>Name &nbsp; : Emmanuel Kgatla</div>
                    <div>ID &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: 951223 5648 058</div>
                </h4>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        
    </div>
    <div class="col-lg-4">
        <div style="width: 215px;" class='media pull-right'>
            <span style="font-size: 25px; color: #ccc;" class='pull-left'>
                <i class='fa fa-address-book'></i>
            </span>
            <div style="padding-top: 3px;" class='media-body'>
                <h4 class='media-heading'>
                    <div>File no &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: F00000001</div>
                    <div>Date created &nbsp; &nbsp; : 20 Feb 2017</div>
                </h4>
            </div>
        </div>
    </div>
</div>-->
<div class="row menu-row fixed-inner-nav">
    <div class="col-lg-12">
        <ul id="navi-tabs" class="nav nav-tabs fi-tabs">
            <li class="active"><a href="#fi-dashboard" data-toggle="tab">Overview</a></li>
            <li><a href="#fi-diagnosis" data-toggle="tab">Consultations</a></li>
            <li><a href="#fi-appointments" data-toggle="tab">Appontments</a></li>
            <li><a href="#attached-files" data-toggle="tab">Attached files</a></li>
            <li><a href="#fi-billing" data-toggle="tab">Billing</a></li>
            <li><a href="#fi-patient-info" data-toggle="tab">Patient information</a></li>
            <li><a href="#next-checkup" data-toggle="tab">Next checkup</a></li>
        </ul>
    </div>
</div>
<div class="row fixed-spacing">
    <div class="col-lg-12">
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="fi-dashboard">
                <p>Patient summary</p>
                <p>Profile (names, file number)</p>
                <p>Flags (notifications)</p>
                <p>Consultation</p>
                <p>Billing</p>
                <p></p>
                <p></p>
            </div>
            <div class="tab-pane" id="fi-diagnosis">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="history-pane">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 style="font-size: 16px">Consultation history
                                        <span style="cursor: pointer; color: #ccc;" class="pull-right">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </h4>
                                </div>
                            </div>
                            <div class="consultation-history">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title">
                                                        <a style="margin-top: 0px; margin-bottom: 15px; font-size: 14px;" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            Year: 2018 <span style="color: #bbb; font-size: 10px;" class="pull-right glyphicon glyphicon-chevron-right"></span>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                        <?Php for($i = 0; $i < 5; $i++) : ?>
                                                        <div class="history-item">
                                                            <a style="color: #615959;" href="#">
                                                                <p style="margin-bottom: 2px;" class="small text-muted">
                                                                    <i class="fa fa-clock-o"></i> 23 Jan 2017
                                                                    <span class="pull-right text-muted">
                                                                        Billing: Medical aid
                                                                    </span>
                                                                </p>
                                                                <!--<p style="font-size: 15px">This is the consultation title</p>-->
                                                                <p style="font-size: 13px;">
                                                                    This should be the discription of the diagnosis. It should have limited number of words.
                                                                </p>
                                                            </a>
                                                        </div>
                                                        <hr class="con-deviver">
                                                        <?Php endfor; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title">
                                                        <a style="margin-top: 0px; margin-bottom: 15px; font-size: 14px;" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            Year: 2017 <span style="color: #bbb; font-size: 10px;" class="pull-right glyphicon glyphicon-chevron-right"></span>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                        Bo
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <a style="margin-top: 0px; margin-bottom: 15px; font-size: 14px;" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            Year: 2016 <span style="color: #bbb; font-size: 10px;" class="pull-right glyphicon glyphicon-chevron-right"></span>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="panel-body">            
                                                        Bo
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                    <h4 style="font-size: 16px">Consultations details</h4>
                                </div>
                            </div>
                        </div>
                        <div class="file-details">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5 class="h5-content" style="font-size: 15px; margin-bottom: 20px;">Visitng reason</h5>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="consultation-details">
                                                <p style="text-align: justify;">
                                                    Most people exposed to the cholera bacterium (Vibrio cholerae) don't become ill and 
                                                    never know they've been infected. Yet because they shed cholera bacteria in their 
                                                    stool for seven to 14 days, they can still infect others through contaminated water. 
                                                    Most symptomatic cases of cholera cause mild or moderate diarrhea that's often hard to 
                                                    distinguish from diarrhea caused by other problems.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5 class="h5-content" style="font-size: 15px">Treatments list</h5>
                                        </div>
                                        <div class="col-lg-12">
                                            <table class="table">
                                                <thead>
                                                    <tr style="background: #fff; color: #666;">
                                                        <th>No</th>
                                                        <th>Date</th>
                                                        <th>Practitioner</th>
                                                        <th>billing type</th>
                                                        <th>Amount</th>
                                                        <th>Balance</th>
                                                        <th colspan="2">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>12 Nov 2017</td>
                                                        <td>Alfred Mosweu</td>
                                                        <td>Medical aid</td>
                                                        <td>R 350.00</td>
                                                        <td>R 0.00</td>
                                                        <td><a href=""><i class="fa fa-folder-open"></i></a></td>
                                                        <td><a href=""><i class="fa fa-pencil"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>12 Nov 2017</td>
                                                        <td>Alfred Mosweu</td>
                                                        <td>Medical aid</td>
                                                        <td>R 350.00</td>
                                                        <td>R 0.00</td>
                                                        <td><a href=""><i class="fa fa-folder-open"></i></a></td>
                                                        <td><a href=""><i class="fa fa-pencil"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5 class="h5-content" style="font-size: 15px">Attached diagnosis files</h5>
                                            <ul class="fi-files-attached">
                                               <li>
                                                   <a href="#" class="fi-file-item">
                                                       <div style="margin-bottom: 0px;" class='media'>
                                                           <span style="font-size: 25px;" class='pull-left'>
                                                               <i class="fa fa-copy"></i>
                                                           </span>
                                                           <div class='media-body'>
                                                               <h4 class='media-heading'>
                                                                   <p style="margin-bottom: 2px;" class="small text-muted">
                                                                       <i class="fa fa-clock-o"></i> 23 Jan 2017
                                                               </h4>
                                                               <p style="font-size: 12px;">X-Ray scan</p>
                                                           </div>
                                                       </div>
                                                   </a>
                                               </li>
                                                <li>
                                                    <a href="#" class="fi-file-item">
                                                        <div style="margin-bottom: 0px;" class='media'>
                                                            <span style="font-size: 25px;" class='pull-left'>
                                                                <i class="fa fa-copy"></i>
                                                            </span>
                                                            <div class='media-body'>
                                                                <h4 class='media-heading'>
                                                                    <p style="margin-bottom: 2px;" class="small text-muted">
                                                                        <i class="fa fa-clock-o"></i> 23 Jan 2017
                                                                </h4>
                                                                <p style="font-size: 12px;">X-Ray scan</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="">
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            
                                        </div>
                                    </div>
                                    <div class="consultation-treatment">
                                        Treatment
                                        Total cost
                                        Amount due
                                        Billing type
                                        <ul>
                                            <li>External treatment</li>
                                            <li>Account</li>
                                        </ul>

                                    </div>
                                    <div class="consultation-docs">
                                        Docs
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <h5 class="h5-content" style="font-size: 15px">Invoice</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="fi-appointments">
                Appointments
            </div>
            <div class="tab-pane" id="fi-billing">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 style="display: inline-block; margin: 0px;" class="edit-details-header">Billing Details</h4>
                        <ul class="nav-controls pull-right">
                            <li><a class="cus-menu-link link-menu" href="#"><i class="fa fa-plus"></i> Billing: Momentum</a></li>
                            <li><a class="cus-menu-link link-menu" href="#"><i class="fa fa-plus"></i> New billing type</a></li>
                            <li><a class="cus-menu-link link-menu" href="#"><i class="fa fa-pencil"></i> Edit</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        Billing details
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="billing-header"><h4>Billing types</h4></div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="fi-patient-info">
                <div class="row">
                    <div class="col-lg-6 border-right">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4 class="edit-details-header">Personal details</h4>
                            </div>
                        </div>
                        <div class="row edit-group">
                            <div class="col-lg-4">
                                Title
                            </div>
                            <div class="col-lg-7">
                                <div class="">
                                    <input type="text" name="title" class="edit-input" value="<?Php echo $patient_details['title']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row edit-group">
                            <div class="col-lg-4">
                                First name
                            </div>
                            <div class="col-lg-7">
                                <div class="edit-input-grouper">
                                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                    <input type="text" name="firstname" class="edit-input" value="<?Php echo $patient_details['first_name']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row edit-group">
                            <div class="col-lg-4">
                                Middle name
                            </div>
                            <div class="col-lg-7">
                                <div class="edit-input-grouper">
                                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                    <?Php
                                        $middle_name= $patient_details['middle_name'];
                                        
                                        if($middle_name == null || $middle_name == "")
                                        {
                                            $middle_name = $non_applicable;
                                        }
                                    ?>
                                    <input type="text" class="edit-input" value="<?Php echo $middle_name; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row edit-group">
                            <div class="col-lg-4">
                                Last name
                            </div>
                            <div class="col-lg-7">
                                <div class="edit-input-grouper">
                                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                    <input type="text" name="lastname" class="edit-input" value="<?Php echo $patient_details['last_name']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row edit-group">
                            <div class="col-lg-4">
                                Date of birth
                            </div>
                            <div class="col-lg-7">
                                <div class="edit-input-grouper">
                                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                    <input type="text" name="lastname" class="edit-input" value="<?Php echo $patient_details['dob']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row edit-group">
                            <div class="col-lg-4">
                                ID number
                            </div>
                            <div class="col-lg-7">
                                <div class="edit-input-grouper">
                                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                    <input type="text" name="lastname" class="edit-input" value="<?Php echo $patient_details['id_number']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row edit-group">
                            <div class="col-lg-4">
                                Age
                            </div>
                            <div class="col-lg-7">
                                <div class="edit-input-grouper">
                                    <span class="non-edit-data-icon"><i class="fa fa-lock"></i></span>
                                    <input type="text" disabled="disabled" class="edit-input" value="<?Php echo $age; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row edit-group">
                            <div class="col-lg-4">
                                Gender
                            </div>
                            <div class="col-lg-7">
                                <div class="edit-input-grouper">
                                    <span class="non-edit-data-icon"><i class="fa fa-lock"></i></span>
                                    <input type="text" disabled="disabled" name="lastname" class="edit-input" value="<?Php echo $patient_details['gender']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row edit-group item-border-bottom">
                            <div class="col-lg-4">
                                Ethnic group
                            </div>
                            <div class="col-lg-7">
                                <div class="edit-input-grouper">
                                    <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                    <input style="border-bottom: none;" type="text" name="lastname" class="edit-input" value="<?Php echo $patient_details['ethnic_group']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row edit-group">
                                    <div class="col-lg-12">
                                        <h4 class="edit-details-header">Work details</h4>
                                    </div>
                                </div>
                                <div class="row edit-group">
                                    <div class="col-lg-4">
                                        Employer
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="edit-input-grouper">
                                            <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                            <input type="text" name="" class="edit-input" value="Sword SA">
                                        </div>
                                    </div>
                                </div>
                                <div class="row edit-group">
                                    <div class="col-lg-4">
                                        Occupation
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="edit-input-grouper">
                                            <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                            <input type="text" name="" class="edit-input" value="Junior Technical consultant">
                                        </div>
                                    </div>
                                </div>
                                <div class="row edit-group">
                                    <div class="col-lg-4">
                                        Contact number
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="edit-input-grouper">
                                            <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                            <input type="text" name="" class="edit-input" value="011 023 2365">
                                        </div>
                                    </div>
                                </div>
                                <div class="row edit-group">
                                    <div class="col-lg-4">
                                        Email address
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="edit-input-grouper">
                                            <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                            <input type="text" name="" class="edit-input" value="hr@swaord-sa.com">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="edit-details-header">Contact details <a id="add-new-contact" title="Add new contact" href="#" class="pull-right add-patient-field"><i class="fa fa-plus"></i></a></h4>
                                    </div>
                                </div>
                                <div class="row edit-group">
                                    <div class="col-lg-5">
                                        Contact number
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <?Php if(count($patient_phone_contacts) > 0) : ?>
                                                <div class="col-lg-12">
                                                    <ul class="data-repeat">
                                                        <?Php foreach($patient_phone_contacts as $phone_contact) : ?>
                                                            <li class="edit-input-grouper">
                                                                <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                                                <input type="text" name="contact_no[]" class="edit-input" value="<?Php echo $phone_contact['contact_no']; ?>">
                                                            </li>
                                                        <?Php endforeach; ?>
                                                    </ul>
                                                </div>
                                            <?Php else : ?>
                                                <div class="col-lg-12">
                                                    <div class="edit-input-grouper">
                                                        <p class="no-data-found">No contact numbers found.</p>
                                                    </div>
                                                </div>
                                            <?Php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row edit-group item-border-bottom">
                                    <div class="col-lg-5">
                                        Email address
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <?Php if(count($patient_email_contacts) > 0) : ?>
                                                <div class="col-lg-12">
                                                    <ul class="data-repeat">
                                                        <?Php foreach($patient_email_contacts as $email_contact) : ?>
                                                            <li class="edit-input-grouper">
                                                                <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                                                <?Php if(count($patient_email_contacts) == 1) { $border_style = "border-bottom: none;"; } else { $border_style = ""; } ?>
                                                                <input style="<?php echo $border_style; ?>" type="text" name="email_contact[]" 
                                                                       class="edit-input custom-border-remove" value="<?Php echo $email_contact['email_address']; ?>">
                                                            </li>
                                                        <?Php endforeach; ?>
                                                    </ul>
                                                </div>
                                            <?Php else : ?>
                                                <div class="col-lg-12">
                                                    <div class="edit-input-grouper">
                                                        <p class="no-data-found">No email addresses found.</p>
                                                    </div>
                                                </div>
                                            <?Php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="edit-details-header">Physical address</h4>
                                    </div>
                                </div>
                                <div class="row edit-group">
                                    <div class="col-lg-5">
                                        Address line 1
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="edit-input-grouper">
                                            <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                            <input type="" name="" class="edit-input" value="7361">
                                        </div>
                                    </div>
                                </div>
                                <div class="row edit-group edit-group">
                                    <div class="col-lg-5">
                                        Address line 2
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="edit-input-grouper">
                                            <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                            <input type="" name="" class="edit-input" value="Extension 3">
                                        </div>
                                    </div>
                                </div>
                                <div class="row edit-group">
                                    <div class="col-lg-5">
                                        Suburb
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="edit-input-grouper">
                                            <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                            <input type="" name="suburb" class="edit-input" value="Soshanguve East">
                                        </div>
                                    </div>
                                </div>
                                <div class="row edit-group">
                                    <div class="col-lg-5">
                                        City
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="edit-input-grouper">
                                            <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                            <input type="" name="City" class="edit-input" value="Pretoria">
                                        </div>
                                    </div>
                                </div>
                                <div class="row edit-group item-border-bottom">
                                    <div class="col-lg-5">
                                        Postal code
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="edit-input-grouper">
                                            <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                            <input style="border-bottom: none;" type="" name="" class="edit-input" value="0152">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row edit-group">
                                    <div class="col-lg-12">
                                        <h4 class="edit-details-header">Postal address <a title="Add postal address" href="#" class="pull-right add-patient-field"><i class="fa fa-plus"></i></a></h4>
                                    </div>
                                </div>
                                <div class="row item-border-bottom">
                                    <div class="col-lg-12">
                                        <p>Same as physical address</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="edit-details-header">Next of keen</h4>
                                    </div>
                                </div>
                                <div class="row edit-group">
                                    <div class="col-lg-5">
                                        Name
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="edit-input-grouper">
                                            <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                            <input type="" name="" class="edit-input" value="Prince Kgatla">
                                        </div>
                                    </div>
                                </div>
                                <div class="row edit-group">
                                    <div class="col-lg-5">
                                        Relationship
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="edit-input-grouper">
                                            <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                            <input type="" name="" class="edit-input" value="Brother">
                                        </div>
                                    </div>
                                </div>
                                <div class="row edit-group">
                                    <div class="col-lg-5">
                                        Contact number
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="edit-input-grouper">
                                            <span class="edit-data-icon"><i class="fa fa-pencil"></i></span>
                                            <input type="" name="" class="edit-input" value="066 223 8612">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row border-right">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="edit-details-header">Attached documents</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>Documents such as ID copy or proof of residents can be found here.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="attached-files">
                Attached files
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="modal fade" id="add-contact-modal">
            <div class="modal-dialog" id="add-contact">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" class="close" data-dismiss="modal">&times;</a>
                        <h2 class="modal-title">Add new contact</h2>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <?Php echo form_open(base_url() . 'patients/remove_patient', array('id' => 'frm-new-contact')); ?>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <select name="" id="" class="">
                                                <option value="0">Contact type</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <select name="" id="" class="">
                                                <option value="0">Contact type</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <select name="" id="" class="">
                                                <option value="0">Contact priority</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" name="" id="" placeholder="" class="">
                                        </div>
                                    </div>
                                <?Php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="btn_submit" class="btn btn-save">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
