<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">
    <script src="angular.js"></script>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style type="text/css">
    .navbar-default {
        background-color: #007bff;
        border-color: #007bff;
    }
    .navbar-default .navbar-nav > li > a {

        color: #007bff;
    }
    .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
        background-color: #007bff;
        color: #FFFFFF;
    }
    .customnav{
        background-color: #fff: 
    }
</style>
</head>
<body ng-app="myApp" ng-controller="usersCtrl">
    <div id="wrapper">
        <nav style="" class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="a-custom navbar-brand" href="index.html">&nbsp;&nbsp; Inventory</a>
            </div>
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> User <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div style="background-color: #007bff;
            border-color: #007bff;" class="collapse navbar-collapse navbar-default navbar-ex1-collapse">
            <ul style="background-color: #fff;
            border-color: #fff; border-right: 1px solid black" class="nav navbar-nav side-nav">
            <li>
                <a href="#">Warehouse 1</a>
            </li>
            <li>
                <a href="#">Warehouse 2</a>
            </li>
            <li>
                <a href="#">Warehouse 3</a>
            </li>
        </ul>
    </div>
</nav>