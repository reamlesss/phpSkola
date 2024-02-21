<?php
session_start();
?>

<link rel="stylesheet" href="./assets/navbar.css">

<nav>
    <a href="../home.php">Home</a>
    <?php
    if (isset($_SESSION['username'])) {
        echo '<a href="../data.php">Data</a>';
        echo '<span>Welcome, ' . $_SESSION['username'] . '</span>';
        echo '<a href="logout.php">Logout</a>';
    } else {
        echo '<a href="../index.php">Login/Register</a>';
    }
    ?>
</nav>