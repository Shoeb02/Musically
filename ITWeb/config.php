<?php
$server ="localhost";
$username= "root";
$password ="";
$db="data";
$con = mysqli_connect($server,$username,$password);
if(!$con)
{
    die("coonection lost." .mysqli_connect_error());
}
?>