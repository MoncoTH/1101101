<?php
ini_set('display_errors', 1);
error_reporting(~0);
$conn = mysqli_connect("localhost", "root", "", "registerdb2");

        $query = "UPDATE register SET FirstName='".$_POST['txtFirstName']."',LastName='".$_POST['txtLastName']."',Age='".$_POST['txtAge']."', Gender='".$_POST['txtGender']."'
         WHERE ID='".$_POST['txtID']."'";

        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo"<script>alert('! Update Successfully !'); window.location='view.php'</script>";
        }
        else
        {
            echo"<script>alert('! Update Not Successfully !'); window.location='view.php'</script>";
        }
    
?>