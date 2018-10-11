<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="<?=asset('css/bootstrap.css')?>">
    <title>Project Tool</title>
    <style>
        body{
            background-color:#dce0db;
        }
        .navbar{
            margin-bottom: 25px;
        }
    </style>
    <script src="<?=asset('js/jquery.min.js')?>"> </script>
    <script src="<?=asset('js/bootstrap.js')?>"> </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<header>
<nav class="navbar navbar-expand-lg bg-success navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="<?=base_url()?>"> PROJECTS TOOL </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- <ul class="navbar-nav mr-auto">
                </ul> -->
            <?php
                if(isset($_SESSION["user_connected"]))
                {?>
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <?php
                            // TODO: spec project names
                        ?>
                                <?foreach ($_SESSION["names"] as $name {?>
                                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <? print_r($_SESSION["names"]);?>
                                        </a>
                                <?}?>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?=base_url()?>Project/new_project"> Create project </a>
                                </div>
                            </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                            
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenunotify" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell"></i>  <sup> <span class="badge badge-danger"> 5 </span> </sup>
                                </a>
                                        
                                <div class="dropdown-menu" aria-labelledby="dropdownMenunotify">
                                    <a class="dropdown-item" href="#"> Notification one </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"> Notification two </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"> Notification three </a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user"></i> <?= $_SESSION["use_name"]?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#"> User Profile </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?=base_url()?>Registration/logout"> Logout </a>
                                </div>
                            </li>
                        </ul>

                <?php 
                }
                else
                { ?>
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-item">
                        <a class="nav-link" href="<?=base_url()?>Registration/account_creation"> Create an account </a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="<?=base_url()?>Registration/user_login"> Login </a>
                    </li>
                </ul>
            <?php } ?>
            </div>
        </div>
    </nav>
</header>
<head>
    <?php if(!isset($_SESSION["user_connected"])) { ?>
        <div class="row">
            <div class="col-lg-6 offset-3 welcome-title-position">
                <h3 class="text-center"> WELCOME TO </h3>
                <h1 class="text-center text-success"> PROJECTS TOOL </h1>
            </div>
    </div> <?php } ?>
    
         