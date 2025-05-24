
<?php 
include 'fonts.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap 5 JS (dropdowns need this) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title> Devsun</title>
</head>
<body>
    
    <header>
    

        <h1 class="logo">Devsun</h1>
     
        <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="#">Men's</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Women's</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
    </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>
        
    </header> 

    <div class="first-page-text">
        <h1 class="quote">Modern furniture <h4>Choose from a wide variety of wooden-made furniture</h4></h1>
        <button class="shop-btn"><a href="shop.php" class="shop-link">Go shopping</a></button> 
        
    </div>

    
 
   
</body>
</html>

<style>

body {
    overflow-x: hidden;
    width: 100%;
    min-height: 100vh;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
}
        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 20px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-right: 10px;
        }

        nav ul li:last-child {
            margin-right: 0;
        }

        li{
            margin-left: 20px;
        }

        a {
            color: black;
            text-decoration: none;
            font-family:'Lucida Sans';
        }

        .shopping-cart{
            width: 35px;
            height: 35px;
            margin-top: -7px;
            margin-right: 80px;
        }
        .logo{
            font-size: 70px;
            font-weight: 400;
            text-align: center;
            margin-left: 50px;
            font-family: "UnifrakturMaguntia", cursive;
        }
        .first-page-text{
            margin-left: 5%;
            padding-bottom: 0%;
        }
        .shop-btn{
            padding: 15px;
            background-color: black;
            border-radius: 10px;
            border-style: none;
            box-shadow: 2px 5px 15px #888888
        }
        .shop-link{
            color: white;
        }
        .quote {
            font-family: 'Roboto';
            font-size: 50px;
            letter-spacing: 2px;
            font-weight: 400;
        } 

        @media only screen and (max-width: 768px) {
    header {
        flex-direction: column; 
        align-items: center;
    }

    .logo {
        margin: 10px 0; 
    }

    nav {
        margin-top: 20px; 
    }

    nav ul {
        flex-direction: column; 
        text-align: center; 
    }

    nav ul li {
        margin: 10px 0; 
    }

    .shopping-cart {
        margin: 10px 0;
    }
}
        
</style>

<script>
    function adjustBodyHeight() {
    document.body.style.height = window.innerHeight + "px";
}

window.onload = adjustBodyHeight;
window.onresize = adjustBodyHeight;
</script>