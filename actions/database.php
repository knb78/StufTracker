<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=forum;charset=utf8;', 'root2', 'root2');
}catch(Exception $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}
