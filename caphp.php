<?php

$servername = "localhost";
$username = "root";
$password = "";

echo $_POST['email'];

echo $_POST['subject'];

echo "<br>";

$dbname = "CAtest";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO email (email) VALUES ('".$_POST['email']."')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}







$sql = "SELECT id, email, subject FROM email";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Email: " . $row["email"]. " " . $row["subject"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
