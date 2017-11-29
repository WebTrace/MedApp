<div class='row' id='claima-patient'>
    <div class='col-lg-6'>
        <div class='row'>
            <div class='col-lg-12'>
                <h4>Patient Details</h4>
            </div>
            <div class='col-lg-12'>
                <div class='media'>
                    <span class='pull-left format-span'>
                        <i class="fa fa-user-o"></i>
                    </span>
                    <div class='media-body'>
                        <h4 class='media-heading'>Patient name</h4>
                        <p id='full-name'>Emmanuel Kgatla</p>
                    </div>
                </div>
                <div class='media'>
                    <span class='pull-left format-span'>
                        <i class="fa fa-calendar-plus-o"></i>
                    </span>
                    <div class='media-body'>
                        <h4 class='media-heading'>Date of birth</h4>
                        <p id='data-of-birth'>21 September 1991</p>
                    </div>
                </div>
                <div class='media'>
                    <span class='pull-left format-span'>
                        <i class="fa fa-hashtag"></i>
                    </span>
                    <div class='media-body'>
                        <h4 class='media-heading'>ID number</h4>
                        <p id='id-number'>910921 5610 080</p>
                    </div>
                </div>
                <div class='media'>
                    <span class='pull-left format-span'>
                        <i class="fa fa-neuter"></i>
                    </span>
                    <div class='media-body'>
                        <h4 class='media-heading'>Gender</h4>
                        <p id='gender'>Male</p>
                    </div>
                </div>
                <div class='media'>
                    <span class='pull-left format-span'>
                        <i class="fa fa-id-badge"></i>
                    </span>
                    <div class='media-body'>
                        <h4 class='media-heading'>Ethnic group</h4>
                        <p id='ethnic'>African</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='col-lg-6'>
        <div class="row">
            <div class="col-lg-12">
                <h4>Contact details</h4>
            </div>
            <div class="col-lg-12">
                <div class='media'>
                    <span class='pull-left format-span'>
                        <i class="fa fa-map-marker"></i>
                    </span>
                    <div class='media-body'>
                        <h4 class='media-heading'>Physical address</h4>
                        <p id='physical-address'>7361 Ext 3, Soshanguve East 0152</p>
                    </div>
                </div>
                <div class='media'>
                    <span class='pull-left format-span'>
                        <i class="fa fa-envelope-open-o"></i>
                    </span>
                    <div class='media-body'>
                        <h4 class='media-heading'>Postal address</h4>
                        <p id='postal-address'>Same as above</p>
                    </div>
                </div>
                <div class='media'>
                    <span class='pull-left format-span'>
                        <i class="fa fa-phone"></i>
                    </span>
                    <div class='media-body'>
                        <h4 class='media-heading'>Contact number</h4>
                        <p id='contact-number'>062 023 6010</p>
                    </div>
                </div>
                <div class='media'>
                    <span class='pull-left format-span'>
                        <i class="fa fa-at"></i>
                    </span>
                    <div class='media-body'>
                        <h4 class='media-heading'>Email address</h4>
                        <p id="email-address">emmanuel66@live.co.za</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="exTab2" class="container">	  
    <ul class="nav nav-tabs">  
          <li class="active">  
              <a  href="#1" data-toggle="tab"><span class="fa fa-eye"></span>  View Task Details</a>  
           </li>  
           <li><a href="#2" data-toggle="tab"><span class="fa fa-plus"></span>  New Task</a>  
          </li>  
          <li><a href="#3" data-toggle="tab"><span class="fa fa-edit"></span>  Edit Task</a>  
           </li>  
           <li><a href="#4" data-toggle="tab"><span class="fa fa-print"></span>  Print Task</a>  
           </li>  
          <li><a href="#5" data-toggle="tab"><span class="fa fa-trash-o"></span>  Delete Task</a>  
           </li>  
    </ul>  
    <table class="table table-bordered table-style table-responsive" style="height: 25px">  
          <tr>  
            <th colspan="2" style="border-right: none"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></th>  
            <th colspan="3"> November - 2017</th>  
            <th colspan="2" style="border-left: none"><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></th>  
          </tr>  
    </table>  
  
     <div class="tab-content">
        <div class="tab-pane fade in active" id="1">
            <div class="table-data">  
               <table class="table table-hover" cellpadding="0" cellspacing="0" border="0">  
                   <thead>  
                      <tr>  
                        <th>Task No.</th>  
                        <th>Priority</th>  
                        <th>Task Name</th>  
                        <th colspan="3">Description</th>  
                       <th colspan="2">Schedule Start</th>  
                        <th colspan="2">Schedule End</th>  
                        <th>Estimated Effort</th>  
                      </tr>  
                    </thead>  
                    <tbody>  
                      <tr>  
                        <td>1</td>  
                       <td>Medium</td>  
                        <td>Add Patient</td>  
                        <td colspan="3">kgdfkflhgdjkfghdfghfdgkdldfh</td>  
                        <td colspan="2">20/11/17 2:30 pm</td>  
                        <td colspan="2">20/11/17 2:30 pm</td>  
                        <td>2hrs</td>  
                      </tr>  
                    </tbody>  
          </table>  
    </div>
        </div>
        <div class="tab-pane fade" id="2">
				<form>
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<label for="Taskname">Task name</label>
					    	<input type="text" class="form-control" id="Taskname" placeholder=" Enter Name">
				  		</div>
                        <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                   <label for="scheduleStart">Scheduled Start</label>
					    	        <input type="datetime-local" class="form-control" id="scheduleStart" placeholder="Scheduled Start">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                   	<label for="scheduleEnd">Schedule End</label>
					    	    <input type="datetime-local" class="form-control" id="scheduleEnd" placeholder="Schedule End">
                                    
                                    <label for="scheduleEnd">
                                        <input type="checkbox" id="noDueDate">
                                        No due date
                                    </label>
                                </div>
                            </div>
                        <div class="form-group">
					    	<label for="Priorities">Priorities</label>
					    	 <select class="form-control" id="priorities" name="priorities">
                                    <option selected value="na">
                                        Choose One:
                                    </option>

                                    <option value="service">
                                        High
                                    </option>

                                    <option value="suggestions">
                                        Medium
                                    </option>

                                    <option value="product">
                                       Low
                                    </option>
                                </select>
			  			    </div>
			  		</div>
			  		<div class="col-md-6">
			  			<div class="form-group">
			  				<label for ="description"> Description</label>
			  			 	<textarea  class="form-control" id="description" placeholder="Enter Your Description"></textarea>
			         </div>
			  			<div>
                          <nav class="btn-bar nav-dark">
                              <button type="button" class="btn btn-glass btn-success"><i class="fa fa-plus" aria-hidden="true"></i>  Add Task</button>
                            <button type="reset" style="margin-right: 5px" class="btn btn-glass btn-danger"><i class="fa fa-refresh" aria-hidden="true"></i>  Reset </button>
                          </nav>
			  			</div>
			  			
					</div>
				</form>
         </div>
        <div class="tab-pane fade" id="3">Edit Task</div>
        <div class="tab-pane fade" id="4">Print Task</div>
        <div class="tab-pane fade" id="5">Delete Task</div>
        </div>
</div>  
