<?php

try{

// PDO konekcija
$connection = new PDO("mysql:host=localhost;port=3306;dbname=app",
'phproot', 'phproot2021!');
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sql = "UPDATE user SET password='Fadil' WHERE password='Bakir'";
$connection->exec($sql);






}catch(PDOException $e){
    echo "Greška: " . $e->getMessage();
}
?>