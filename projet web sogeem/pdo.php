<?php
    session_start();

            try{
                $pdo = new PDO("mysql:host=localhost;dbname=sogeem", 'root');
              
              }
            catch(PDOException  $e){
              print "Erreur !: " . $e->getMessage() ;
            }
        ?> 