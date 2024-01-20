<?php
function Verifier_session(){
    if($_SESSION["connecte"]!=="1"){
        header("location:log.php");
        
    }
}
?>