<?php
require_once ("pdo.php");
/* récupération des données du formulaire */
$id = $_POST['id'];
$name= $_POST['name'];
$description = $_POST['description'];
$price= $_POST['price'];
$image=$_FILES['image']['name'];
if ($image=="")
{
    $sql = "UPDATE products SET  name='$name', description='$description', price='$price' WHERE id='$id'";
$pdo->exec($sql);
header('location:update.php');
} else
{
   $fichierTemp=$_FILES['image']['tmp_name'];
move_uploaded_file($fichierTemp, 'photos/'.$image );
$sql = "UPDATE products SET  name='$name', description='$description', price='$price',  photo='$image' WHERE id='$id'";
  
$pdo->exec($sql);
header('location:update.php');
}



?>