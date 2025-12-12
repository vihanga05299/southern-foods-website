<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Place Your Order - Southern Foods</title>
<link rel="stylesheet" href="order.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body>
<header>
    <nav class="navbar selection-content">
        <a href="home.php" class="nav-logo"><h2 class="logo-text">🍽️ Foods</h2></a>
        <ul class="nav-menu">
            <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#order-section" class="nav-link">Order</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
            <li class="nav-item"><span class="nav-link">Hello, <?php echo htmlspecialchars($_SESSION['username']); ?> 👋</span></li>
        </ul>
    </nav>
</header>

<main>
<section class="section-title" id="order-section">
    <h2 id="section-title2">Place Your Order</h2>
</section>

<section class="order-section section-content">
    <form action="order_process.php" method="POST" class="order-form">
        <div class="input-box">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($_SESSION['username']); ?>" required>
        </div>
        <div class="input-box">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="input-box">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" required>
        </div>
        <div class="input-box">
            <label for="address">Address</label>
            <textarea name="address" id="address" placeholder="Enter your address" required></textarea>
        </div>
        <div class="input-box">
            <label for="order">Your Order</label>
            <textarea name="order" id="order" placeholder="Enter order details (e.g., 2 Burgers, 1 Meal)" required></textarea>
        </div>
        <button type="submit" class="submit-button">Place Order</button>
    </form>
</section>
</main>

<footer class="footer-section">
    <div class="section-content">
        <p class="copyright-text">© 2025 Southern Foods</p>
        <div class="social-link-list">
            <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
        </div>
    </div>
</footer>
</body>
</html>
