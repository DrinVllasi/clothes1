<?php
include 'fonts.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Men's Longsleeves - Devsun</title>
</head>
<body>
    <header>
        <div class="header-container">
            <h1 class="logo"><a href="firstpage.php" class="logo-link">Devsun</a></h1>
            <ul class="nav nav-tabs">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="color:black">Men's</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="mens-hoodie.php">Hoodies</a></li>
                        <li><a class="dropdown-item" href="mens-jeans.php">Jeans</a></li>
                        <li><a class="dropdown-item" href="mens-shirts.php">Shirts</a></li>
                        <li><a class="dropdown-item" href="mens-longsleeves.php">Longsleeves</a></li>
                        <li><a class="dropdown-item" href="mens-buttonups.php">Button Ups</a></li>
                        <li><a class="dropdown-item" href="mens-accessories.php">Accessories</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="color:black">Women's</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">example</a></li>
                        <li><a class="dropdown-item" href="#">example</a></li>
                        <li><a class="dropdown-item" href="#">example</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="color:black">Unisex</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">example</a></li>
                        <li><a class="dropdown-item" href="#">example</a></li>
                        <li><a class="dropdown-item" href="#">example</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>

    <div class="category-title">
        <h2>Men's Longsleeves</h2>
    </div>

    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Product cards will go here -->
        </div>
    </div>
</body>
</html>

<style>
/* Include all your existing styles */
.header-container {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    padding: 20px 50px;
    width: 100%;
    gap: 150px;
}

.logo {
    font-size: 70px;
    font-weight: 400;
    margin: 0;
}

.logo-link {
    text-decoration: none;
    color: black;
    font-family: "UnifrakturMaguntia", cursive;
}

.nav-link, .dropdown-item {
    font-family: 'Prata', serif;
    font-size: 1.2rem;
}

.dropdown-item {
    font-size: 1rem;
    padding: 8px 20px;
}

.dropdown-item:focus,
.dropdown-item:active {
    background-color: transparent !important;
    color: #666 !important;
}

.dropdown-item:hover {
    background-color: transparent;
    color: #666;
}

.nav-item.dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0;
    animation: fadeIn 0.2s ease-in-out;
}

.dropdown-menu {
    border-radius: 0;
    border: 1px solid black;
    background-color: white;
    min-width: 200px;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.nav-link.dropdown-toggle::after {
    transition: transform 0.2s ease;
}

.nav-item.dropdown:hover .dropdown-toggle::after {
    transform: rotate(180deg);
}

.category-title {
    text-align: center;
    padding: 40px 0;
}

.category-title h2 {
    font-family: 'Prata', serif;
    font-size: 2.5rem;
    margin: 0;
}

@media (max-width: 768px) {
    .header-container {
        flex-direction: column;
        padding: 20px;
        gap: 20px;
    }
    
    .nav-item {
        margin-left: 15px;
    }
    
    .category-title h2 {
        font-size: 2rem;
    }
}
</style> 