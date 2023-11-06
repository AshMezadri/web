<?php
    if(isset($_GET["login"]) && isset($_GET["senha"])){
        $login=$_GET["login"];
        $senha=$_GET["senha"];

        if($login=="admin" && $senha=="1234"){
            session_start();
            $_SESSION["dado"]=$_GET["dado"];
            header("Location:home.php");
        }
    }else{
        echo "Informe todas as informações";
    }
?>