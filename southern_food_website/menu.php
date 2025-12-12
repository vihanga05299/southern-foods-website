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
    <title>Menu - Southern Foods</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="menu.css">
</head>
<body>
    <!-- HEADER -->
    <header>
        <nav class="navbar selection-content">
            <a href="index.php" class="nav-logo">
                <h2 class="logo-text">🍽️ Foods</h2>
            </a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#menu" class="nav-link">Menu</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                <li class="nav-item">
                    <span class="nav-link">Hello, <?php echo htmlspecialchars($_SESSION['username']); ?> 👋</span>
                </li>
                <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- MENU SECTION -->
        <section class="menu-section" id="menu">
            <h2 class="section-title">Our Menu</h2>
            <div class="section-content">
                <ul class="menu-list">

                    <!-- MEALS -->
                    <li class="menu-item">
                        <h3 class="category-title">🍛 Meals</h3>
                        <div class="menu-block">
                            <img src="assests/menu-items/rice-curry.png" alt="Rice & Curry" class="menu-image">
                            <h4 class="name">Rice & Curry</h4>
                            <p class="text">Steamed rice with 2-3 Sri Lankan curries (vegetable, chicken, or fish).</p>
                        </div>
                        <div class="menu-block">
                            <img src="assests/menu-items/lamprais.png" alt="Lamprais" class="menu-image">
                            <h4 class="name">Lamprais</h4>
                            <p class="text">Dutch Burgher-style meal wrapped in banana leaf with rice, meat & sambol.</p>
                        </div>
                        <div class="menu-block">
                            <img src="assests/menu-items/String_Hoppers_with_Curry.png" alt="String Hoppers" class="menu-image">
                            <h4 class="name">String Hoppers with Curry</h4>
                            <p class="text">Steamed rice noodles served with chicken or vegetable curry and coconut gravy.</p>
                        </div>
                    </li>

                    <!-- BURGER & FRIES -->
                    <li class="menu-item">
                        <h3 class="category-title">🍔 Burger & Fries</h3>
                        <div class="menu-block">
                            <img src="assests/menu-items/Chicken_Burger.png" alt="Chicken Burger" class="menu-image">
                            <h4 class="name">Chicken Burger</h4>
                            <p class="text">Spiced chicken patty with lettuce, tomato & mayo.</p>
                        </div>
                        <div class="menu-block">
                            <img src="assests/menu-items/Beef_Burger.png" alt="Beef Burger" class="menu-image">
                            <h4 class="name">Beef Burger</h4>
                            <p class="text">Juicy beef patty with cheese, lettuce & tomato.</p>
                        </div>
                        <div class="menu-block">
                            <img src="assests/menu-items/Veggie_Burger.png" alt="Veggie Burger" class="menu-image">
                            <h4 class="name">Veggie Burger</h4>
                            <p class="text">Grilled vegetable patty with fresh toppings.</p>
                        </div>
                        <div class="menu-block">
                            <img src="assests/menu-items/French-Fries.png" alt="French Fries" class="menu-image">
                            <h4 class="name">French Fries</h4>
                            <p class="text">Crispy salted fries with tomato ketchup or spicy mayo.</p>
                        </div>
                    </li>

                    <!-- SPECIAL COMBOS -->
                    <li class="menu-item">
                        <h3 class="category-title">🎁 Special Combos</h3>
                        <div class="menu-block">
                            <img src="assests/menu-items/Chicken_Burger_+_Fries_+_Cold_Drink.png" alt="Chicken Combo" class="menu-image">
                            <h4 class="name">Chicken Burger + Fries + Cold Drink</h4>
                            <p class="text">Perfect lunch combo for one.</p>
                        </div>
                        <div class="menu-block">
                            <img src="assests/menu-items/Beef Burger + Fries + Hot Drink.png" alt="Beef Combo" class="menu-image">
                            <h4 class="name">Beef Burger + Fries + Hot Drink</h4>
                            <p class="text">Dinner combo with tea or coffee.</p>
                        </div>
                        <div class="menu-block">
                            <img src="assests/menu-items/Rice & Curry + Dessert.png" alt="Rice & Curry Combo" class="menu-image">
                            <h4 class="name">Rice & Curry + Dessert</h4>
                            <p class="text">Meal combo with sweet treat.</p>
                        </div>
                        <div class="menu-block">
                            <img src="assests/kottu-combo.png" alt="Kottu Combo" class="menu-image">
                            <h4 class="name">Kottu + Soft Drink</h4>
                            <p class="text">Popular street food combo.</p>
                        </div>
                    </li>

                    <!-- DESSERTS -->
                    <li class="menu-item">
                        <h3 class="category-title">🍰 Desserts</h3>
                        <div class="menu-block">
                            <img src="assests/menu-items/Wattalapam.png" alt="Wattalapam" class="menu-image">
                            <h4 class="name">Wattalapam</h4>
                            <p class="text">Coconut milk and jaggery custard with spices.</p>
                        </div>
                        <div class="menu-block">
                            <img src="assests/menu-items/Falooda.png" alt="Falooda" class="menu-image">
                            <h4 class="name">Falooda</h4>
                            <p class="text">Sweet vermicelli dessert with milk, rose syrup, and jelly.</p>
                        </div>
                        <div class="menu-block">
                            <img src="assests/menu-items/Curd___Treacle.png" alt="Curd & Treacle" class="menu-image">
                            <h4 class="name">Curd & Treacle</h4>
                            <p class="text">Traditional Sri Lankan curd with kithul or jaggery syrup.</p>
                        </div>
                        <div class="menu-block">
                            <img src="assests/menu-items/Pineapple_Upside-down_Cake.png" alt="Pineapple Upside-down Cake" class="menu-image">
                            <h4 class="name">Pineapple Upside-down Cake</h4>
                            <p class="text">Tropical twist dessert.</p>
                        </div>
                    </li>

                    <!-- HOT DRINKS -->
                    <li class="menu-item">
                        <h3 class="category-title">☕ Hot Drinks</h3>
                        <div class="menu-block">
                            <img src="assests/menu-items/Ceylon_Tea.png" alt="Ceylon Tea" class="menu-image">
                            <h4 class="name">Ceylon Tea</h4>
                            <p class="text">Traditional black tea, served hot.</p>
                        </div>
                        <div class="menu-block">
                            <img src="assests/menu-items/coffee.png" alt="Coffee" class="menu-image">
                            <h4 class="name">Coffee</h4>
                            <p class="text">Classic brewed coffee.</p>
                        </div>
                        <div class="menu-block">
                            <img src="assests/menu-items/Masala_Milk_Tea.png" alt="Masala Milk Tea" class="menu-image">
                            <h4 class="name">Masala Milk Tea</h4>
                            <p class="text">Tea brewed with spices and milk.</p>
                        </div>
                        <div class="menu-block">
                            <img src="assests/menu-items/Hot_Chocolate.png" alt="Hot Chocolate" class="menu-image">
                            <h4 class="name">Hot Chocolate</h4>
                            <p class="text">Rich and creamy chocolate drink.</p>
                        </div>
                    </li>

                    <!-- COLD DRINKS -->
                    <li class="menu-item">
                        <h3 class="category-title">🥤 Cold Drinks</h3>
                        <div class="menu-block">
                            <img src="assests/menu-items/King-Coconut-Juice.png" alt="King Coconut Juice" class="menu-image">
                            <h4 class="name">King Coconut Juice</h4>
                            <p class="text">Fresh Sri Lankan coconut water.</p>
                        </div>
                        <div class="menu-block">
                            <img src="assests/menu-items/Lime_Juice.png" alt="Lime Juice" class="menu-image">
                            <h4 class="name">Lime Juice</h4>
                            <p class="text">Refreshing lime juice with a hint of sugar.</p>
                        </div>
                        <div class="menu-block">
                            <img src="assests/menu-items/Fruit_Punch.png" alt="Fruit Punch" class="menu-image">
                            <h4 class="name">Fruit Punch</h4>
                            <p class="text">Mixed tropical fruit juice.</p>
                        </div>
                        <div class="menu-block">
                            <img src="assests/menu-items/Iced_Tea__Iced_Coffee.png" alt="Iced Tea / Iced Coffee" class="menu-image">
                            <h4 class="name">Iced Tea / Iced Coffee</h4>
                            <p class="text">Chilled tea or coffee with ice.</p>
                        </div>
                    </li>

                </ul>
            </div>
        </section>

        <!-- CONTACT -->
        <section class="contact-section" id="contact">
            <h2 class="section-title">Contact Us</h2>
            <div class="section-content">
                <ul class="contact-info-list">
                    <li class="contact-info"><i class="fa-solid fa-location-crosshairs"></i> <p>123 Kamburupitiya, Matara</p></li>
                    <li class="contact-info"><i class="fa-regular fa-envelope"></i> <p>info@SouthernFoods.com</p></li>
                    <li class="contact-info"><i class="fa-solid fa-phone"></i> <p>(123) 456-7890</p></li>
                </ul>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="footer-section">
            <div class="section-content">
                <p class="copyright-text">© 2025 Southern Foods</p>
            </div>
        </footer>
    </main>
   
</body>
</html>
