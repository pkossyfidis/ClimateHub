<?php
    $check = FALSE;
    if(isset($_GET['search'])){
        $QueryTitle = $_GET['search'];
    }else{
        $QueryTitle = NULL;
    }
    
    $Title = '';
    $Text1= '';
    $Text2= '';
    $Text3= '';


    $hostname="localhost";
    $database="climate_hub";
                             
    $Admin="Admin";
    $Admin_password="climatehub";

    $link = mysqli_connect($hostname,$Admin,$Admin_password,$database);
    mysqli_select_db($link,'problem');

    if(isset($_GET['search'])){
       
        $check = FALSE;
        $query =  $link->query("
            SELECT problem.* FROM problem
            WHERE Title = '$QueryTitle'
        ");

        if($query-> num_rows > 0){
            while($row = $query -> fetch_assoc()){
                $Title = $row['Title'];
                $Text1 = $row['Text1'];
                $Text2 = $row['Text2'];
                $Text3 = $row['Text3'];
                $check = TRUE;
            }
        }
        header("location: problemsAdmin.php?check=$check&Title=$Title&Image=$Image&Text1=$Text1&Text2=$Text2&Text3=$Text3");
    }
?>
