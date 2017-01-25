<?php 
    $tbName = "admin";
    $selectArr = array(
      'where' => array('email'=>session::getter("email")),
      'return_type' => 'one'
    );
    $result =  $db->selection($tbName,$selectArr);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>berklay dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">    

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- summernote editor  -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" href="css/custom.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Berklay admin</a>
            </div>


            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                 <!--  message-preview  -->
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
                                        <h5 class="media-heading"><strong>John Smith</strong>
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
                 <!--  notification or alert  -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <!--  profile & logout  -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php if(!empty($result['username'])){ echo $result['username']; }?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="gallery.php">Gallery image</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#project">projects <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="project" class="collapse">
                            <li>
                                <a href="create-project.php">Create projects</a>
                            </li>
                            <li>
                                <a href="comming-project.php">upcomming projects</a>
                            </li>
                            <li>
                                <a href="ongoing-project.php">ongoing projects</a>
                            </li>
                            <li>
                                <a href="ready-project.php">ready projects</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#feature">Features <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="feature" class="collapse">
                            <li>
                                <a href="create-feature.php">create feature</a>
                            </li>
                            <li>
                                <a href="structural.php">structural</a>
                            </li>
                            <li>
                                <a href="common.php">common area</a>
                            </li>
                            <li>
                                <a href="typical.php">typical appartment</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#service">Service <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="service" class="collapse">
                            <li>
                                <a href="create-service.php">create service</a>
                            </li>
                            <li>
                                <a href="bank.php">bank loan</a>
                            </li>
                            <li>
                                <a href="legal.php">legal service</a>
                            </li>
                            <li>
                                <a href="maintenance.php">Maintenance</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="about.php">About us</a>
                    </li>
                    <li>
                        <a href="inquiry.php">Inquiry Message</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>