**#E-Commerce Project**
This is my first e-commerce project built using HTML, CSS, JavaScript, PHP, and MySQL. The application provides a complete e-commerce experience, including user-side and admin-side functionalities.

**#OVERVIEW**
This project implements a basic e-commerce platform where users can browse products, add them to a cart, and place orders.
An admin panel is included to manage the platform effectively by uploading/updating products, viewing customer details, and monitoring daily orders.

Key Functionalities:
User Side: Add to Cart, Buy Now, and View Order History.
Admin Side: Product Management, Customer Management, and Order Tracking.


**#Features**

**User Side**
Browse products by category.
Add items to the cart.
Secure checkout process.
View order history and details.

**Admin Panel**
Upload and update product information.
View all customers and their details.
Track daily orders and sales.
Manage product inventory.


**#Technologies Used**
Frontend: HTML, CSS, JavaScript
Backend: PHP
Database: MySQL


**Setup and Installation**
Clone the repository:

bash
Copy code
git clone https://github.com/yourusername/ecommerce-project.git
Navigate to the project directory:

bash
Copy code
cd ecommerce-project
Import the database:

Open phpMyAdmin.
Create a new database named ecommerce.
Import the provided SQL file (ecommerce.sql) into the database.
Configure the environment in config.php (or equivalent):

php
Copy code
<?php
$host = "localhost";
$user = "your_username";
$password = "your_password";
$database = "ecommerce";
?>
Start the development server:

bash
Copy code
php -S localhost:8000
Access the application:

User side: http://localhost:8000/
Admin panel: http://localhost:8000/admin/
Usage
Register or log in as a user to start shopping.
Add items to your cart and proceed to checkout.
Admins can log in to manage products, customers, and orders.
Screenshots
User Dashboard

Admin Panel

