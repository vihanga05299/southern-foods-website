# Southern Foods Website 🍽️

A **responsive food ordering website** built with **PHP, MySQL, HTML, CSS, and JavaScript**.  
This project allows users to register, log in, view the menu, and place orders online. Designed to be **mobile-friendly** with a modern, user-centric interface.

---

## 🔥 Features

- **User Authentication**
  - Secure login and registration using PHP & MySQL
  - Passwords are hashed for security
- **Dynamic Menu**
  - Browse meals, burgers, desserts, hot and cold drinks
  - Each menu item displays an image and description
- **Order Placement**
  - Users can place orders with name, email, phone, address, and order details
  - Orders are stored in MySQL database
- **Responsive Design**
  - Fully responsive layout optimized for desktops, tablets, and mobile devices
- **Modern UI**
  - Clean and vibrant design with hero section, about, menu, contact, and footer sections
- **Navigation**
  - Smooth scrolling navigation
  - Mobile-friendly hamburger menu
- **Extras**
  - Footer links: Privacy Policy & Refund Policy
  - Contact form (static)

---

## 🛠️ Tech Stack

- **Frontend:** HTML5, CSS3, JavaScript  
- **Backend:** PHP  
- **Database:** MySQL  
- **Libraries:** Font Awesome, Google Fonts  

---

## 🗄️ Database : southern_foods
-- Users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Orders table
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address TEXT NOT NULL,
    order_details TEXT NOT NULL,
    order_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
---
📌 License

This project is open-source and free to use.

---
🌟 Author

Vihanga Nimnada
GitHub: https://github.com/vihanga05299

LinkedIn: www.linkedin.com/in/vihanga-nimnada-985696335

## 📂 Project Structure

