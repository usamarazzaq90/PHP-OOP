<?php
session_start();

$_SESSION['name']='Usama Razzaq';
$_SESSION['role']='Engineering Intern';
print_r($_SESSION);
echo "<br>";

// session_unset();
// print_r($_SESSION);

// session_destroy();
// print_r($_SESSION);
?>