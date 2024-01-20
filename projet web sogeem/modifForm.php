<!DOCTYPE html>
<html>
<head>
    <title>Modifier un produit</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php      
    require_once "pdo.php";
    
    require_once "session.php";
    Verifier_session();


    $id_etd=$_GET['id_etd'];

    try{
        $req="SELECT * FROM products where id='$id_etd'";
        $res=$pdo->query($req);
        $data=$res->fetchAll(PDO::FETCH_ASSOC);
        if (count($data)===1){
           
            $name=$data[0]["name"];
            $description=$data[0]["description"];
            $price=$data[0]["price"];
            $image=$data[0]["image"];
        }
    } catch(PDOException $e){
        echo "ERREUR : ".$e->getMessage(). " LIGNE : ".$e->getLine();
    }
 ?>
    <header>
        <h1>modifForm </h1>
        <center><img src="photos/logo.jpg" alt="sogeem" height="100" width="100"></center>
        <nav>
        <ul>
        
        <li><a href="update.php">Update Products</a></li>
               

                
                <ol align="right" > <a href="deconnexion.php">LOG OUT</a></ol>
            </ul>
        </nav>
    </header>



<div class="content">
    <form method="POST" action="modifier.php">
        <input type="hidden" name="id" value="<?php echo $id_etd; ?>">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>" required><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required><?php echo $description; ?></textarea><br><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" value="<?php echo $price; ?>" required><br><br>

        <label for="image">image:</label>
        <input type="file" id="image" name="image" ><img src= "photos/<?=$image?>" width="50" height="50"><br><br>



        <button type="submit">change now</button>
    </form>
</div>

<footer>
        <p>&copy;  Sogeem: Route Afran km3.5--Route Gremda km3.5    </p>
    </footer>

</body>
</html>
