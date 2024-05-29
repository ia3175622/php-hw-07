<?php
declare(strict_types=1);

session_start();

if (isset($_SESSION['user'])) {
    echo '----------------------- <br>';
    echo 'Hello, ' . $_SESSION['user'] . '!';
    echo '<br><a href="./exit.php">Exit</a>';
    echo '<br> -----------------------';
} else {
    include('form.html');
}
