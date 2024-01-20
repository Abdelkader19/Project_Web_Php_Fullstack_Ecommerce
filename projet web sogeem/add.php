<?php
     require_once "pdo.php" ;  
          $id_etd=$_GET['id_etd'];
    
        try{
            $req="SELECT * FROM products where id='$id_etd'";
            $res=$pdo->query($req);
            $data=$res->fetchAll(PDO::FETCH_ASSOC);
            if (count($data)===1){
                $id=$data[0]["id"];
                $name=$data[0]["name"];
                $description=$data[0]["description"];
                $price=$data[0]["price"];
                $image=$data[0]["image"];
            }
        } catch(PDOException $e){
            echo "ERREUR : ".$e->getMessage(). " LIGNE : ".$e->getLine();

        }

$sql= "INSERT INTO featured (id,name,description,image,price) VALUES
('$id','$name','$description','$image','$price')";
$pdo->exec($sql);
header('location:update.php');
?>