<?php 

//<<-------------- ARRAYS -------------->>

/*$array=array(1,2,3,4,5);
$array0=[10,20,30,40,50];
print_r($array);
echo "<br>";
print_r($array0);
echo "<br>";
$array2[]="Usama";
$array2[]="Razzaq";
print_r($array2);
echo "<br>";
$array3=[
    'name'=>'Usama Razzaq',
    'role'=>'Engineering Intern',
    'Salary'=>30000,
    "Time"=>'9-6 o\'clock',
];
print_r($array3);*/
//------------------------------------------->>

//<<-------------- CONDITIONS -------------->>

/*$number=20;
if($number%2==0){
    echo "$number is an even number";
}else{
    echo "$number is an odd number";
}*/
//------------------------------------------->>


//<<-------------- Loops -------------->>

/*$x=5;
for($i=1;$i<=10;$i++){
    echo "$x x $i = ".$x*$i."<br>";
}

$array=array('name','email',7,'address',false,true);
foreach($array as $item){
    echo "$item <br>";
}
foreach($array as $key=>$item){
    echo "Key $key: $item <br>";
}*/
//------------------------------------------->>



//<<-------------- GET Variables-------------->>

//print_r($_GET);
if(isset($_GET['s'])){
    echo "Your search term is ".$_GET['s'];
}
?>

<form method="get" action="">
    <label>Enter your search term</label>
    <input type="search" name="s" value="<?php echo $_GET['s']; ?>" >
</form>


<?php
echo "<br>";

//<<-------------- POST Variables-------------->>

//print_r($_POST);
if(isset($_POST['s'])){
    echo "Your search term is ".$_POST['s'];
}
?>
<form method="post" action="">
    <label>Enter your search term</label>
    <input type="search" name="s" value="<?php echo $_POST['s']; ?>" >
</form>
