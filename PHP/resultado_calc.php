<?php
    function soma($a, $b){
        return $a+$b;
    }

    if(!(isset($_GET["a"]) && isset ($_GET["b"]))){
        header("Location:http://localhost/erro.php");
        exit;
    }

    switch($_GET["operacao"]){
        case "sum":{
            echo soma($_GET["a"],$_GET["b"]);
            break;
        }
        case "subt":{
            echo soma($_GET["a"],$_GET["b"]);
            break;
        }
        case "mult":{
            echo soma($_GET["a"],$_GET["b"]);
            break;
        }
        case "div":{
            echo soma($_GET["a"],$_GET["b"]);
            break;
        }
    }
?>