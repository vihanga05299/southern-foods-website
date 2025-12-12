<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$con = new mysqli("localhost","root","","southern_foods");
if($con->connect_error){
    die("Failed to connect: " . $con->connect_error);
} else {
    $stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if($stmt_result->num_rows > 0){
        $data = $stmt_result->fetch_assoc();
        
        if(password_verify($password, $data['password'])){
          
            $_SESSION['username'] = $data['username'];

          
            echo "<script>
                    alert('Sign in successful!');
                    window.location.href = 'home.php';
                  </script>";
        } else {
            echo "<script>alert('Incorrect password!');
                  window.location.href = 'login.html';
                  </script>";
        }
    } else {
        echo "<script>alert('Email not registered!');
              window.location.href = 'login.html';
              </script>";
    }
}
?>
