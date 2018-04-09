<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="form-group">
                <div class="col-lg-2">
                    <legend><strong>Account</strong></legend>
                </div>
                <div class="col-lg-8">
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
            </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <legend><strong>Enter the following from your statement</strong></legend>
        </div>
        <div class="col-lg-8">
            <div class="form-group">
            <div class="row">
                <div class="col-lg-4">
                    <label for="due_date">Statement ending date</label>
				    <input type="date" class="form-control" id="end_date" name="end_date">
                </div>
                
                <div class="col-lg-4">
                    <label for="due_date">Beginning balance</label>
				    <input type="text" class="form-control" id="begin_balance" name="begin_balance" placeholder="Start Balance">
                </div>
                
                <div class="col-lg-4">
                    <label for="due_date">SEnding Balance</label>
				    <input type="text" class="form-control" id="end_balance" name="end_balance" placeholder="End Balance">
                </div>
            </div>
            </div>
        </div>
    </div>
</div>