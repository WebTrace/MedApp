
<?Php 
    if(isset($_SESSION['title']))
    {
        $title          = $this->session->flashdata('title');
        $message_type   = $this->session->flashdata('message_type');
        $message        = $this->session->flashdata('message');
        
        $output = '<script>';
        $output .= 'notification_message(' . $message_type . ', ' . $title . ', ' . $message. ')';
        $output .= '</script>';
    }
?>



<div class="container">
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

    <div style="background-image: url(<?Php echo base_url(); ?>assets/images/bg1.jpg)">
        <div class="controls" style="background: rgba(255, 255, 255, 0.9);" class="overlay-bg">
            <div class="col-lg-7 col-md-8 col-sm-8">
                <div class="btn-controls-group">
                    <a href="#" class="btn-controls" id="add-user" data-toggle="modal" data-target="#add_task_modal" onclick="return false;" accesskey="t">
                        <i class="fa fa-plus"></i> New Task
                    </a>
                    <a href="<?Php echo base_url(); ?>reconciles" class="btn-controls" id="email"><i class="fa fa-files-o"></i> Reconcile</a>
                    <a href="#" class="btn-controls" id="print" onclick="return false;"><i class="fa fa-print"></i> Print</a>
                    <!--<a href="<?Php echo base_url(); ?>reconciles" class="btn-controls" id="reconcile"><i class="fa fa-print"></i> Reconcile</a>-->
                    <div id="export-control" class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="export-option" 
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <i class="fa fa-exchange"></i> Export
                            <span class="caret"></span>
                        </button>
                        <ul style="margin: 12px 0px 0px -2px; border-radius: 0px; font-size: 13px;
                                   border: none;" class="dropdown-menu dropdown-menu-fix" aria-labelledby="dropdownMenu1">
                            <li><a href="#">PDF</a></li>
                            <li><a href="#">Word</a></li>
                            <li><a href="#">Excel</a></li>
                            <!--<li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="fix-spacing col-lg-2 col-md-4 col-sm-4 col-xs-4">
                Show
                <select name="limit" id="limit" class="limit">
                    <option value="0">---</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                    <option value="">Show all</option>
                </select>
                <label id="control-show-lbl">
                   
                </label>
            </div>
            <div class="fix-spacing col-lg-3 col-md-8 col-sm-8 col-xs-8">
                <div class="search-control">
                    <input type="search" id="search" name="search" class="search" placeholder="Search task">
                    <span id = "mg-glass" class="glyphicon glyphicon-search"></span>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
<div id="exTab2" class="container">	  
    <!--<ul class="nav nav-tabs">  
          <li class="active">  
              <a  href="#1" data-toggle="tab"><span class="fa fa-eye"></span>  View Task</a>  
           </li>  
           <li><a href="#2" data-toggle="tab"><span class="fa fa-plus"></span>  Add New Task</a>  
          </li>  
          <li><a href="#3" data-toggle="tab"><span class="fa fa-edit"></span>  Edit Task</a>  
           </li>  
           <li><a href="#4" data-toggle="tab"><span class="fa fa-print"></span>  Print Task</a>  
           </li>  
          <li><a href="#5" data-toggle="tab"><span class="fa fa-trash-o"></span>  Delete Task</a>  
           </li>  
    </ul>-->  
    <table class="table table-bordered table-style table-responsive" style="height: 25px">  
          <tr>  
            <th colspan="2" style="border-right: none"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></th>  
            <th colspan="2" style="text-align: center"> November</th>  
            <th colspan="2" style="border-left: none"><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></th>  
          </tr>  
    </table>  
  
     <div class="row">
       <div class="col-lg-12">
            <div class="tab-pane fade in active" id="1">
            <div class="table-data">  
                <?Php if(count($tasks) > 0) : $count = 1; ?>
               <table class="table table-bordered table-hover" cellpadding="0" cellspacing="0" border="0">  
                   <thead>  
                      <tr style="text-align: center">  
                        <th>#</th>  
                        <th>Priority</th>  
                        <th>Task Name</th>  
                        <th>Description</th>  
                        <th>Schedule Start</th>  
                        <th>Schedule End</th>  
                         <th colspan="
                                        <?Php
                                            $is_visible = FALSE;
                                            if($this->session->userdata("USER_ROLE") != 2) {
                                                echo 4;
                                                $is_visible = TRUE;
                                            } else {
                                                echo 3;
                                            }
                                        ?>
                                        ">Action
                            </th>
                      </tr>  
                    </thead>  
                    <tbody>
                        <?Php foreach($tasks as $task) : ?>
                      <tr data-target="<?Php echo $task['task_id']; ?>">  
                        <td><?Php echo $count; ?></td>  
                        <td>Add User</td>  
                        <td><?Php echo $task['title']; ?></td>  
                        <td><?Php echo $task['description']; ?></td>  
                        <td><?Php echo $task['start_date']; ?></td>  
                        <td><?Php echo $task['due_date']; ?></td>
                        <td><a class="" href="<?Php echo base_url()?>tasks/task_details/<?Php echo $task['task_id']; ?>" id="task_details" title="Task details"><i class="fa fa-eye"></i></a></td>
                        <td><a class="edit-user" href="<?Php echo base_url(); ?>tasks/edit_task/<?Php echo $task['task_id']; ?>" title="Edit task"><i class="fa fa-pencil"></i></a></td>
                        <td><a class="delete-user" id="<?Php echo $task['task_id']; ?>" href="#" title="Remove task"><i class="fa fa-trash"></i></a></td>
                      </tr>  
                    <?Php $count++; endforeach; ?>
                    </tbody>  
          </table>
           <?Php else : ?>
            <h4>No tasks found.</h4>
          <?Php endif; ?>
    </div>
        </div>
       </div>
    </div>
