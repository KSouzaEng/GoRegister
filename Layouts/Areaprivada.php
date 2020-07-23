<?php

session_start();

if(!isset($_SESSIPON['id_usuario'])){

  echo  "Seja Bem Vindooo!!";
    

}

echo "<a href='sair.php'>Sair</a>";



?>

