<div class="container-fluid">
    <div class="row">
        <title>dsfsddfsdf</title>
        <div class="col-md-12">
            <h3 style="text-align: center; margin-bottom: 30px; margin-top: 20px; border: 0px; color: opique"><strong>Reconcile an account</strong></h3>
            <legend style="text-align: center; margin-bottom: 30px; border: 0px">Which account do you want to reconcile?</legend>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
             <div class="form-group">
            <div class="row">
                <div class="col-md-1">
                    <label for="accountType" style="font-style: normal; font-weight: bold; font-size: 15px; margin-top: 10px; margin-left: 0px; margin-right: 0px; border: 0px; font-size: 19px">Account:</label>
                </div>
                <div class="col-md-7">
                    <select name="accountType" id="accountType"  class="form-control" style="height: 48px;
                                                                                             background-color: #fdfdfb;
                                                                                             -webkit-border-radius: 2px;
                                                                                             -moz-border-radius: 2px;
                                                                                              border-radius: 2px;
                                                                                              border: 3px solid #e9e6e0;
                                                                                              -webkit-box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075);
                                                                                               box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075);
                                                                                              font-family: 'Montserrat', sans-serif;
                                                                                              font-size: 15px;">
                         <option selected disabled value="0">
                                Select an account      
                         </option>

                         <option value="checking">
                            checking
                         </option>

                         <option value="Savings">
                            Savings
                         </option>

                         <option value="Inventory Asset">
                            Inventory Asset
                         </option>
                         <option value="Prepaid expenses">
                            Prepaid Expenses
                         </option>
                        <option value="Uncategorized Asset">
                            Uncategorized Asset
                         </option>
                        <option value="Mastercard">
                            Mastercard
                         </option>
                        <option value="Visa">
                            Visa
                         </option>
                        <option value="Load Payable">
                            Load Payable
                         </option>
                        <option value="Notes Payable">
                            Notes Payable
                         </option>
                    </select>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-bg btn-primary" style="margin: 0px; border: 0px; height: 48px; border-radius: 0px"
                            id="add-user" data-toggle="modal" data-target="#start_reconciling" onclick="return false;" accesskey="t">
                        Reconcile Now
                    </button>
                </div>
            </div>
            </div>
        </div>
    </div>
    
      <div class="modal fade" id="start_reconciling">
            <div class="modal-dialog" id="modal-format">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" class="close" data-dismiss="modal">&times;</a>
                        <h2 class="modal-title">
                            <legend style="border-bottom: 3px solid #3498DB">
                                <strong style="color: #1C2833">Start Reconcile</strong>
                            </legend>
                        </h2>
                    </div>
                    <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-1">
                                    <label for="accountType" style="font-style: normal; font-weight: bold; font-size: 15px; margin-top: 10px; margin-left: 0px; margin-right: 0px; border: 0px">Account:</label>
                                    </div>
                                    <div class="col-lg-6" style="margin-left: 15px">
                                         <select name="accountType" id="accountType"  class="form-control" style="height: 48px;
                                                                                                     background-color: #fdfdfb;
                                                                                                     -webkit-border-radius: 2px;
                                                                                                     -moz-border-radius: 2px;
                                                                                                      border-radius: 2px;
                                                                                                      border: 3px solid #e9e6e0;
                                                                                                      -webkit-box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075);
                                                                                                       box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075);
                                                                                                      font-family: 'Montserrat', sans-serif;
                                                                                                      font-size: 15px;">
                                 <option selected disabled value="0">
                                        Select an account      
                                 </option>

                                 <option value="checking">
                                    checking
                                 </option>

                                 <option value="Savings">
                                    Savings
                                 </option>

                                 <option value="Inventory Asset">
                                    Inventory Asset
                                 </option>
                                 <option value="Prepaid expenses">
                                    Prepaid Expenses
                                 </option>
                                <option value="Uncategorized Asset">
                                    Uncategorized Asset
                                 </option>
                                <option value="Mastercard">
                                    Mastercard
                                 </option>
                                <option value="Visa">
                                    Visa
                                 </option>
                                <option value="Load Payable">
                                    Load Payable
                                 </option>
                                <option value="Notes Payable">
                                    Notes Payable
                                 </option>
                            </select>
                        </div>
                    </div><hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <legend style="color:#2C3E50"><strong>Enter the following from your account</strong></legend><br><br>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="ending_date" style="font-weight: normal; font-size: 17px;">Statement Ending Date</label>
                                        <input type="date" class="form-control" style="height: 48px;
                                                                                       background-color: #fdfdfb;
                                                                                       -webkit-border-radius: 2px;
                                                                                       -moz-border-radius: 2px;
                                                                                       border-radius: 2px;
                                                                                       border: 3px solid #e9e6e0;
                                                                                      -webkit-box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075);
                                                                                        box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075);
                                                                                        font-family: 'Montserrat', sans-serif;
                                                                                        font-size: 15px;">
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="begin_balance" style="font-weight: normal; font-size: 17px;">Beginning Balance</label>
                                        <input type="text" value="5,000.00" class="form-control" style="height: 48px;
                                                                                                       background-color: #fdfdfb;
                                                                                                       -webkit-border-radius: 2px;
                                                                                                       -moz-border-radius: 2px;
                                                                                                       border-radius: 2px;
                                                                                                       border: 3px solid #e9e6e0;
                                                                                                    -webkit-box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075);
                                                                                                        box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075);
                                                                                                        font-family: 'Montserrat', sans-serif;
                                                                                                        font-size: 15px;" disabled>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="end_balance" style="font-weight: normal; font-size: 17px;">Ending Balance</label>
                                        <input type="text" placeholder="5,000.00" class="form-control" style="height: 48px;
                                                                                       background-color: #fdfdfb;
                                                                                       -webkit-border-radius: 2px;
                                                                                       -moz-border-radius: 2px;
                                                                                       border-radius: 2px;
                                                                                       border: 3px solid #e9e6e0;
                                                                                    -webkit-box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075);
                                                                                        box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075);
                                                                                        font-family: 'Montserrat', sans-serif;
                                                                                        font-size: 15px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="modal-footer">
                        <a href="<?Php echo base_url()?>reconciles/start_reconcile" name="btn_submit" class="btn btn-primary btn-md" style="border-radius: 0px" id="btn-start-reconcile">
                            OK
                        </a>
                        <button name="btn_cancel" style="border-radius: 0px" class="btn btn-default btn-md"  data-dismiss="modal" id="save-task" title="Cancel">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
     </div>
    
    <div class="row">
        <div clas="col-md-12">
            <legend style="margin-bottom: 0px; margin-top: 20px; font-family: 'Montserrat', sans-serif;  font-family: 'Montserrat', sans-serif; color: #283747"><strong>Reconcile History & Report</strong></legend>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
             <table class="table table-bordered table-hover" cellpadding="0" cellspacing="0" border="0">  
                   <thead>  
                      <tr style="text-align: center">  
                        <th><strong>Statement ending date</strong></th>  
                        <th><strong>Reconciled on</strong></th>  
                        <th><strong>Ending Balance</strong></th>  
                        <th><strong>Changes</strong></th>  
                         <th colspan="3"><strong>Action</strong></th>
                      </tr>  
                    </thead>  
                    <tbody>
                        <tr data-target="1">  
                        <td>13/06/2018</td>  
                        <td>15/06/2018</td>  
                        <td>R1400.00</td>  
                        <td>R30.58</td>  
                        <td><a class="" href="#" title="Account details"><i class="fa fa-eye"></i></a></td>
                        <td><a class="edit-user" href="<?Php echo base_url(); ?>reconciles/start_reconcile" title="Edit Account"><i class="fa fa-pencil"></i></a></td>
                        <td><a class="delete-user" href="#" title="Remove Account"><i class="fa fa-trash"></i></a></td>
                      </tr>  
                    </tbody>  
          </table>
        </div>
    </div>
    
</div>				    	
					    	 
