
<?php
ini_set('display_errors', 1);
error_reporting(~0);
$conn = mysqli_connect("localhost", "root", "", "registerdb");


$id = $_GET["id"];
$sql = "DELETE FROM register
			WHERE ID = '" . $id . "' ";

$query = mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn)) {
  echo "<script>alert('! Record $id Delete Successfully !'); window.location='view.php'</script>";
}

mysqli_close($conn);
?>
