<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
            <title>Medics</title>
			<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
            <link href="<?Php echo base_url();?>assets/app/css/bootstrap.css" rel="stylesheet">
            
            <!--Bootstrap datepicker-->
            <link href="<?Php echo base_url();?>assets/app/libs/datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
            
            <!-- Custom CSS -->
            <link href="<?Php echo base_url();?>assets/app/css/sb-admin.css" rel="stylesheet">
            <link href="<?Php echo base_url();?>assets/app/css/joseph-tasks.css" rel="stylesheet">
            
            <!-- Morris Charts CSS -->
            <link href="<?Php echo base_url();?>assets/app/css/plugins/morris.css" rel="stylesheet">
            
            <!--Animate css-->
            <!--<link href="<?Php echo base_url();?>assets/css/animate.css" rel="stylesheet">-->
            
            <!-- Custom Fonts -->
            <link href="<?Php echo base_url();?>assets/app/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            
            <!--Tshego's library references-->
            <!--<link href='<?php echo base_url();?>assets/admin/css/fullcalendar.css' rel='stylesheet' />
            <link href="<?php echo base_url();?>assets/admin/css/bootstrapValidator.min.css" rel="stylesheet" />        
            <link href="<?php echo base_url();?>assets/admin/css/bootstrap-colorpicker.min.css" rel="stylesheet" />-->
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
                        <a class="navbar-brand" style="padding: 10px 15px;" href="<?Php echo base_url(); ?>signin"><span id="logo-de">M</span>edics</a>
                    </div>
                    <!-- Top Menu Items -->
                    <ul class="nav navbar-right top-nav">
<!--                        <li><a id="trial-link" href="#">Your trial will expire in <?Php echo $this->session->userdata("REM_DAYS"); ?> days</a></li>-->
                        <li class="dropdown">
                            <a style="position: relative;" href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i> 
                                <span class="notifi-counter text-center">10</span>
                            </a>
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
                        <li>
                            <a style="position: reltive;" href="<?Php echo base_url(); ?>messages">
                                <i class="fa fa-fw fa-envelope-o"></i>
                                <span class="notifi-counter text-center">5</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-question"></i></a>
                        </li>
                        <li>
                            <a href="<?Php echo base_url(); ?>settings"><i class="fa fa-fw fa-gear"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user-o"></i> <?Php echo substr($this->session->userdata("FNAME"), 0, 1) . " " . $this->session->userdata("LNAME"); ?> <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="default-branch text-center">
                                        <div><h4>Default branch</h4></div>
                                        <p>
                                            <span class="de-br-label">Name</span>
                                            <span class=de-br-data><?Php echo $this->session->userdata("BRANCH_NAME"); ?></span>
                                        </p>
                                        <p>
                                            <span class="de-br-label">Contact</span>
                                            <span class=de-br-data><?Php echo $this->session->userdata("CONTACT_NO"); ?></span>
                                        </p>
                                        <p>
                                            <span class="de-br-label">Email</span>
                                            <span class=de-br-data><?Php echo $this->session->userdata("EMAIL_ADDR"); ?></span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <a href="<?Php echo base_url(); ?>user/profile"><i class="fa fa-fw fa-user"></i> Profile</a>
                                </li>
                                <li>
                                    <a href="<?Php echo base_url(); ?>user/profile"><i class="fa fa-fw fa-calendar-times-o"></i> My schedule</a>
                                </li>
                                <li>
                                    <a href="<?Php echo base_url(); ?>settings"><i class="fa fa-fw fa-gear"></i> Settings</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?Php echo base_url(); ?>signout"><i class="fa fa-fw fa-power-off"></i> Sign out</a>
                                </li>
                            </ul>
                        </li>
                        <!--
                        <?Php if($this->session->userdata("USER_ROLE") != 2) : ?>
                            <li>
                                <a class="upgrade-btn" href="<?php echo base_url(); ?>account/upgrade">Upgrade</a>
                            </li>
                        <?Php endif; ?>
                        -->
                    </ul>
                    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav side-nav">
                            <li class="active">
                                <a href="<?Php echo base_url(); ?>dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="<?Php echo base_url(); ?>patients"><i class="fa fa-fw fa-user-md"></i> Patients</a>
                            </li>
                            <li>
                                <a href="<?Php echo base_url(); ?>appointment"><i class="fa fa-fw fa-calendar-times-o"></i> Appointments</a>
                            </li>
                            <?Php if($this->session->userdata("USER_ROLE") != 2) : ?>
                                <li>
                                    <a href="<?Php echo base_url(); ?>claim"><i class="fa fa-fw fa-file-text-o"></i> Claims</a>
                                </li>
                            <?Php endif; ?>
                            <li>
                                <a href="<?Php echo base_url(); ?>appointment/waiting_room"><i class="fa fa-files-o"></i> Collections</a>
                            </li>
                            <li>
                                <a href="<?Php echo base_url(); ?>tasks"><i class="fa fa-check-square-o"></i> Tasks</a>
                            </li>
                            <!--<li>
                                <a href="invoice"><i class="fa fa-fw fa-money"></i> Invoice</a>
                            </li>-->
                            <li>
                                <a href="<?Php echo base_url(); ?>reports"><i class="fa fa-fw fa-bar-chart-o"></i> Reports</a>
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