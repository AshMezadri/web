<?php
    include_once "db.php";
    
    if(conectaDB()){
        echo "Conectando no banco de dados";
    }else{
        echo "Falha na conexão do banco";
    }
?>