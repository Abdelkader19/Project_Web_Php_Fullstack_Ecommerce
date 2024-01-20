<!DOCTYPE html>
<html lang="en">
<head>  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styl.css">
</head>
<body>
    <header class='nav navbar'>
        <span class="gauche"><a href="#"><?=$_SESSION["user"]?></a></span>
        
        <span class="droite">
            <a href="deconnexion.php">Déconnexion</a>
        </span>

    </header>
</body>
</html>