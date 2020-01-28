<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $data['title'];?></title>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/Assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/Assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/Assets/css/ionicons.min.css" />
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/Assets/css/AdminLTE.min.css" />
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/Assets/css/_all-skins.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <script src="<?php echo BASEURL; ?>/Assets/js/jquery.min.js" type="text/javascript"></script>
    <style type="text/css">
        .main-footer {
                background: #fff;
                padding: 5px;
                color: #444;
                border-top: 1px solid #d2d6de;
                bottom: 0;
                left: 0;
                position: fixed;
                right: 0;
                z-index: 999;
            }
    </style>
</head>
<body class="hold-transition layout-top-nav fixed skin-green">
    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="<?php echo BASEURL;?>" class="navbar-brand"><b>WebApp</b>APP</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo BASEURL; ?>/user">User</a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="/account/login.aspx">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="content-wrapper col-md-12">
    <section class="content col-md-12">