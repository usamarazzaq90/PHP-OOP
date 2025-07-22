<!-- Root php File -->

<?php

//To display erros:
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once './adminUser.php';   //including adminUser file
require_once './customerUser.php';   //including customerUser file

$admin1=new AdminUser("Usama","usama@gmail.com"); //Creating a object of AdminUser class
$admin1->login("usama@gmail.com","secret_password");
$admin1->displayInfo();
$admin1->manage();
$admin1->logout();

echo "<br>";

$customer1=new CustomerUser("Sufyan","sufyan@gmail.com"); //Creating a object of CustomerUser class
$customer1->login("sufyan@gmail.com","secret_password2");
$customer1->displayInfo();
$customer1->purchase();
$customer1->logout();
?>