<?php

declare(strict_types=1);

session_start();

$_SESSION['user'] = $_POST['userName'];

header('location: ./index.php');