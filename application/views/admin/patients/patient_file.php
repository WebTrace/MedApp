<div class="row top-spacing">
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
</div>
<div class="row top-spacing">
    <div class="col-lg-12">
        <ul id="navi-tabs" class="nav nav-tabs fi-tabs">
            <li class="active"><a href="#fi-dashboard" data-toggle="tab">Dashboard</a></li>
            <li><a href="#fi-diagnosis" data-toggle="tab">Consultations</a></li>
            <li><a href="#fi-appointments" data-toggle="tab">Appontments</a></li>
            <li><a href="#attached-files" data-toggle="tab">Attached files</a></li>
            <li><a href="#fi-billing" data-toggle="tab">Billing</a></li>
            <li><a href="#fi-patient-info" data-toggle="tab">Patient information</a></li>
            <li><a href="#next-checkup" data-toggle="tab">Next checkup</a></li>
        </ul>
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="fi-dashboard">
                Dashboard
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
                Billing
            </div>
            <div class="tab-pane" id="fi-patient-info">
                Personal details<br>
                <div class="row">
                    <div class="col-lg-2">
                        Title
                    </div>
                    <div class="col-lg-3">
                        <div class="">
                            <input type="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        First name
                    </div>
                    <div class="col-lg-3">
                        <div class="">
                            <input type="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        Middle name
                    </div>
                    <div class="col-lg-3">
                        <div class="">
                            <input type="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        Last name
                    </div>
                    <div class="col-lg-3">
                        <div class="">
                            <input type="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        Middle name
                    </div>
                    <div class="col-lg-3">
                        <div class="">
                            <input type="text">
                        </div>
                    </div>
                </div>
                Contant details<br>
                Contant details<br>
            </div>
            <div class="tab-pane" id="attached-files">
                Attached files
            </div>
        </div>
    </div>
</div>
