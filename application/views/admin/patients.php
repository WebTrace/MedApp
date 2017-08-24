<div class="wrapper">
    <div class="row">
        <div class="col-lg-9">
            <div class="row">
               <div class="input-group"> 
                   <input type="search" placeholder="search for patient" class="form-control">
                   <span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span>  
                </div><!-- /input-group -->  
           </div> 
            </div>
       
        <div class="col-lg-3">
             <div class="input-group" style="width: 240px">
                    <select id="sort" class="form-control" name="sort">
                        <option value="Sort by">---Sort List---</option>
                        <option value="date">Ascending</option>
                        <option value="date">Descending</option>
                    </select> 
                 <label for="sort">Sort list of patients:</label> 
             </div>
        </div>
    </div>
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="dashboard">ClAIMA</a></li>
            <li><a href="dashboard">Dashboard</a></li> 
            <li class="active">Appointment</li> 
        </ol>
    </div>
    <div class="row" style="margin: 30px 0px 0px 0px">
    <div class="col-lg-9">
        <div class="row tile_count" id="bgcolor">
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                <div class="data-dashboard" id="data-dashboard1">
                    <span class="count_top"><i class="fa fa-user"></i> Number of Patients</span>
                    <div class="count">1500</div>
                    <span class="count_bottom"><i class="green">1000 </i> Female </span>
                    <span class="count_bottom"><i class="green">500 </i> Male</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                <div class="data-dashboard" id="data-dashboard2">
                    <span class="count_top"><i class="fa fa-user"></i> Successfully treated </span>
                    <div class="count">100</div>
                     <span class="count_bottom"><i class="green"><i >Patient(s)</i> </i> </span>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                <div class="data-dashboard" id="data-dashboard3">
                    <span class="count_top"><i class="fa fa-user"></i> Improving patients</span>
                    <div class="count green">2</div>
                     <span class="count_bottom"><i class="green"><i >Patient(s)</i> </i> </span>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                <div class="data-dashboard" id="data-dashboard4">
                    <span class="count_top"><i class="fa fa-user"></i> Need special 
                        attention</span>
                    <div class="count green">25</div>
                    <span class="count_bottom"><i class="green"><i >Patient(s)</i> </i> </span>
                </div>
            </div>
        </div>
        </div>
        <div class="col-lg-3" style="padding: 40px 0px 0px 80px">
             <a href="#" class="btn" data-toggle="modal" data-target="#myModal"><strong>ADD PATIENT</strong></a>
        </div>
    </div>
         <!--Add a patient-->
        <form method="post" id="form_add">
            <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#b9bdbb">
                        <a href="#" class="close" data-dismiss="modal">&times;</a>
                        <h2 class="modal-title" style="color: #737377"><strong>ADD PATIENT</strong></h2>
                    </div>
                    <div class="modal-body" style="background-color:#f1f7f4">
                       <h3 style="color:#737377"><strong>PATIENT DETAILS</strong></h3>
                         <div class="row">
                             <div class="col-md-6 col-lg-6">
                                   <div class="input-group" style="width: 300px">
                                        <label class="form-group">Title:
                                             <select class="form-control" id="title" name="title">
                                               <option value="Select Title">--Select Title--</option>
                                               <option value="Mr">Mr</option>
                                               <option value="Miss">Miss</option>
                                               <option value="Mrs">Mrs</option>
                                               <option value="Other">Other</option>
                                              </select>
                                         </label>
                                    </div>
                                    <div class="input-group" style="width: 250px">
                                       <label>Full Name(s):</label>
                                        <input name="FName" type="text" class="form-control" aria-describedby="sizaing-addon1" placeholder="Full Names" required="true">     
                                    </div>
                                    <div class="input-group" style="width: 250px">
                                        <label>ID Number:</label>
                                        <input name="IDNo" type="number" class="form-control" aria-describedby="sizaing-addon1" placeholder="ID/Passport No" required="true">     
                                    </div>
                                    <div class="input-group" style="width: 250px">
                                      <label>Email Address:</label>
                                        <input name="email" type="email" class="form-control" aria-describedby="sizaing-addon1" placeholder="Email" required="true">     
                                    </div>
                                 <div class="input-group" style="width: 250px">
                                       <label>Phone Number:</label>
                                        <input name="PNumber" type="tel" class="form-control" aria-describedby="sizaing-addon1" placeholder="Phone Number" required="true">     
                                    </div>
                             </div>
                             <div class="col-lg-6 col-md-6">
                                  <div class="input-group" style="width: 300px">
                                      <label class="form-group">Gender:
                                           <select class="form-control" id="title" name="title">
                                               <option value="Select Gender">--Select Gender--</option>
                                               <option value="Male">Male</option>
                                               <option value="Female">Female</option>
                                           </select>
                                      </label>
                                 </div>
                                <div class="input-group" style="width: 250px">
                                    <label>Surname:</label>
                                        <input name="FName" type="text" class="form-control" aria-describedby="sizaing-addon1" placeholder="Surname" required="true">     
                                    </div>
                                    <div class="input-group" style="width: 250px">
                                       <label>Date of Birth:</label>
                                        <input name="DOB" type="date" class="form-control" aria-describedby="sizaing-addon1" required="true">     
                                    </div>
                                    <div class="input-group" style="width: 250px">
                                      <label>File Number:</label>
                                        <input name="PNumber" type="text" class="form-control" aria-describedby="sizaing-addon1" placeholder="File No" required="true">     
                                    </div>
                                   <label><strong>Type of payment:</strong></label>
                                 <div class="input-group">
                                     <span>
                                        <input name="PNumber" type="checkbox" aria-describedby="sizaing-addon1" title="Credit Card" required="true"> Cash</span>    
                                    </div>
                                  <div class="input-group">
                                      <span>
                                        <input name="PNumber" type="checkbox" aria-describedby="sizaing-addon1" title="Credit Card" required="true"> Credit Card</span>    
                                    </div>
                                  <div class="input-group" style="width: 250px">
                                       <span>
                                        <input name="PNumber" type="checkbox" aria-describedby="sizaing-addon1" title="Credit Card" required="true"> Insurance/Medical Aid</span>    
                                    </div>
                            </div>
                       
                        </div>
                    </div>
                    <div class="modal-footer" style="background-color:#c5f7dc">
                            <input style="border-radius: 0;width: 100%; font-size: 15px;background-color: #a0fbcb; color: #49544e" class="btn btn-success" id="btnSubmit" type="submit" name="btnSubmit" />
                    
                    </div>
                
            </div>
        </div>
                </div>
     </form>
        
       
                <div class="row">
                    <div class="col-lg-9">
                        <div class="table-responsive">
                        <table class="table table-hover">
                            <caption><h3><strong>List of Patients</strong></h3></caption>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Date of Birth</th>
                                    <th>ID No</th>
                                    <th>File No</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="active">
                                    <td>1</td>
                                    <td>Joseph</td>
                                    <td>Sibiya</td>
                                    <td>00/08/20</td>
                                    <td>9910206058087</td>
                                    <td>1</td>
                                </tr>
                                <tr class="success">
                                    <td>2</td>
                                    <td>Emmanuel</td>
                                    <td>Kgatla</td>
                                    <td>01/11/20</td>
                                    <td>9910206058087</td>
                                    <td>6</td>
                                </tr>
                                <tr class="danger">
                                    <td>3</td>
                                    <td>Tshego</td>
                                    <td>Mojela</td>
                                    <td>08/05/20</td>
                                    <td>9910206058087</td>
                                    <td>10</td>
                                </tr>
                                <tr class="warning">
                                    <td>4</td>
                                    <td>Blessing</td>
                                    <td>Bongza</td>
                                    <td>06/10/20</td>
                                    <td>9910206058087</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Kev</td>
                                    <td>Kevin</td>
                                    <td>11/11/11</td>
                                    <td>9910206058087</td>
                                    <td>4</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    
                    </div>
                 <div class="row">
                    <div class="col-lg-8">
                        <div class="x_title">
                            <h2 style="color: rgba(0,0,0,1)">Patients Progress</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="">
                            <div class="x_content1">
                            <div id="graph_bar_group" style="width:100%; height:280px;"></div>
                          </div>
                        </div>
                    </div>
                    </div>
               </div>
            
                <div class="row">
                    <div class="col-lg-9">
                        <div id = "left" class="table-responsive" id="view_patients" style="padding: 15px">
                            <table width="412" class="table table-bordered table-hover" height="624">
                                <h3><strong>Search results for: joseph</strong></h3>
                                    <tr>
                                    <td width="404" height="35" colspan="2" valign="top">
                                        <div id="personaldetails">
                                            <h5><strong>Patient Information</strong></h5>
                                            <table cellspacing="0">
                                                <tr>
                                                    <td width="150" height="25" valign="top">Title</td>
                                                    <td width="248" valign="top">: Male</td>
                                                </tr>
                                                <tr>
                                                    <td width="150" height="25" valign="top">First Name</td>
                                                    <td width="248" valign="top">: Joseph</td>
                                                </tr>
                                                <tr>
                                                    <td height="25" valign="top">Surname</td>
                                                    <td valign="top">: Sibiya</td>
                                                </tr>

                                                <tr>
                                                    <td height="25" valign="top">ID No</td>
                                                    <td valign="top">: 98072766767767</td>
                                                </tr>

                                                <tr>
                                                    <td height="25" valign="top">Gender</td>
                                                    <td valign="top">: Male</td>
                                                </tr>

                                                <tr>
                                                    <td height="25" valign="top">Email Address</td>
                                                    <td valign="top">: Sibiyajvt@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <td height="25" valign="top">Phone Number</td>
                                                    <td valign="top">: 0723923176</td>
                                                </tr>
                                                <tr>
                                                    <td height="25" valign="top">Date of Birth</td>
                                                    <td valign="top">: 1998 July 76</td>
                                                </tr>
                                                <tr>
                                                    <td height="25" valign="top">File Number</td>
                                                    <td valign="top">: 76</td>
                                                </tr>
                                                <tr>
                                                    <td height="25" valign="top">Registered date</td>
                                                    <td valign="top">: 544/87/876</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                 <tr>
                                    <td height="30" colspan="2" valign="top">
                                        <div id="roomdetails">
                                            <h5><strong>Treatment Information</strong></h5>
                                            <table border="0"  cellspacing="0">
                                                <tr>
                                                    <td width="150" height="25" valign="top">Treatment Type</td>
                                                    <td width="250" valign="top">
                                                        : None
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="25" valign="top">Last Treatment </td>
                                                    <td valign="top">: date</td>
                                                </tr>
                                                <tr>
                                                    <td height="25" valign="top">Progress</td>
                                                    <td valign="top">: Well</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="25" colspan="2" valign="top">
                                        <div id="paymentInfo">
                                            <h5><strong>Payment Information</strong></h5>
                                            <table border="0" cellspacing="0">
                                                <tr>
                                                    <td width="150" height="25" valign="top">Payment Type</td>
                                                    <td width="250" valign="top">: Credit Card</td>
                                                </tr>
                                                <tr>
                                                    <td width="150" height="25" valign="top">Account Holder</td>
                                                    <td width="250" valign="top">: Joseph</td>
                                                </tr>

                                                <tr>
                                                    <td height="25" valign="top">Account Number</td>
                                                    <td valign="top">: 5665456677</td>
                                                </tr>

                                                <tr>
                                                    <td height="25" valign="top">Bank Name</td>
                                                    <td valign="top">: Absa</td>
                                                </tr>

                                                <tr>
                                                    <td height="25" valign="top">Payment Date:</td>
                                                    <td valign="top">: 25/33/65</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                             </table>
                        </div>
                    </div>
                 </div>




