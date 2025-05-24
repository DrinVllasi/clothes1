<?php
include 'fonts.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        header {
            background-color: #105353;
            color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: "Dancing Script";
            font-size: 24px;
            margin-left: 20px;
            margin-top: 15px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center; /* Align items vertically */
        }

        nav ul li {
            margin-right: 20px;
        }

        a {
            color: black;
            text-decoration: none;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            color: #105353;
            font-size: 32px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 20px auto;
            max-width: 600px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        ul li {
            margin-bottom: 10px;
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        ul li:last-child {
            border-bottom: none;
        }

        .shopping-cart {
            width: 30px;
            height: 30px;
        }

        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #105353;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #188f8f;
        }
        #order{
          width: 115px;
        }

        /* Responsive Styles */
        @media screen and (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: center;
            }

            .logo {
                margin-bottom: 20px;
                margin-top: 0; /* Remove top margin */
            }

            nav ul {
                flex-direction: column;
                text-align: center;
            }

            nav ul li {
                margin: 10px 0;
            }

            ul {
                margin: 20px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Furniture shop</div>
        <nav>
            <ul>
                <li><a href="firstpage.php">Home</a></li>
                <li><a href="abtus.php">About Us</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="cart.php"><img src="img/shopping-cart.png" alt="" class="shopping-cart"></a></li>
                <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Sign out</a>
    </div>
  </div>
            </ul>
        </nav>
    </header>
    <h1>Shopping Cart</h1>
    <ul id="cart-items"></ul>

    <div>
    <button id="clear-cart-btn">Clear Cart</button>
     <button id="order" type="submit" name="submit"><a href="furnitures.php" style="color: white;">Order</a></button>


   
    </div>
    
    
    <script>
        window.onload = function() {
            const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

            const cartList = document.getElementById('cart-items');
            cartList.innerHTML = ''; // Clear existing items

            cartItems.forEach(item => {
                const listItem = document.createElement('li');
                listItem.textContent = `${item.name} - $${item.price}`;
                cartList.appendChild(listItem);
            });

            const clearCartBtn = document.getElementById('clear-cart-btn');
            clearCartBtn.addEventListener('click', function() {
                localStorage.removeItem('cartItems');
                cartList.innerHTML = ''; // Clear items displayed on the page
            });
        };
    </script>
</body>
</html>
