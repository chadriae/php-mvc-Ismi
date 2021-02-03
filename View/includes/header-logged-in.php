<?php
session_start();
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="becoders.css">
    <title>Becode - ISMI</title>
</head>

<body>
    <section>
        <header>
            <nav>
                <div class="left-nav ">
                    <li><i class="fab fa-behance" aria-hidden="true"></i><a class="ismi" href="index.php">Connect</a> </li>
                </div>
                <div class="right-nav">
                    <ul class=nav-list>
                        <li><a class="ismi" href="index.php">Developers</a></li>
                   <!--     <li><a class="ismi" href="index.php?page=info">Profiles</a></li>  -->
                        <li><a class="ismi" href="index.php?page=blog">Posts </a></li>
                        <li><a class="ismi" href="index.php?page=dashboard"><i class="fas fa-user" aria-hidden="true"></i>dashboard</a></li>
                        <div id="myDIV">
                           <li><a class="ismi" href="index.php"><i class="fas fa-sign-out-alt" aria-hidden="true">Sign out</i></a>
                            </li> 
                        </div>

                    </ul>
                </div>

            </nav>
        </header>