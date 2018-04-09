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
                    <label for="accountType" style="font-style: normal; font-weight: bold; font-size: 15px; margin-top: 10px; margin-left: 0px; margin-right: 0px; border: 0px">Account:</label>
                </div>
                <div class="col-md-7">
                    <select name="accountType" id="accountType"  class="form-control" style="margin: 0px; border: 0.2px solid; color: gray">
                         <option selected value="0">
                                Select an account      
                         </option>

                         <option value="Cheque">
                            Cheque
                         </option>

                         <option value="Savings">
                            Savings
                         </option>

                         <option value="Medical Treatment">
                            Medical Treatment
                         </option>
                        
                         <option value="Checking">
                            Checking
                         </option>
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="submit" class="btn btn-md btn-success" style="margin: 0px; border: 0px" value="Reconcile Now">
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div clas="col-md-12">
            <legend style="margin-bottom: 0px; margin-top: 20px; font-style: italic"><strong>Reconcile history and Report</strong></legend>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
             <table class="table table-bordered table-hover" cellpadding="0" cellspacing="0" border="0" style="text-align: center">  
                   <thead>  
                      <tr style="text-align: center">  
                        <th>Statement ending date</th>  
                        <th>Reconciled on</th>  
                        <th>Ending Balance</th>  
                        <th>Changing Balance</th>  
                         <th colspan="3">Action</th>
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
					    	 
