<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <link rel="stylesheet" href="../css/home.css">
    <link href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>

    </style>
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <img src="../assets/shoppe-logo.png" alt="Shopee Logo" />
            <h1>Shopee</h1>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search for products..." />
            <button>Search</button>
        </div>

         <!--Icon Theme Toggle-->
        <a href="#" id="theme-toggle">
            <i class="bx bx-sun" id="moon-icon">☀️</i>
            <i class="bx bx-moon" id="sun-icon" style="display:none;">🌙</i>
        </a>

        
        <div class="logout">
            <a href="./index.php">Logout</a>
        </div>
    </div>

    <div class="product-container">
        <div class="product">
            <img src="../assets/iPhone_15_Blue_PDP_Image_Positio.png" alt="Product 1" />
            <h3>Iphone 15</h3>
            <p class="description">The latest iPhone 15 with improved performance, stunning display, and new camera system.</p>
            <p class="price">$49.99</p>
            <p class="quantity">Quantity: 15</p>
            <div class="product-actions">
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">🛒</button>
            </div>
        </div>

        <div class="product">
            <img src="../assets/iPhone_16_Ultramarine_PDP_Image.png" alt="Product 2" />
            <h3>Iphone 16</h3>
            <p class="description">Next-gen iPhone 16 with ultramarine finish and AI-enhanced features.</p>
            <p class="price">$99.99</p>
            <p class="quantity">Quantity: 10</p>
            <div class="product-actions">
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">🛒</button>
            </div>
        </div>

        <div class="product">
            <img src="../assets/apple-iphone-xr-128gb_98254350.jpg" alt="Product 3" />
            <h3>Iphone XR</h3>
            <p class="description">Affordable and powerful, the iPhone XR offers great value with a sleek design.</p>
            <p class="price">$29.99</p>
            <p class="quantity">Quantity: 25</p>
            <div class="product-actions">
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">🛒</button>
            </div>
        </div>

        <div class="product">
            <img src="../assets/iPhone_SE3_ProductRED_PDP_Image (1).jpg" alt="Product 4" />
            <h3>Iphone SE</h3>
            <p class="description">Compact and powerful, the iPhone SE offers flagship performance in a smaller size.</p>
            <p class="price">$39.99</p>
            <p class="quantity">Quantity: 20</p>
            <div class="product-actions">
                <button class="buy-now">Buy Now</button>
                <button class="add-to-cart">🛒</button>
            </div>
        </div>
    </div>


    <div class="footer">
        <p>&copy; 2025 Shopee. All Rights Reserved.</p>
    </div>
</body>
<script src="../JS/darkmode.js"></script>

</html>