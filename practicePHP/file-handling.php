<?php
$filename = 'myFile.txt';

//Reading a file
$myFile=fopen($filename,'r') or die('unable to open the file');
echo fread($myFile, filesize($filename)). "<br>";
fclose($myFile);

//Write to a file
// $myFile=fopen($filename,'w') or die('unable to open the file');
// $myText="Hi! I am Usama. \n";
// fwrite($myFile,$myText);
// $myText="Nice to meet you. \n";
// fwrite($myFile,$myText);
// $myText="Good Bye! \n";
// fwrite($myFile,$myText);
// fclose($myFile);

//Append to a file
$myFile=fopen($filename,'a') or die('unable to open the file');
$myText="This is an extra line. \n";
fwrite($myFile,$myText);
fclose($myFile);

// //Read changes
$myFile=fopen($filename,'r') or die('unable to open the file');
echo fread($myFile, filesize($filename)). "<br>";
fclose($myFile);

?>