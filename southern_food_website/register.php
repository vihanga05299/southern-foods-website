<?php
session_start(); 

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$con = new mysqli('localhost','root','','southern_foods');

if($con->connect_error){
    die('Connection failed: ' . $con->connect_error);
} else {
  
    $check = $con->prepare("SELECT * FROM users WHERE email=?");
    $check->bind_param("s", $email);
    $check->execute();
    $result = $check->get_result();
    if($result->num_rows > 0){
        echo "<script>alert('Email already registered!');
              window.location.href='login.html';
        </script>";
        exit();
    }

    
    $stmt = $con->prepare("INSERT INTO users(username, email, password) VALUES(?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashed_password);

    if($stmt->execute()){
        
        $_SESSION['username'] = $username;

       
        echo "<script>
                alert('Sign up Successful!');
                window.location.href = 'home.php';
              </script>";
    } else {
        echo "<script>alert('Registration failed!');
              window.location.href='login.html';
        </script>";
    }
}
?>
