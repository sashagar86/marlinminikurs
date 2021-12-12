<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="/tasks/css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="/tasks/css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="/tasks/css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="/tasks/css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="/tasks/css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="/tasks/css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="/tasks/css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="/tasks/css/fa-regular.css">
    </head>
<body class="mod-bg-1 mod-nav-link ">
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home</a>
            </li>
            <?php for($i = 1; $i < 11;  $i++):?>
                <li class="nav-item active">
                    <a class="nav-link" href="/tasks/task_<?php echo $i?>.php">Task <?php echo $i?></a>
                </li>
            <?php endfor;?>
        </ul>
    </nav>
</div>