<?php
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    $hostname = "localhost";
    $database = "climate_hub";

    $Admin = "Admin";
    $Admin_password = "climatehub";

    $link = mysqli_connect($hostname, $Admin, $Admin_password, $database);

    mysqli_select_db($link, 'users');

    $Qcheck_user = "SELECT users.* FROM users WHERE Email = '$Email' 
                    AND Password = '$Password' ";

    $check_user = mysqli_query($link, $Qcheck_user) or die("error");

    $result = $link->query($Qcheck_user);

    if($result->num_rows > 0){
        while($row = $result -> fetch_assoc()){
            session_start();

            $_SESSION['UserName'] = $row['UserName'];
        }
    }

    $number = mysqli_num_rows($check_user);
    if($number > 0 ){
        header("Location: ../index.php");
    }else{
        $fail = 'fail';
        header("Location: login2.php?fail=$fail");
    }


?>