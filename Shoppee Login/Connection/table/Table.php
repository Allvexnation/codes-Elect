<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "loginform";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//add product function

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addProduct'])) {
    $productName = $_POST['productName'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $dateArrived = $_POST['dateArrived'];
    $endOfSupport = $_POST['endOfSupport'];

    $sql = "INSERT INTO product (product, price, quantity, dateArrived, endOfSupport) 
            VALUES ('$productName', '$price', '$quantity', '$dateArrived', '$endOfSupport')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Product Added'); window.location.href = '../../pages/Table.php'; </script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


//update product function

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'update') {
    $selectedRowId = $_POST['selectedId'];
    $productName = $_POST['productName'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $dateArrived = $_POST['dateArrived'];
    $endOfSupport = $_POST['endOfSupport'];

    $sql = "UPDATE product 
            SET product='$productName', price='$price', quantity='$quantity', dateArrived='$dateArrived', endOfSupport='$endOfSupport'
            WHERE id='$selectedRowId'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Product Updated'); window.location.href = '../../pages/Table.php'; </script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

//delete product function

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'delete') {
    $selectedRowId = $_POST['selectedId'];

    $sql = "DELETE FROM product WHERE id='$selectedRowId'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Product Deleted'); window.location.href = '../../pages/Table.php'; </script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$sql = "SELECT * FROM product";
$result = $conn->query($sql);
?>
