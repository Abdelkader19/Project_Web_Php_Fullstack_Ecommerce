<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php      
    require_once "pdo.php";
    
    require_once "session.php";
    Verifier_session();

    ?>
    <header>
        <h1>Contact Us</h1>
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
        <h2>Get in Touch:</h2> <br>
       <center> <a href="https://www.facebook.com/sogeem.fourati"><img src="photos/facebook.webp" alt="fb sogeem" width="100" height="100" ></a><br></center>
        <center><a href=""><img src="photos/insta.jpg" alt="insta sogeem" width="100" height="100"></a><br></center>
        <center><a href="mailto:sogeem@orange.tn"><img src="photos/mail.webp" alt="mail" width="100" height="100"></a><br></center>
        <center><a href="tel:+21622666235"><img src="photos/telep.jpg" alt="tel" width="100" height="100"></a><br></center>

    </div>
    
    <footer>
        <p>&copy;  Sogeem: Route Afran km3.5--Route Gremda km3.5    </p>
    </footer>
</body>
</html>

<?php
// Handle contact form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate and process contact form data
    // ...
}
?>
