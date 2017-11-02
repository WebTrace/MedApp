<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
            <title>CLAIMA</title>
            <link href="<?Php echo base_url();?>assets/admin/css/bootstrap.css" rel="stylesheet">
            <!-- Custom CSS -->
            <link href="<?Php echo base_url();?>assets/admin/css/sb-admin.css" rel="stylesheet">
            
            <!-- Morris Charts CSS -->
            <link href="<?Php echo base_url();?>assets/admin/css/plugins/morris.css" rel="stylesheet">
            
            <!--Animate css-->
            <link href="<?Php echo base_url();?>assets/css/animate.css" rel="stylesheet">
            
            <!-- Custom Fonts -->
            <link href="<?Php echo base_url();?>assets/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            
            <!--Tshego's library references-->
            <link href='<?php echo base_url();?>assets/admin/css/fullcalendar.css' rel='stylesheet' />
            <link href="<?php echo base_url();?>assets/admin/css/bootstrapValidator.min.css" rel="stylesheet" />        
            <link href="<?php echo base_url();?>assets/admin/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
            <!--<link href="<?php echo base_url();?>assets/admin/css/custom.css" rel="stylesheet" /> //This file conflicts with our styles-->
            
            <!--Ace style reference-->
            <!--<link href="<?Php echo base_url();?>assets/ace.min.css" rel="stylesheet">-->
        </head>
        <body>
            <div id="wrapper">
                <!-- Navigation -->
                <nav class="navbar navbar-fixed-top" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="dashboard">CLAIMA</a>
                    </div>
                    <!-- Top Menu Items -->
                    <ul class="nav navbar-right top-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                            <ul class="dropdown-menu message-dropdown">
                                <li class="message-preview">
                                    <a href="#">
                                        <div class="media">
                                            <span class="pull-left">
                                                <img class="media-object" src="http://placehold.it/50x50" alt="">
                                            </span>
                                            <div class="media-body">
                                                <h5 class="media-heading"><strong>B Maranatha</strong>
                                                </h5>
                                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="message-preview">
                                    <a href="#">
                                        <div class="media">
                                            <span class="pull-left">
                                                <img class="media-object" src="http://placehold.it/50x50" alt="">
                                            </span>
                                            <div class="media-body">
                                                <h5 class="media-heading"><strong>T Mojela</strong>
                                                </h5>
                                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="message-preview">
                                    <a href="#">
                                        <div class="media">
                                            <span class="pull-left">
                                                <img class="media-object" src="http://placehold.it/50x50" alt="">
                                            </span>
                                            <div class="media-body">
                                                <h5 class="media-heading"><strong>S Sakoane</strong>
                                                </h5>
                                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="message-footer">
                                    <a href="#">Read All New Messages</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                            <ul class="dropdown-menu alert-dropdown">
                                <li>
                                    <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                                </li>
                                <li>
                                    <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                                </li>
                                <li>
                                    <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                                </li>
                                <li>
                                    <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                                </li>
                                <li>
                                    <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                                </li>
                                <li>
                                    <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">View All</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i> <?Php echo substr($this->session->userdata("FNAME"), 0, 1) . " " . $this->session->userdata("LNAME"); ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                                </li>
                                <li>
                                    <a href="settings"><i class="fa fa-fw fa-gear"></i> Settings</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?Php echo base_url(); ?>signout"><i class="fa fa-fw fa-power-off"></i> Sign out</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav side-nav">
                            <li class="active">
                                <a href="dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="patients"><i class="fa fa-fw fa-user-md"></i> Patients</a>
                            </li>
                            <li>
                                <a href="claim"><i class="fa fa-fw fa-file-text-o"></i> Claims</a>
                            </li>
                            <li>
                                <a href="appointment"><i class="fa fa-fw fa-calendar"></i> Appointments</a>
                            </li>
                            <li>
                                <a href="tasks"><i class="fa fa-check-square-o"></i> Tasks</a>
                            </li>
                            <!--<li>
                                <a href="invoice"><i class="fa fa-fw fa-money"></i> Invoice</a>
                            </li>-->
                            <li>
                                <a href="reports"><i class="fa fa-fw fa-bar-chart-o"></i> Reports</a>
                            </li>
                            <!--<li>
                                <a href="users"><i class="fa fa-fw fa-users"></i> Manage users</a>
                            </li>-->
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
                <div id="page-wrapper">
                    <div class="container-fluid">