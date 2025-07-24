<pre>
<?php
$db_user = 'root';
$db_pass = '';
$db_name = 'php101';
$db_host = 'localhost';


//Method#1 (Using mysqli)
// $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

// if ($mysqli->connect_errno) {
//     printf("Connect failed: %s\n", $mysqli->connect_error);
//     exit();
// }

// $result = $mysqli->query("SELECT * FROM objects"); //Returns a resource

// while($row=$result->fetch_object()){
//     $results[]=$row;  //Putting all the rows into an array
// }
// print_r($results);

// $result->close();

//Method#2 (Using PDO)
try {
	$conn = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query = $conn->query("SELECT ID, post_title, post_date FROM objects ORDER BY post_date");
	
	while($row = $query->fetch(PDO::FETCH_OBJ)) {
		$results[] = $row;
	}
	
	print_r($results);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}


?>