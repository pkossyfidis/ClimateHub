<?php

    $Image = addslashes(file_get_contents($_FILES['img']['tmp_name']));
    $Title = $_POST['title'];
    $Text1 = $_POST['text1'];
    $Text2 = $_POST['text2'];
    $Text3 = $_POST['text3'];

    $hostname="localhost";
    $database="climate_hub";

    $Admin="Admin";
    $Admin_password="climatehub";

    $link = mysqli_connect($hostname,$Admin,$Admin_password,$database);

    mysqli_select_db($link,'problem');

    $cnt= "SELECT problem.* FROM problem";
    $result = $link->query($cnt);

    $Id = mysqli_num_rows($result);


    $sql  = "INSERT INTO `problem` (Title,Image,Text1,Text2,Text3) VALUES ('$Title','{$Image}','$Text1','$Text2','$Text3')";

    IF(mysqli_query($link, $sql)){
        echo "New section added successfully.";
        header("Location: adminImpacts.php");
    }else{
        echo "ERROR: Could not able to execute $sql." .mysqli_error($link);
    }

?>