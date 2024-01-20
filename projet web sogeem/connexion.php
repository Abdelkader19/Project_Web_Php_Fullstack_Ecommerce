<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php

            try{
                $dbco = new PDO("mysql:host=localhost;dbname=sogeem", 'root');
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'Connexion réussie';

              }
            catch(PDOException  $e){
              print "Erreur !: " . $e->getMessage() . "<br/>";
            }
        ?>
    </body>
</html>
