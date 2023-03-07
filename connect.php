<?php

$firstnametext = $_POST['firstnamee'];
$scoreNum = $_POST['scoreNum'];

try{
    $dsn = "mysql: dbname=id20413256_wordle_ranker;host=localhost";
    $user = "id20413256_wordleranker";
    $pswd = "cPuZJa|7yBuXtM]p";
    $conn = new PDO($dsn,$user,$pswd);
    $conn->query("USE id20413256_wordle_ranker");
}
catch(PDOException $e){
    die("error connecting.... :(");
    
}
?>
