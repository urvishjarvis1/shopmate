<?php
session_start();

include 'dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd']; 

$sql = "SELECT uid FROM user WHERE uid='$uid'";
$result = $conn->query($sql);
$uidcheck = mysqli_num_rows($result);
if($uidcheck > 0){
	header("Location:../index.php?error=username");
	exit();
}else{
	$encrypted_password=password_hash($pwd,PASSWORD_DEFAULT);
	$sql = "INSERT INTO user (first, last, uid, pwd) VALUES ('$first','$last','$uid','$encrypted_password')";
	$result = $conn->query($sql);

header("Location: ../index.php");
}