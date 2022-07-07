<?php

try{

// PDO konekcija
$connection = new PDO("mysql:host=localhost;port=3306;dbname=app",
'phproot', 'phproot2021!');
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Upis u bazu podataka
$sql = "INSERT INTO user(name, lastname, username, password, email,
phone, status) VALUES ('Test3', 'Testović3', 'test3', 'Ilovetest',
'test3@test.com', '+3876523112412', '2')";

$connection->exec($sql);
echo "Unešeno";

}catch(PDOException $e){
    echo "Greška: " . $e->getMessage();
}

?>

