<?php

$host = "localhost";
$user = "root";
$pass = "0000";
$db = "soen_school";

$conn  = mysqli_connect($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "Connected successfully";
}

// SQL query to select all data from the table
$sql = "SELECT * FROM employee"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row in an HTML table
  echo "<table>";
  echo "<tr><th>EMPNO</th><th>FName</th><th>LName</th><th>GENDER</th><th>Salary</th><th>DOE</th><th>DeptCode</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["EMPNO"] . "</td>";
    echo "<td>" . $row["FName"] . "</td>";
    echo "<td>" . $row["LName"] . "</td>";
    echo "<td>" . $row["GENDER"] . "</td>";
    echo "<td>" . $row["Salary"] . "</td>";
    echo "<td>" . $row["DOE"] . "</td>";
    echo "<td>" . $row["DeptCode"] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();


?>