<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
</head>


<?php
    require_once "pdo.php";
    $login="";$pwd="";
    if (isset($_POST['login'])){
        $login=$_POST["login"];
        $pwd=$_POST["pwd"];
        try{
            $req="SELECT * FROM client WHERE nom='$login' and password='$pwd' ";
            $res=$pdo->query($req);
            
            if ($data=$res->fetchAll(PDO::FETCH_ASSOC)){
            
                $_SESSION["connecte"]="1";
                $_SESSION["user"]=$data[0]["user"];
                header("location:index.php");
                exit();
            }
            else
                echo "no user";
            }catch (PDOException $e){
            echo "ERREUR : ".$e->getMessage(). " LIGNE : ".$e->getLine();
        }
    }



    require_once "pdo.php";
    $login="";$pwd="";
    if (isset($_POST['login'])){
        $login=$_POST["login"];
        $pwd=$_POST["pwd"];
        try{
            $req="SELECT * FROM compte WHERE nom='$login' and password='$pwd' ";
            $res=$pdo->query($req);
            
            if ($data=$res->fetchAll(PDO::FETCH_ASSOC)){
            
                $_SESSION["connecte"]="1";
                $_SESSION["user"]=$data[0]["user"];
                header("location:update.php");
                exit();
            }
            else
                echo "no user";
            }catch (PDOException $e){
            echo "ERREUR : ".$e->getMessage(). " LIGNE : ".$e->getLine();
        }
    }
?>
<body>

<header>
        <h1>Welcome to our E-commerce Website</h1>
        <center><img src="photos/logo.jpg" alt="sogeem" height="100" width="100"></center>
        
       
    </header>

    <form action="log.php" method="post" class="content">
        <table  class='table table-striped'>
      <tr> <td> <label for="login">User :</label> </td>
      <td> <input type="text" name="login" id="login" ><br> </td>  </tr>
        <tr> <td><label for="pwd">Password: </label></td>
        <td><input type="password" name="pwd" id="pwd"> <br> </td> </tr>
        <tr> <td> <input type="submit" value="Connect"></td> <td>  </td>   </tr>
        <table>
    </form>
   <hr>

 <form action="log.php" method="post" class="content">
        <table  class='table table-striped'>
            <h3>Staff only</h3>
      <tr> <td> <label for="login">Admin :</label> </td>
      <td> <input type="text" name="login" id="login" ><br> </td>  </tr>
        <tr> <td><label for="pwd">Password: </label></td>
        <td><input type="password" name="pwd" id="pwd"> <br> </td> </tr>
        <tr> <td> <input type="submit" value="Connect"></td> <td>  </td>   </tr>
        <table>
    </form>

    <footer>
        <p>&copy;  Sogeem: Route Afran km3.5--Route Gremda km3.5    </p>
    </footer>

</body>
</html>