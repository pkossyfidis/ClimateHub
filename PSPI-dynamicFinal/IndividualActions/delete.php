<?php

    $hostname = "localhost";
    $database = "climate_hub";

    $Admin = "Admin";
    $Admin_password = "climatehub";

    $link = mysqli_connect($hostname, $Admin, $Admin_password, $database);
    // Check connection
    if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $title = $_GET['title']; // $id is now defined

    // or assuming your column is indeed an int
    // $id = (int)$_GET['id'];

    mysqli_query($link,"DELETE FROM card WHERE Title='".$title."'");
    mysqli_close($link);
    header("Location: individualactionsAdmin.php");
?> 