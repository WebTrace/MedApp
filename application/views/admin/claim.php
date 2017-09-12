
  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="form-box">
          <div class="panel panel-primary">
            <div class="panel-body">
              <div class="row">
                  <div class="col-sm-12">
                  </div>
              </div>
              <form action="" method="post">
                            <div class="form-group">
                                    <label class="control-label" for="ID">Provide Patients ID Number</label>
                                        <div > 
                                           <div id="imaginary_container"> 
                                            <div class="input-group stylish-input-group">
                                                <input type="text" class="form-control"  placeholder="Provide Patients ID Number" >
                                                <span class="input-group-addon">
                                                    <button type="submit">
                                                        <span class="glyphicon glyphicon-search" ></span>
                                                    </button>  
                                                </span>
                                            </div>
                                        </div>   
                                        </div>
                                </div>   
                  <div class="col-sm-6">
                    <div class="form-group">
                                    <label class="control-label" for="Name">Patients Name</label>
                                        <div >
                                            <input type="text" class="form-control" id="Name" name="Name" placeholder="Patients Name" required="">
                                        </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label" for="Membership">Membership Number</label>
                                        <div >
                                            <input type="text" class="form-control" id="Membership" name="Membership" placeholder="Membership Number" required="">
                                           
                                        </div>
                                </div>
                    </div>
                  <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label" for="Practice_Name">Practice Name</label>
                                    <div>
                                        <input type="text" class="form-control" id="Practice_Name" name="Practice_Name" placeholder="Practice Name" required="">
                                        
                                    </div>
                            </div>
                 </div>
                 <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label" for="Practice_Number">Practice Number</label>
                                    <div>
                                        <input type="text" class="form-control" id="Practice_Number" name="Practice_Number" placeholder="Practice Number" required="">
                                       
                                    </div>
                            </div>
                 </div>    
                  <div class="col-sm-6">
                    <div class="form-group">
                                <label class="control-label" for="ICD">ICD-10 Code</label>
                                    <div>
                                        <input type="text" class="form-control" id="ICD" name="ICD" placeholder="ICD Code" required="">
                                    </div>
                            </div>
                   </div>
                     <div class="col-sm-6">
                            <div class="form-group">

                            <div id="container">
                            <div id="label">Claim Details</div>
                            </div>

                            </div>
                     </div> 
                            
                        <div class="col-sm-6">
                                    <div class="form-group">
                                     <label class="control-label" for="Treatment">Treatment Date</label>
                                        <div class='input-group date' id='datetimepicker11'>
                                            <input type='text' class="form-control" id="Treatment" name="Treatment" placeholder="/   /   /" required=""/>
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar">
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $(function () {
                                        $('#datetimepicker11').datetimepicker({
                                            daysOfWeekDisabled: [0, 6]
                                        });
                                    });
                                </script>

                        <div class="col-sm-6">
                            <div class="form-group">
                                    <label class="control-label" for="Amount">Amount</label>
                                        <div>
                                            <input type="text" class="form-control" id="Amount" name="Amount" placeholder="0.00" required="" style="width:300px;">
                                           
                                        </div>
                                </div>

                        </div>
                    <div class="form-group"> 
                                <div class="row">
                                    <div class="col-sm-offset-5 col-sm-3  btn-submit">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                    </div>
            
              </form>
            </div>
         
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

