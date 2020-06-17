<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
if(!isset($_SESSION['adminloggedin']))
{
    header("location: login.php");  
}
else
{
    include('../db_config.php');
    $adminloggedin = $_SESSION['adminloggedin'];
}

?>
<?php include('../db_config.php'); ?>
<!doctype html>
<html lang="en-US">
<style type="text/css">
    body {
    color: #676a6c;
    height: 100%;
    direction: ltr;
    overflow-x: hidden;
    font-size: 14px !important;
    font-family: 'Open Sans', Arial, sans-serif;
    }

    #aside nav ul li a {
        font-size: 14px !important;
    }
</style>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Admin Panel</title>
        <meta name="description" content="" />
        <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

        <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
        <link rel="icon" type="image/png" href="img/favicon.ico" />
        <link rel="icon" type="image/gif" href="img/favicon.ico" />

        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

        <!-- WEB FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />

        <!-- CORE CSS -->
       
        <link href="../assets1/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets1/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />
        <link href="../assets1/css/jquery.datetimepicker.css" rel="stylesheet" type="text/css" />
       <!-- <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />-->

        <!-- THEME CSS -->
        <link href="../assets1/css/essentials.css" rel="stylesheet" type="text/css" />
        <link href="../assets1/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="../assets1/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- PAGE LEVEL STYLES -->
        <link href="../assets1/css/layout-datatables.css" rel="stylesheet" type="text/css" />        
        
    <style>
        .inside_div
        {
            border : 1px dotted #ccc;       
        }
        .inside_div1
        {
            border : 1px dotted #ccc;  
            padding: 2%;
        }
        form .row {
             margin-bottom: 0px;
        }
        div.tabletools-topbar {
            margin-top:-56px;
            margin-right:130px;
        }
        .btn>i {
            padding-right: 0px;
        }
        .float-right{
            float: right;
        }
        .active{
            font-weight: bold;
        }
        .multiselect-container
        {
            max-height:350px;
            overflow: scroll;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <aside id="aside">
            <nav id="sideNav"><!-- MAIN MENU -->
                <ul class="nav nav-list">
                    
                    <li>
                        <a href="index.php">
                            <i class="main-icon fa fa-dashboard"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="users.php">
                            <i class="main-icon fa fa-users"></i><span>Users</span>
                        </a>
                    </li>
                    <li class="el_primary">
                        <a href="#">
                            <i class="fa fa-menu-arrow pull-right"></i>
                            <i class="main-icon fa fa-cart-plus"></i> <span>Add Packages</span>
                        </a>
                        <ul>

                            <li><a href="pack_name.php">Package Name</a></li>
                            <li><a href="pack_details.php">Package Details</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="badges.php">
                            <i class="main-icon fa fa-id-badge"></i><span>Badges</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="bid_pack.php">
                            <i class="main-icon fa fa-money"></i><span>Bid Packages</span>
                        </a>
                    </li>
                    <li>
                        <a href="winner.php">
                            <i class="main-icon fa fa-list"></i><span>Winner List</span>
                        </a>
                    </li>
                    <li class="el_primary">
                        <a href="#">
                            <i class="fa fa-menu-arrow pull-right"></i>
                            <i class="main-icon fa fa-cart-plus"></i> <span>Order</span>
                        </a>
                        <ul>

                            <li><a href="order_pro.php">Order Product</a></li>
                            <li><a href="order_pack.php">Order Package</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="transaction.php">
                            <i class="main-icon fa fa-credit-card"></i><span>Transactions</span>
                        </a>
                    </li>
                    <li>
                        <a href="all_bids.php">
                            <i class="main-icon fa fa-bitcoin"></i><span>All Bids</span>
                        </a>
                    </li> -->
                    
                    
                </ul>
            </nav>
            <span id="asidebg"><!-- aside fixed background --></span>
        </aside>

        <header id="header">
            <button id="mobileMenuBtn"></button>
            <span class="logo pull-left">
                    <h3 alt="logo" style = "height:35px;color:#fff;margin-top:4%;" />Admin Panel</h3>
            </span>
            <nav>
                <!-- OPTIONS LIST -->
                <ul class="nav pull-right">
                    <li class="dropdown pull-left">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img class="user-avatar" alt="" src="../assets1/images/noavatar.jpg" height="34" /> 
                            <span class="user-name">
                                <span class="hidden-xs">
                                <?php echo $_SESSION['ausername']; ?> <i class="fa fa-angle-down"></i>
                                </span>
                            </span>
                        </a>
                        <ul class="dropdown-menu hold-on-click">
                            <!-- <li>
                                <a href="chpass.php"><i class="fa fa-key"></i> Change Password</a>
                            </li> -->
                            <li>
                                <a href="logout.php"><i class="fa fa-power-off"></i>Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
    <!-- /HEADER -->
