<?php
 #Iz baze se dobavlja status (1 - nema promjene , 0 - ima promjena)
$status = 0; //ili 0 ili 1

if($status === 1){
    file_get_contents('cache2.php');
}else{
    ob_start();

    echo "Hello World";
    echo "<br>";
    echo "Test";
    echo "<br>";
    echo "Nešto novo";
    echo "<br>";
    echo "Test1";

    $content = ob_get_contents();
    ob_end_clean();
    echo $content; // echo ukinemo i nema ispisa i stavimo status 0 ili 1
    file_put_contents('cache2.php', $content);
    # Ode se u bazu i stavi status 1
}

?>