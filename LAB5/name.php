<?php 
$name = $_GET["name"];
// connect to the database
$conn = mysqli_connect("localhost", "root", "", "registerdb3");
    $conn->query("SET NAMES UTF8");
$sql = "SELECT * FROM register WHERE FirstName LIKE '%".$name."%' ";
// Add Code Here �
$rs=$conn->query($sql);
while($row = $rs->fetch_assoc()){
    echo '<option value='.$row['FirstName'].'>';
}
$conn->close();
?>
