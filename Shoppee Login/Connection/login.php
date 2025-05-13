<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginform";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST['username'];
	$password = $_POST['password'];


	$username = $conn->real_escape_string($username);
	$password = $conn->real_escape_string($password);

	$sql = "SELECT * FROM signup WHERE username = '$username' AND password = '$password'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		if ($username === 'admin') {
			echo "<script>alert('Logged in as admin'); window.location.href = '../pages/Table.php'; </script>";
		} else {
			echo "<script>alert('Logged in'); window.location.href = '../pages/home.php'; </script>";
		}
	} else {
		echo "<script>alert('Wrong username/password'); window.location.href = '../pages/index.php'; </script>";
	}
}
?>
