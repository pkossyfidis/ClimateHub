<?php 

$hostname = "localhost";
$database = "climate_hub";

$Admin = "Admin";
$Admin_password = "climatehub";

$link = mysqli_connect($hostname, $Admin, $Admin_password, $database);

mysqli_select_db($link, 'users');


    if(isset($_GET['UserName'])){
        $Un = $_GET['UserName'];
        echo $Un;
        $sql = "DELETE FROM users WHERE UserName='$Un'";
        if(mysqli_query($link, $sql)){
            echo "Records were deleted successfully.";
            header("Location: users.php");
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
    

?>