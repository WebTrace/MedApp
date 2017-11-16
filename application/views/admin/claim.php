    <div class="row">
        <div class="controls">
            <div class="col-lg-7">
                <div class="btn-controls-group">
                    <button class="btn-controls" id="add-user" type="submit" data-toggle="modal" data-target="#add_user_modal">
                        <i class="fa fa-plus"></i> New claim
                    </button>
                       <button class="btn-controls" id="print" type="submit"><i class="fa fa-print"></i> Print</button>
                    <div id="export-control" class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="export-option" 
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <i class="fa fa-exchange"></i> Export
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-fix" aria-labelledby="dropdownMenu1">
                            <li><a href="#">PDF</a></li>
                            <li><a href="#">Word</a></li>
                            <li><a href="#">Excel</a></li>
                            <!--<li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>-->
                        </ul>
                    </div>
                    <!--<button class="btn-controls" id="export-pdf" type="submit">Export PDF</button>
                    <button class="btn-controls" id="" type="submit">Export Excel</button>-->
                    <button class="btn-controls" id="email" type="submit"><i class="fa fa-envelope"></i> Email</button>

                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
                <label id="control-show-lbl">
                    Show 
                    <div id="view-control" class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="diplay-option" 
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Show all Claims
                            <span class="caret"></span>
                        </button>
                        <ul id="width-fix" class="dropdown-menu  dropdown-menu-fix" aria-labelledby="dropdownMenu1">
                            <li><a style="color:#FF0000"; href="#">Rejected Claims</a></li>
                            <li><a style="color:#000000"; href="#">Claims Waiting for Response</a></li>
                            <li><a style="color:#00ff80"; href="#">Fully Accepted Claims</a></li>
                            <li><a style="color:#ff8000"; href="#">Partially Accepted</a></li>
                            <li><a style="color:#00bfff"; href="#">Cash and Private patient</a></li>
                            <li><a style="color:#ffff00"; href="#">Draft Consultation</a></li>
                            <!--<li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>-->
                        </ul>
                        <input type="hidden" name="rows" id="rows" value="5">
                    </div>
                </label>
            </div>
            <div class="col-lg-3 col-md-8 col-sm-8 col-xs-8">
                <div class="search-control">
                    <input type="search" id="search" name="search" class="search">
                    <span id = "mg-glass" class="glyphicon glyphicon-search"></span>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-lg-12">
            <?Php
                $attributes = array('id' => 'add_claim');
                echo form_open(base_url() . 'claim/create_claim', $attributes); 
            ?>
                <div class="modal fade" id="add_user_modal">
                    <div class="modal-dialog" id="modal-format">
                        <div class="modal-content">
                            <div class="modal-header">
                                <a href="#" class="close" data-dismiss="modal">&times;</a>
                                <h2 class="modal-title">Create New Claim</h2>
                            </div>
                            <div class="modal-body">
                                    <form action="" method="post">
                                <div class="form-group">
                                <label class="control-label" for="ID">PRACTITIONER DETAILS</label>

                 </div>   
                      <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label" for="Name"></label>
                                              <div class="form-group"> 
                                              <div class="input-group stylish-input-group">
                                                    <input type="text" class="form-control"  placeholder="Practitioner" >
                                                    <span class="input-group-addon">
                                                        <button type="submit">
                                                            <span class="glyphicon glyphicon-search" ></span>
                                                        </button>  
                                                    </span>
                                                </div>

                                            </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label" for="Speciality"></label>
                                            <div >
                                                <input type="text" class="form-control" id="Speciality" name="Speciality" placeholder="Speciality" required="">

                                            </div>
                                    </div>
                        </div>
                      <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="Practice_Number"></label>
                                        <div>
                                            <input type="text" class="form-control" id="Practice_Number" name="Practice_Number" placeholder=" Practice NO" required="">

                                        </div>
                                </div>
                     </div>
                     <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="Tell_Number"></label>
                                        <div>
                                            <input type="text" class="form-control" id="Tell_Number" name="Tell_Number" placeholder="Tell_Number" required="">

                                        </div>
                                </div>
                     </div>    
                      <div class="col-sm-6">
                        <div class="form-group">
                                    <label class="control-label" for="Referringdoctor"></label>

                                              <div class="form-group"> 

                                                <div class="input-group stylish-input-group">
                                                    <input type="text" class="form-control"  placeholder="Referring doctor" >
                                                    <span class="input-group-addon">
                                                        <button type="submit">
                                                            <span class="glyphicon glyphicon-search" ></span>
                                                        </button>  
                                                    </span>

                                            </div>   
                                            </div>
                                </div>
                       </div>


                            <div class="col-sm-3">
                                        <div class="form-group">
                                    <label class="control-label" for="Practice_Number"></label>
                                        <div>
                                            <input type="text" class="form-control" id="Practice_Number" name="Practice_Number" placeholder="Practice_Number" required="">

                                        </div>
                                </div>
                                    </div>
                            <div class="col-sm-3">
                                    <div class="form-group">
                                    <label class="control-label" for="Authorization_Number"></label>
                                        <div>
                                            <input type="text" class="form-control" id="Authorization_Number" name="Authorization_Number" placeholder="Authorization_Number" required="">

                                        </div>
                                </div>

                            </div>


                  </form>

                        <form action="" method="post">
                                <div class="form-group">
                                        <label class="control-label" for="ID">PATIENT DETAILS</label>

                                    </div>   
                      <div class="col-sm-6">
                        <div class="form-group">
                                        <label class="control-label" for="Name"></label>
                                              <div class="form-group"> 

                                                <div class="input-group stylish-input-group">
                                                    <input type="text" class="form-control"  placeholder="Search Patient" >
                                                    <span class="input-group-addon">
                                                        <button type="submit">
                                                            <span class="glyphicon glyphicon-search" ></span>
                                                        </button>  
                                                    </span>
                                                </div>

                                            </div>
                                    </div>


                      <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="Full_names"></label>
                                        <div>
                                            <input type="text" class="form-control" id="Full_names" name="Full_names" placeholder=" Full_names" required="">

                                        </div>
                                </div>
                     </div>
                     <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="Surname"></label>
                                        <div>
                                            <input type="text" class="form-control" id="Surname" name="Surname" placeholder="Surname" required="">

                                        </div>
                                </div>
                     </div>    



                            <div class="col-sm-6">
                                        <div class="form-group">
                                    <label class="control-label" for="Age"></label>
                                        <div>
                                            <input type="text" class="form-control" id="Age" name="Age" placeholder="Age" required="">

                                        </div>
                                </div>
                                    </div>
                            <div class="col-sm-6">
                                    <div class="form-group">
                                    <label class="control-label" for="Cell Number"></label>
                                        <div>
                                            <input type="text" class="form-control" id="Cell Number" name="Cell Number" placeholder="Cell Number" required="">

                                        </div>
                                </div>

                            </div>
                            </div>
                <div class="col-sm-6">
                        <div class="form-group">
                                        <label class="control-label" for="Name"></label>
                                              <div class="form-group"> 

                                                <div class="input-group stylish-input-group">
                                                    <input type="text" class="form-control"  placeholder="Bill to" >
                                                    <span class="input-group-addon">
                                                        <button type="submit">
                                                            <span class="glyphicon glyphicon-search" ></span>
                                                        </button>  
                                                    </span>
                                                </div>

                                            </div>
                                    </div>

                        </div>
                      <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label" for="Treatment_Location"></label>
                                        <div>
                                            <input type="text" class="form-control" id="Treatment_Location" name="Treatment_Location" placeholder=" Treatment Location" required="">

                                        </div>
                                </div>
                     </div>
                     <div class="col-sm-3">
                                <div class="form-group">
                                    <label class="control-label" for="Treatment_Date"></label>
                                        <div>
                                            <input type="text" class="form-control" id="Treatment_Date" name="Treatment_Date" placeholder="Treatment_Date" required="">

                                        </div>
                                </div>
                     </div> 

                            <div class="row">
        <div class="col-lg-12">
            <div >
                <table class="table table-bordered" id="user-list">
                    <thead>
                        <tr>
                            <th>Tariff Code</th>
                            <th>Description</th>
                            <th>ICD_10_Code</th>
                            <th>Modifier Code.</th>
                            <th>Price</th>
                            <th>Total Amount:</th>
                            <th>R200</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Kgatla</td>
                            <td>Emmanuel</td>
                            <td>956263 5988 026</td>
                            <td>Male</td>

                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Madella</td>
                            <td>Lee-Roy</td>
                            <td>962563 2103 251</td>
                            <td>Male</td>

                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Madella</td>
                            <td>Lee-Roy</td>
                            <td>962563 2103 251</td>
                            <td>Male</td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
                  </form>
                            </div>
                            <div class="modal-footer">
                                 <input type="submit" name="btn_submit" class="btn btn-save" value="Sent" />
                                <input type="submit" name="btn_submit" class="btn btn-save" value="Save" />
                                <input type="submit" name="btn_submit" class="btn btn-reset" value="Reset"/>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
           
           <div class="col-lg-7"   text-align: justify;  
    -moz-text-align-last: right; 
    text-align-last: right;>
              
                   <li><a style="color:#FF0000"; href="#">Rejected Claims</a></li>
                   <li><a style="color:#000000"; href="#">Claims Waiting for Response</a></li>
                   <li><a style="color:#00ff80"; href="#">Fully Accepted Claims</a></li>
                   <li><a style="color:#ff8000"; href="#">Partially Accepted</a></li>
                   <li><a style="color:#00bfff"; href="#">Cash and Private patient</a></li>
                  <li><a style="color:#ffff00"; href="#">Draft Consultation</a></li>

           
            </div>
    
        <div class="col-lg-12">
            <div class="user-table">
                <table class="table table-bordered" id="user-list">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Date</th>
                            <th>Surname</th>
                            <th>First name</th>
                            <th>Amount (ZAR)</th>
                            <th>Balance (ZAR)</th>
                            <th colspan="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="color:#00bfff"; >
                            <td>1</td>
                            <th>16/9/2017</th>
                            <td>Kgatla</td>
                            <td>Emmanuel</td>
                            <td>R200</td>
                            <td>R250</td>
                            <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                            <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                            <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr style="color:#000000";>
                            <td>2</td>
                            <th>16/11/2016</th>
                            <td>Sibiya</td>
                            <td>Joseph</td>
                            <td>R400</td>
                            <td>R400</td>
                            <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                            <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                            <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr style="color:#ff8000";>
                            <td>3</td>
                            <th>6/1/2017</th>
                            <td>Madella</td>
                            <td>Lee-Roy</td>
                            <td>R440</td>
                            <td>R430</td>
                            <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                            <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                            <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr style="color:#FF0000"; >
                            <td>4</td>
                            <th>6/11/2017</th>
                            <td>Mojela</td>
                            <td>Tshego</td>
                            <td>R400</td>
                            <td>R403</td>
                            <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                            <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                            <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr style="color:#00bfff";>
                            <td>5</td>
                            <th>16/11/2017</th>
                            <td>Madella</td>
                            <td>Lee-Roy</td>
                            <td>R300</td>
                            <td>R470</td>
                            <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                            <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                            <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr style="color:#00ff80";>
                            <td>6</td>
                            <th>6/11/2017</th>
                            <td>Madella</td>
                            <td>Lee-Roy</td>
                            <td>R200</td>
                            <td>R5000</td>
                            <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                            <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                            <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr style="color:#ff8000";>
                            <td>7</td>
                            <th>1/2/2017</th>
                            <td>Madella</td>
                            <td>Lee-Roy</td>
                            <td>R123</td>
                            <td>R23</td>
                            <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                            <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                            <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr style="color:#FF0000"; >
                            <td>8</td>
                            <th>1/1/2017</th>
                            <td>Madella</td>
                            <td>Lee-Roy</td>
                            <td>R4586</td>
                            <td>R400</td>
                            <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                            <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                            <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr style="color:#00ff80";>
                            <td>9</td>
                            <th>6/11/2017</th>
                            <td>Madella</td>
                            <td>Lee-Roy</td>
                            <td>R156 </td>
                            <td>R4440</td>
                          
                            <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                            <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                            <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr style="color:#ffff00";>
                            <td>10</td>
                            <th>1/11/2017</th>
                            <td>Madella</td>
                            <td>Lee-Roy</td>
                            <td>R256</td>
                            <td>R300</td>
                           
                            <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                            <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                            <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr style="color:#000000";>
                            <td>11</td>
                            <th>16/1/2017</th>
                            <td>Madella</td>
                            <td>Lee-Roy</td>
                            <td>R230</td>
                            <td>R220</td>
                          
                            <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                            <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                            <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr style="color:#FF0000"; >
                            <td>12</td>
                            <th>16/11/2017</th>
                            <td>Madella</td>
                            <td>Lee-Roy</td>
                            <td>R130</td>
                            <td>R2302</td>
                         
                            <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                            <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                            <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr style="color:#00ff80";>
                            <td>13</td>
                            <th>16/4/2017</th>
                            <td>Madella</td>
                            <td>Lee-Roy</td>
                            <td>R123</td>
                            <td>R123</td>
                          
                            <td><a href="#"><i class="fa fa-arrow-circle-left"></i></a></td>
                            <td><a class="edit-user" href="#"><i class="fa fa-pencil"></i></a></td>
                            <td><a class="delete-user" href="#"><i class="fa fa-trash"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="pagination-container">
                <nav>
                    <ul class="pagination"></ul>
                </nav>
            </div>
        </div>
    </div>