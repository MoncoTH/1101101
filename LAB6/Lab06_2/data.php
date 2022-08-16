<?php
class Data
{
    function Data()
    {
        $this->firstname = "";
        $this->lastname = "";
        $this->age = 0;
        $this->gender = "";
        $this->photo = "";
    }
}
$name = $_GET["name"];
// connect to the database
$conn = mysqli_connect("localhost", "root", "", "registerdb4");
$conn->query("SET NAMES UTF8");
$sql = "SELECT * FROM register WHERE firstname LIKE '$name%'";
$rs = $conn->query($sql);
$myObj = new Data();
// loop through results of database query, displaying them in the table
while ($row = $rs->fetch_assoc()) {
    //…………Add code here……..
    $myObj->FirstName =  $row['FirstName'];
    $myObj->LastName =  $row['LastName'];
    $myObj->Age =  $row['Age'];
    $myObj->Gender =  $row['Gender'];
    $myObj->Photo =  $row['Photo'];
    
}
//…………Add code here……..

$myJSON = json_encode($myObj,JSON_UNESCAPED_UNICODE);

$conn->close();

echo $myJSON;
