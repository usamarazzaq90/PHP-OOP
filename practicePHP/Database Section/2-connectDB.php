<?php
$db_user = 'root';
$db_pass = '';
$db_name = 'php101';
$db_host = 'localhost';

//Method # 1
// $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

// if ($mysqli->connect_errno) {
//     printf("Connect failed: %s\n", $mysqli->connect_error);
//     exit();
// } else {
//     echo 'Connected';
// }

//Method # 2
try {
    $conn=new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected";
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}

?>