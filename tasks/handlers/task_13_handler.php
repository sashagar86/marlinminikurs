<?php
session_start();

$_SESSION['count']++;

header("Location: /tasks/task_13.php");


