<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginform";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn-> connect_error) {
	die ("Connection failed: " . $conn -> connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "INSERT INTO signup (email, phone, username, password) VALUES ('$email', '$phone', '$username', '$password')";

	if ($conn->query($sql) === TRUE) {
		echo "<script>alert ('Registered'); window.location.href = '../pages/index.php'; </script>";
	} else {
		echo "Error: " . $sql . "<br>" . $connect_error;
	}
}

?>