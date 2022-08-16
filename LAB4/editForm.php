<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=Add a new record, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $conn = mysqli_connect("localhost", "root", "", "registerdb2");
  $sql = "SELECT * FROM Register where id =  " . $_GET['id'];
  $rs = $conn->query($sql);
  while ($row = $rs->fetch_assoc()) {
  ?>


    <form action="edit.php" method="POST" align=center>

      <input type="hidden" name="txtID" value="<?php echo $row['ID'] ?>">

      FirstName: <input type="text" name="txtFirstName" value="<?php echo $row['FirstName'] ?>" required><BR>
      <BR>
      LastName: <input type="text" name="txtLastName" value="<?php echo $row['LastName'] ?>" required><BR>
      <BR>
      Age: <input type="number" name="txtAge" value="<?php echo $row['Age'] ?>" required><BR>
      <BR>
      Gender: <select name="txtGender">
        <option disabled selected value> <?php echo $row['Gender'] ?> </option>
        <option value="female">female</option>
        <option value="male">male</option>
      </select><BR>
      <BR>
      <input type="submit" value="Submit">

    </form>

  <?php } ?>
</body>

</html>