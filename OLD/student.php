<!DOCTYPE hmtl>
<html>
<?php

// Create connection
$conn = new mysqli("skpc.ddns.net", "noobdb", "1234", "a1");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Successfully connected to database<br>LIST<br>";

$sql = "SELECT id, title, fname, lname, class, room, std_no, age FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " NAME " . $row["title"]. " " . $row["fname"]. " " . $row["lname"]. " " . $row["class"]. "/" . $row["room"]. " NO " . $row["std_no"]. " AGE " . $row["age"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
echo "linking db complete, ended connection ";
?>
</html>