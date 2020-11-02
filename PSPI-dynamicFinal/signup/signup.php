<?php

    $FirstName = $_POST['firstname'];
    $LastName = $_POST['lastname'];
    $UserName = $_POST['username'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    $hostname = "localhost";
    $database = "climate_hub";

    $Admin = "Admin";
    $Admin_password = "climatehub";

    $link = mysqli_connect($hostname, $Admin, $Admin_password, $database);

    mysqli_select_db($link, 'users');


    $sql  = "INSERT INTO `users` (UserName,FirstName, LastName,Email, Password) VALUES ('$UserName', '$FirstName', '$LastName', '$Email', '$Password')";

    IF(mysqli_query($link, $sql)){
        echo "User added successfully.";
        header("Location: ../login/login2.php");
    }else{
        echo "ERROR: Could not able to execute $sql." .mysqli_error($link);
    }

?>