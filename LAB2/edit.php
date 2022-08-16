<html>

<body>
    <?php
    // connect to the database
    $conn = mysqli_connect("localhost", "root", "", "registerdb");
    $conn->query("SET NAMES UTF8");

    //update database
    $sql = "UPDATE register SET FirstName='$_POST[firstname]', LastName='$_POST[lastname]' , Age='$_POST[age]', Gender='$_POST[gender]'WHERE ID = $_POST[id]";
    if ($conn->query($sql)) {
        echo "Update Successfully!";
        echo "<BR><BR>";
        echo '<a href="view.php">Go to Home</a>';
    } else {
        echo "Execution Error!";
    }
    $conn->close();
    ?>
</body>

</html>