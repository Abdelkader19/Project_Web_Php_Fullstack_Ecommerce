<?php
               
               require_once ("pdo.php");
               $id_etd=$_GET['id_etd'];
               $sql = "DELETE FROM products WHERE id=$id_etd";

               $pdo->exec( $sql);

               echo " Suppression de produit ".$id_etd." avec succès !! ";
               header('location:update.php');

               ?>
