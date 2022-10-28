<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gastenboek";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO gastenboek (ID, Voornaam, Achternaam, e-mail) VALUES (NULL, 'jan', 'de boer', 'pieterpost@test.com');";
$result = $conn->query($sql);
?>