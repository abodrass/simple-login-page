<?php
$server_name="sql100.epizy.com";
$user_name="epiz_34223289";
$password="ufpTwqF3Eykd";
$db_name="epiz_34223289_my_data";
$con=mysqli_connect($server_name ,$user_name,$password,$db_name);
if (!$con){
    die(mysqli_error($con));
}
$sql="INSERT INTO Conference (id,name) VALUES (101,'ABOD');" ;

$retval=mysqli_query($con,$sql);
var_dump($retval);
if ($retval==true){
    echo done;
}
else 
echo no;

