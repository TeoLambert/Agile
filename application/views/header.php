<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Project Tool</title>
</head>
<header>
    <h1>Project Tool</h1>
    <?php
        if(isset($_SESSION["user_connected"]))
        {
            echo "Welcome " . $_SESSION["user_connected"]->use_surname." ". $_SESSION["user_connected"]->use_name;
            echo "\n <div id=\"log_out\"><a href=".base_url()."Registration/logout>Logout</a></div>";
        }
        else
        {
            echo "  <div id=\"create_account\"><a href=".base_url()."Registration/account_creation>Create an account</a></div>\n";
            echo "  <div id=\"log_in\"><a href=".base_url()."Registration/user_login>Log-in</a></div>" ;
        }
    ?>
</header>