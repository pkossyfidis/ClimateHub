<?php
    $hostname = "localhost";
    $database = "climate_hub";

    $Admin = "Admin";
    $Admin_password = "climatehub";

    $link = mysqli_connect($hostname, $Admin, $Admin_password, $database);

    

    if(isset($_POST['add1'])){
        mysqli_select_db($link, 'problem_links');
        $link_to_add = $_POST['link1'];
        $name = $_POST['name1'];
        $sql  = "INSERT INTO `problem_links` (Name, Problems) VALUES ('$name','$link_to_add')";
        if(mysqli_query($link, $sql)){
            echo "User added successfully.";
            header("Location: info_admin.php");
        }else{
            echo "ERROR: Could not able to execute $sql." .mysqli_error($link);
        }

    }elseif(isset($_POST['delete1'])){
        mysqli_select_db($link, 'problem_links');
        $link_to_delete = $_POST['name1'];
        $sql = "DELETE FROM problem_links WHERE Name='$link_to_delete'";
        if(mysqli_query($link, $sql)){
            echo "Records were deleted successfully.";
            header("Location: info_admin.php");
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

    }elseif(isset($_POST['add2'])){
        mysqli_select_db($link, 'action_links');
        $link_to_add = $_POST['link2'];
        $name = $_POST['name2'];
        $sql  = "INSERT INTO `action_links` (Name, Actions) VALUES ('$name','$link_to_add')";
        if(mysqli_query($link, $sql)){
            echo "User added successfully.";
            header("Location: info_admin.php");
        }else{
            echo "ERROR: Could not able to execute $sql." .mysqli_error($link);
        }

    }elseif(isset($_POST['delete2'])){
        mysqli_select_db($link, 'action_links');
        $link_to_delete = $_POST['name2'];
        $sql = "DELETE FROM action_links WHERE Name='$link_to_delete'";
        if(mysqli_query($link, $sql)){
            echo "Records were deleted successfully.";
            header("Location: info_admin.php");
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

    }elseif(isset($_POST['add3'])){
        mysqli_select_db($link, 'more_links');
        $link_to_add = $_POST['link3'];
        $name = $_POST['name3'];
        $sql  = "INSERT INTO `more_links` (Name, More) VALUES ('$name','$link_to_add')";
        if(mysqli_query($link, $sql)){
            echo "User added successfully.";
            header("Location: info_admin.php");
        }else{
            echo "ERROR: Could not able to execute $sql." .mysqli_error($link);
        }

    }elseif(isset($_POST['delete3'])){
        mysqli_select_db($link, 'more_links');
        $link_to_delete = $_POST['name3'];
        $sql = "DELETE FROM more_links WHERE Name='$link_to_delete'";
        if(mysqli_query($link, $sql)){
            echo "Records were deleted successfully.";
            header("Location: info_admin.php");
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

    }
?>