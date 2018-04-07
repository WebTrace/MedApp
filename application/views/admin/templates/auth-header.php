<!DOCTYPE html>
<html>
    <head>
        <title>CLAIMA - <?Php echo $title; ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>MEDICS</title>
        <!--Google fonts-->
        <!--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">-->
        
        <link href="<?Php echo base_url();?>assets/admin/css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?Php echo base_url();?>assets/admin/css/sb-admin.css" rel="stylesheet">
        
        <!-- Morris Charts CSS -->
        <link href="<?Php echo base_url();?>assets/admin/css/plugins/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?Php echo base_url();?>assets/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body id="body-container">
        <div class="wrapper">
            <nav class="navbar navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?Php echo base_url(); ?>signin">MEDICS</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <?Php if(!isset($_SESSION["USER_ID"])) : ?>
                        <li class="dropdown">
                            <a href="<?Php echo base_url(); ?>signin" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lock"></i> Sign in</a>
                        </li>
                        <li class="dropdown">
                            <a href="<?Php echo base_url(); ?>signup" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plus"></i> Sign up</a>
                        </li>
                    <?Php else : ?>
                        <li class="dropdown">
                            <a href="<?Php echo base_url(); ?>signin" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i> <?Php echo substr($this->session->userdata("FNAME"), 0, 1) . " " . $this->session->userdata("LNAME"); ?></a>
                        </li>
                        <li class="dropdown">
                            <a href="<?Php echo base_url(); ?>signout" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plus"></i> Sign out</a>
                        </li>
                    <?Php endif; ?>
                </ul>
            </nav>