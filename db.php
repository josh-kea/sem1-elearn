<?php 
try{
    $dbUserName = 'mboegvald_dk_mydb';
    $dbPassword = 'adminadmin';
    $connection = 'mysql:host=mboegvald.dk.mysql; dbname=mboegvald_dk_mydb; charset=utf8mb4';
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //TRY CATCH
        // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ //ALLOWS JSON
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC //ALLOWS ASSOSIATIVE
    ];
    $db = new PDO($connection, $dbUserName, $dbPassword, $options);
}catch(PDOExecption $ex){
echo $ex;
}

?>

