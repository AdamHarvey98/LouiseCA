<?php

$servername = "mysql4416int.cp.blacknight.com";
$username = "u1202082_ah";
$password = "_MHJv8s";
$dbname = "db1202082_ah";
// echo $_POST['email'];
//
// echo $_POST['subject'];
$email = $_POST['email'];
$subject = $_POST['subject'];


echo "<br>";




$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO catest (email,subject) VALUES ('$email','$subject')";

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

header("refresh:1; url=formsubmitted.html");

mysqli_close($conn);
?>
