<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.html");
    exit();
}

$username = $_SESSION['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$order_details = $_POST['order'];

$con = new mysqli("localhost","root","","southern_foods");
if($con->connect_error){
    die("Connection failed: ".$con->connect_error);
}

$stmt = $con->prepare("INSERT INTO orders (username, name, email, phone, address, order_details) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $username, $name, $email, $phone, $address, $order_details);

if($stmt->execute()){
    echo "<script>
        alert('Order placed successfully!');
        window.location.href = 'order.php';
    </script>";
}else{
    echo "<script>
        alert('Error placing order. Please try again.');
        window.location.href = 'order.php';
    </script>";
}

$stmt->close();
$con->close();
?>
