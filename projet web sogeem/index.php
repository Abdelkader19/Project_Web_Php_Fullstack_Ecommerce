<!DOCTYPE html>
<html>
<head>
    <title>E-commerce Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php      
    require_once "pdo.php";
    require_once "session.php";
    Verifier_session();

    ?>
    <header>
        <h1>Welcome to Sogeem's Website</h1>
        <center><img src="photos/logo.jpg" alt="sogeem" height="100" width="100"></center>
        <nav>
        <ul>
        <li><a href="index.php">Home</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="cart.php">Cart</a></li>
              
                <li><a href="contact.php">Contact</a></li>
                <ol align="right" > <a href="deconnexion.php">LOG OUT</a></ol>
            </ul>
        </nav>
       
    </header>
    
    <div class="content">
        <h2>Featured Products</h2>
        
    <?php
            $sql="SELECT * from featured ";
            $res=$pdo->query($sql);
 

            foreach ($res as $product) {
                echo '<div class="product">';
                echo '<img src="photos/' . $product['image'] . '" alt="' . $product['name'] . '" border="10px ">';
                echo '<h3>' . $product['name'] . '</h3>';
                echo '<p>' . $product['description'] . '</p>';
                echo '<p>Price: TND' . $product['price'] . '</p>';
                
                echo '</div>';
            }
        ?>
    </div>
    
    <footer>
        <p>&copy;  Sogeem: Route Afran km3.5--Route Gremda km3.5    </p>
    </footer>
</body>
</html>