</div> 

    <div class="col-lg-12">
        <div class="modal fade" id="remove-confirm">
            <div class="modal-dialog" id="remove-confirm">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" class="close" data-dismiss="modal">&times;</a>
                        <h2 class="modal-title">Remove</h2>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Are you sure you want to remove this task?</h4>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <?Php 
                            $attr = array('id' => 'frm-remove-task');
                            echo form_open(base_url() . 'tasks/delete_task', $attr); ?>
                            <input type="hidden" name="task_id" id="delete_task_id" class="form-control joseph">
                            <a href="#" id="dismiss-remove-task" class="btn btn-save" onclick="return false;">No</a>
                            <input type="submit" name="btn_submit" class="btn btn-reset" value="Yes"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="row">
    <div class="col-lg-12">
        <div class="modal fade" id="add_task_modal">
            <div class="modal-dialog" id="modal-format">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" class="close" data-dismiss="modal">&times;</a>
                        <h2 class="modal-title"><i class="fa fa-user-plus"></i> ADD NEW TASK</h2>
                    </div>
                    <div class="modal-body">
                       <div class="fieldset">
                    <?php echo validation_errors() ?>
                    <?php echo form_open(base_url() . 'tasks/create_task', array('id' => 'frm-add-new-task')) ?>
                    <form id="save-task">
					<div class="col-md-6 form-line">
			  			<div class="form-group">
			  				<label style="font-size: normal" for="title">Task name</label>
					    	<input type="text" class="form-control joseph" id="title" name="title" value="<?Php echo set_value('title'); ?>" placeholder=" Enter Name" style="height: 48px;
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
                        <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                   <label for="start_date">Scheduled Start</label>
					    	        <input type="date" class="form-control joseph" id="start_date" value="<?Php echo set_value('start_date'); ?>" name="start_date" placeholder="Scheduled Start" style="height: 48px;
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
                                <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                   	<label for="due_date">Schedule End</label>
					    	    <input type="date" class="form-control joseph" id="due_date" name="due_date" value="<?Php echo set_value('due_date'); ?>" placeholder="Schedule End" style="height: 48px;
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
                            <div class="form-group">
					    	<label for="name">Priorities</label>
					    	 <select name="priority" id="priority"  class="form-control joseph" style="height: 48px;
                                                                                                       background-color: #fdfdfb;
                                                                                                       -webkit-border-radius: 2px;
                                                                                                       -moz-border-radius: 2px;
                                                                                                        border-radius: 2px;
                                                                                                        border: 3px solid #e9e6e0;
                                                                                                        -webkit-box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075);
                                                                                                         box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075);
                                                                                                         font-family: 'Montserrat', sans-serif;
                                                                                                          font-size: 15px;">
                                    <option selected value="0">
                                        Choose One:
                                    </option>

                                    <option value="Urgent">
                                        Urgent
                                    </option>

                                    <option value="Not urgent">
                                        Not urgent
                                    </option>

                                    <option value="Less Urgent">
                                       Less Urgent
                                    </option>
                                </select>
			  			    </div>
			  		</div>
			  		<div class="col-md-6">
			  			<div class="form-group">
			  				<label for ="description"> Description</label>
			  			 	<textarea  class="form-control joseph" rows="8" value="<?Php echo set_value('description'); ?>" name="description" id="description" placeholder="Enter Your Description" style="background-color: #fdfdfb;
                                                                                           -webkit-border-radius: 2px;
                                                                                           -moz-border-radius: 2px;
                                                                                            border-radius: 2px;
                                                                                            border: 3px solid #e9e6e0;
                                                                                            -webkit-box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075);
                                                                                             box-shadow: inset 0 0px 0px rgba(0, 0, 0, .075);
                                                                                             font-family: 'Montserrat', sans-serif;
                                                                                              font-size: 15px;"></textarea>
                        </div>
					</div>    
                   
                    <div class="modal-footer">
                        <button type="reset" name="btn_reset" class="btn btn-reset joseph" id="btn-reset">
                            Reset
                        </button>
                        <button type="submit" name="btn_submit" class="btn btn-save joseph" id="save-task" title="Save task and complete later">
                            Add task <span id="save-task-request"><i id="save-task-request" class="fa fa-circle-o-notch fa-spin"></i></span>
                        </button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>