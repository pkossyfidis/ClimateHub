<?php

    $Image = addslashes(file_get_contents($_FILES['img']['tmp_name']));
    $Title = $_POST['title'];
    $Text = $_POST['backtext'];

    $hostname="localhost";
    $database="climate_hub";

    $Admin="Admin";
    $Admin_password="climatehub";

    $link = mysqli_connect($hostname,$Admin,$Admin_password,$database);

    mysqli_select_db($link,'card');

    $cnt= "SELECT card.* FROM card";
    $result = $link->query($cnt);

    $sql  = "INSERT INTO `card` (Logo,Title,Text) VALUES ('{$Image}', '$Title', '$Text')";

    IF(mysqli_query($link, $sql)){
        echo "User added successfully.";
        header("Location: individualactionsAdmin.php");
    }else{
        echo "ERROR: Could not able to execute $sql." .mysqli_error($link);
    }

?>