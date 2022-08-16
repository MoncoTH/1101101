<html>

<head>
    <title>View Register Database</title>

</head>

<body>
    <p><a href="insertForm.htm">Add a new record</a></p>
    <?php
    // connect to the database
    $conn = mysqli_connect("localhost", "root", "", "registerdb2");
    $conn->query("SET NAMES UTF8");
    // get results from database
    $sql = "SELECT * FROM Register";
    $rs = $conn->query($sql);
    // Print Header of Table
    echo "<table border='2' cellpadding='10' width=80%>"; //open table
    echo "<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Age</th>
<th>Gender</th>
<th>Photo</th>
<th></th>
 </tr>";
    // loop through results of database query, displaying them in the table
    while ($row = $rs->fetch_assoc()) {
        // echo out the contents of each row into a table
        echo "<tr>";
        echo '<td>' . $row['ID'] . '</td>';
        echo '<td>' . $row['FirstName'] . '</td>';
        echo '<td>' . $row['LastName'] . '</td>';
        echo '<td>' . $row['Age'] . '</td>';
        echo '<td>' . $row['Gender'] . '</td>';
        echo '<td> <img src=' . $row['Photo'] . ' width="45" ></td>';
        echo '<td><a href="editForm.php?id=' . $row['ID'] . '" " >Edit</a> ';
    ?>
        <a href="JavaScript:if(confirm('Are you sure to delete #id <?php echo $row["ID"]; ?> ?')==true)
        {window.location='delete.php?id=<?php echo $row["ID"]; ?>';}">Delete</a>
    <?php
        // echo '<a href="delete.php?id=' . $row['ID'] . '">Delete</a></td>';
        echo "</tr>";
    }
    echo "</table>"; // close table
    $conn->close(); // close database connection
    ?>
</body>

</html>