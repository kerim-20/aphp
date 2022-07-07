<?php

// Konekcija
$connection = new mysqli('localhost', 'phproot','phproot2021!');

//Brisanje 
$sql = "DELETE FROM app.user WHERE app.user.id = 7";
if($connection->query($sql) === true){
    echo "Deleted";
}else{
    echo "Not deleted: " . $connection->error;
}

?>