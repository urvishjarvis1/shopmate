<?php
include 'dbh.php';
$sql = "SELECT * FROM price where name='pixel'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$flipkart = $row['flipkart'];
$snapdeal = $row['snapdeal'];
$amazone = $row['amazone'];
//echo $flipkart;
//echo $snapdeal;
//echo $amazone;
$sql = "SELECT * FROM price ";

$result = $conn->query($sql);
if(!$row = $result->fetch_assoc()){
	echo 'hello';
}else{
	//$_SESSION['id'] = $row['id'];
	$_SESSION['flipkart'] = $flipkart;
	$_SESSION['snapdeal'] = $snapdeal;
	$_SESSION['amazone'] = $amazone;
	header("Location: ../single.php");
}
 ?>