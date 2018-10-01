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
            background-color: #85d3c0;
        }
        
        .welcome-title-position{
            margin-top: 140px;
        }
        .container{
            padding : 15px;
        }
        .project{
            background-color : #fff;
            border-radius : .25rem;
            overflow : hidden;
            box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
        }
    </style>
    <script src="<?=asset('js/jquery.min.js')?>"> </script>
    <script src="<?=asset('js/bootstrap.js')?>"> </script>
</head>
<header>
<nav class="navbar navbar-light bg-light">
            <a class="navbar-brand"><h2>Project tool</h2></a>
            
            <div class="text-right account-mangage-position">
                

    <?php
        if(isset($_SESSION["user_connected"]))
        {?>
            <a class="btn btn-outline-success" href="<?=base_url()?>Project/index"> My projects </a>
            <span> &nbsp; &nbsp; &nbsp; &nbsp; </span>
            <a class="btn btn-outline-success" href="<?=base_url()?>Registration/logout"> Logout </a>

        <?php 
        }
        else
        { ?>
                    <a class="btn btn-outline-success" href="<?=base_url()?>Registration/account_creation"> Create an account </a>
                    <span> &nbsp; &nbsp; &nbsp; &nbsp; </span>
                    <a class="btn btn-outline-success" href="<?=base_url()?>Registration/user_login"> Login </a>
       <?php } ?>

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
    
         