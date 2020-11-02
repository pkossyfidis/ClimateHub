<?php
    $check = FALSE;
    if(isset($_GET['search'])){
        $user = $_GET['search'];
    }else{
        $user = NULL;
    }
    

    $Un = '';
    $Fn = '';
    $Ln = '';
    $Em = '';

    $hostname = "localhost";
    $database = "climate_hub";
                             
    $Admin = "Admin";
    $Admin_password = "climatehub";

    $link = mysqli_connect($hostname, $Admin, $Admin_password, $database);
    mysqli_select_db($link, 'users');

    if(isset($_GET['search'])){
       
        $check = FALSE;
        $query =  $link->query("
            SELECT users.* FROM users
            WHERE UserName = '$user'
        ");

        if($query-> num_rows > 0){
            while($row = $query -> fetch_assoc()){
                $Un = $row['UserName'];
                $Fn = $row['FirstName'];
                $Ln = $row['LastName'];
                $Em = $row['Email'];
                $check = TRUE;
            }
        }
        header("location: ../admin/users.php?check=$check&Un=$Un&Fn=$Fn&Ln=$Ln&Em=$Em");
    }
?>
