<?php

    $Title = $_POST['title'];
    $SecTitle = $_POST['sectitle'];
    $Doc = $_POST['doc'];
    $Theme = $_POST['theme'];
    $Img = addslashes(file_get_contents($_FILES['img']['tmp_name']));

    $hostname="localhost";
    $database="climate_hub";

    $Admin="Admin";
    $Admin_password="climatehub";

    $link = mysqli_connect($hostname,$Admin,$Admin_password,$database);

    mysqli_select_db($link,'actions');


    $sql  = "INSERT INTO `actions` (Title,SecTitle,Doc,Theme,Img) VALUES ('$Title', '$SecTitle', '$Doc', '$Theme', '{$Img}')";

    IF(mysqli_query($link, $sql)){
        echo "User added successfully.";
        header("Location: adminOrganizations.php");
    }else{
        echo "ERROR: Could not able to execute $sql." .mysqli_error($link);
    }

?>