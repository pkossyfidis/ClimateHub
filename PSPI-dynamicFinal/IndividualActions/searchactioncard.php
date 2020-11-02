<?php
    $check = FALSE;
    if(isset($_GET['search'])){
        $Title = $_GET['search'];
    }else{
        $Title = NULL;
    }
    

    $Title = '';
    $Text= '';


    $hostname="localhost";
    $database="climate_hub";
                             
    $Admin="Admin";
    $Admin_password="climatehub";

    $link = mysqli_connect($hostname,$Admin,$Admin_password,$database);
    mysqli_select_db($link,'card');

    if(isset($_GET['search'])){
       
        $check = FALSE;
        $query =  $link->query("
            SELECT card.* FROM card
            WHERE Title = '$Title'
        ");

        if($query-> num_rows > 0){
            while($row = $query -> fetch_assoc()){
                $Title = $row['Title'];
                $Text = $row['Text'];
                $check = TRUE;
            }
        }
        header("location: individualactionsAdmin.php?check=$check&Title=$Title&Text=$Text");
    }
?>
