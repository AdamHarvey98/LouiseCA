<?php

$servername = "localhost";
$username = "root";
$password = "";

// echo $_POST['email'];
//
// echo $_POST['subject'];
$email = $_POST['email'];
$subject = $_POST['subject'];


echo "<br>";

$dbname = "CAtest";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO email (email,subject) VALUES ('$email','$subject')";

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

<<<<<<< HEAD
header("refresh:2; url=Contact.html");
=======
header("refresh:1; url=Contact.html");
>>>>>>> 53a5a7670414d15e9c44bfdff69e47c5e7f6cc95

mysqli_close($conn);
?>
