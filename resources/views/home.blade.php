<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to e-Kat, your one-stop online shop for all things trendy!">
    <meta name="author" content="e-Kat Team">
    <title>e-Kat | Online Shopping Made Easy</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <style>
        /* Add custom styles for specific elements */
        .hero-section {
            background-image: url('hero-bg.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 100px 0;
        }
        .product-item img {
            width: 100%;
            height: auto;
        }
        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
        }
        .footer-content {
            text-align: center;
            padding: 20px;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header class="bg-dark text-white p-3">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="logo.png" alt="e-Kat Logo" height="40">
            </div>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a href="#home" class="nav-link text-white">Home</a></li>
                    <li class="nav-item"><a href="#products" class="nav-link text-white">Shop</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link text-white">About Us</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link text-white">Contact</a></li>
                    <li class="nav-item"><a href="#cart" class="nav-link text-white"><img src="cart-icon.png" alt="Cart" height="30"></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="hero-section">
        <div class="container">
            <h1>Welcome to e-Kat!</h1>
            <p>Your one-stop online shop for all things trendy and stylish.</p>
            <a href="#shop-now" class="btn btn-primary">Shop Now</a>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section id="products" class="container py-5">
        <h2 class="text-center mb-4">Featured Products</h2>
        <div class="product-grid">
            <div class="card" style="width: 18rem;">
                <img src="product1.jpg" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <button class="btn btn-secondary">Add to Cart</button>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="product2.jpg" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Product 2</h5>
                    <p class="card-text">$29.99</p>
                    <button class="btn btn-secondary">Add to Cart</button>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="product3.jpg" class="card-img-top" alt="Product 3">
                <div class="card-body">
                    <h5 class="card-title">Product 3</h5>
                    <p class="card-text">$39.99</p>
                    <button class="btn btn-secondary">Add to Cart</button>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="product4.jpg" class="card-img-top" alt="Product 4">
                <div class="card-body">
                    <h5 class="card-title">Product 4</h5>
                    <p class="card-text">$49.99</p>
                    <button class="btn btn-secondary">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="container py-5">
        <h2 class="text-center mb-4">About Us</h2>
        <p class="text-center">e-Kat is dedicated to providing you with the best online shopping experience. From trendy fashion to stylish accessories, we have something for everyone!</p>
    </section>

    <!-- Contact Us Section -->
    <section id="contact" class="container py-5">
        <h2 class="text-center mb-4">Contact Us</h2>
        <form action="/submit-form" method="POST">
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Your Message:</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>

    <!-- Footer Section -->
    <footer class="footer-content bg-dark text-white py-3">
        <p>&copy; 2025 e-Kat. All rights reserved.</p>
        <div>
            <a href="#" class="text-white mr-3"><img src="facebook-icon.png" alt="Facebook" height="30"></a>
            <a href="#" class="text-white mr-3"><img src="twitter-icon.png" alt="Twitter" height="30"></a>
            <a href="#" class="text-white"><img src="instagram-icon.png" alt="Instagram" height="30"></a>
        </div>
    </footer>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
