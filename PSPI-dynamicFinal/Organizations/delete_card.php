<?php 

$hostname="localhost";
$database="climate_hub";

$Admin="Admin";
$Admin_password="climatehub";

$link = mysqli_connect($hostname,$Admin,$Admin_password,$database);

 mysqli_select_db($link,'actions');

if(isset($_GET['Title'])){
        $Title = $_GET['Title'];
        echo $Title;
        $sql = "DELETE FROM actions WHERE Title='$Title'";
        if(mysqli_query($link, $sql)){
            echo "Records were deleted successfully.";
            header("Location: adminOrganizations.php");
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }

?>