<html>

<body>
  <br><br>
  <?php
  // connect to the database
  $conn = mysqli_connect("localhost", "root", "", "registerdb");
  $conn->query("SET NAMES UTF8");

  // get results from database
  $id = $_REQUEST['id'];
  $sql = "SELECT * FROM Register WHERE ID = '$id'";
  $rs = $conn->query($sql);
  echo '<form method="post" action="edit.php">';
  echo '<table border="0" align="center">';
  while ($row = $rs->fetch_assoc()) {
    echo '<tr>';
    echo '<td>Firstname: </td>';
    echo '<td><input type="text" name="firstname" value=' . $row['FirstName'] . '></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Lastname: </td>';
    echo '<td><input type="text" name="lastname" value=' . $row['LastName'] . '></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Age: </td>';
    echo '<td><input type="text" name="age" size="5" value=' . $row['Age'] . '></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Gender: </td>';
    if ($row['Gender'] == 'Male') {
      echo '<td><select name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </td>';
    } else {
      echo '<td><select name="gender">
                <option value="Female">Female</option>
                <option value="Male">Male</option>
            </td>';
    }
    echo '</tr>';
    echo '<tr>';
    echo '<td></td>';
    echo '<td>';
    echo '<br>';
    echo '<input type="hidden" name="id" value=' . $row['ID'] . '>';
    echo '<input type="submit" value="Save">';
    echo '<input type="reset" value="Cancel">';
    echo '</td>';
    echo '</tr>';
  }
  ?>
  </table>
  </form>
</body>

</html>