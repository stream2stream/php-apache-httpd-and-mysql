<?php

    include ('useful.php');
    session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>QA Event Booking</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/normalize.min.css">
    <link href="css/foundation.css" rel="stylesheet" />
    <link href="css/socialglyphs/socialglyphs-webfont.css" rel="stylesheet" />
    <link href="css/social-glyphs.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/main.css">
    <link href="css/qa-styles.css" rel="stylesheet" />

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body class="page-shade">



<div class="full-width">
    <div class="row">
        <div class="large-12 columns">
            <div class="nav-bar right">
                 <ul class="button-group">
                    <li><a href="index.php" class="button">Home</a></li>
                    <li><a href="#" class="button">About Us</a></li>
                     <li><a href="#" class="button">Search</a></li>
                       <?php



                            //if they are logged in
                            if (isset($_SESSION['userid'])) {
                                echo ('<li><a href="logout.php" class="button">Logout</a></li>');
                            } else {
                                echo ('<li><a href="register.php" class="button">Register</a></li>
                                        <li><a href="login.php" class="button">Log in</a></li> ');
                            }
                        ?>
                </ul>
            </div>
            <h1>
                <img src="img/qalogo-medium.png" /> Event Booking </h1>

        </div>
    </div>
        </div>
    <div class="stripe"></div>
