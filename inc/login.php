<?php
session_start();
include 'dbh.php';


$uid = $_POST['uid'];
$pwd = $_POST['pwd']; 

$sql = "SELECT * FROM user WHERE uid='$uid'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$hash_password=$row['pwd'];
$hash = password_verify($pwd,$hash_password);
$first = $row['first'];
echo $first;
if($hash==0){
	header("Location:../index.php?error=password");
		exit();
}else{

$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$hash_password'";
$result = $conn->query($sql);

if(!$row = $result->fetch_assoc()){
		
		
	
}else{
	$_SESSION['id'] = $row['id'];
	$_SESSION['first']= $first;
	header("Location: ../main/main.php");

}
}

