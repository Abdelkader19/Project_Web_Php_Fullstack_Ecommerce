    <!DOCTYPE html>
    <html lang="en">
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
        <title>Document</title>
    </head>
    <body>
    
    <header>
        <h1>Your Shopping Cart</h1>
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
<?php
    require_once "pdo.php";

    if (isset($_GET['id_etd'])) {
        $id_etd = $_GET['id_etd'];

        try {
            $stmt = $pdo->prepare("SELECT * FROM products WHERE id = :id");
            $stmt->bindParam(':id', $id_etd);
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($data) {
                $id = $data["id"];
                $name = $data["name"];
                $description = $data["description"];
                $price = $data["price"];
                $image = $data["image"];

                $stmt = $pdo->prepare("SELECT COUNT(*) FROM cart WHERE id = :id");
                $stmt->bindParam(':id', $id);
                $stmt->execute();
                $count = $stmt->fetchColumn();

                if ($count === 0) {
                    $stmt = $pdo->prepare("INSERT INTO cart (id, name, description, image, price) VALUES (:id, :name, :description, :image, :price)");
                    $stmt->bindParam(':id', $id);
                    $stmt->bindParam(':name', $name);
                    $stmt->bindParam(':description', $description);
                    $stmt->bindParam(':image', $image);
                    $stmt->bindParam(':price', $price);
                    $stmt->execute();
                }
            }
        } catch (PDOException $e) {
            echo "ERREUR : " . $e->getMessage() . " LIGNE : " . $e->getLine();
        }
    }

    $stmt = $pdo->query("SELECT id, name, description, image, price FROM cart");
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($products as $product) {
        echo '<div class="product">';
        echo '<img src="photos/' . $product['image'] . '" alt="' . $product['name'] . '" border="10px">';
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







