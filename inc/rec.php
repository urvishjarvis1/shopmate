<?php
	session_start();
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd']; 
	$sql = "SELECT * FROM user WHERE uid='$uid'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$hash_password=$row['pwd'];
	$encrypted_password=password_hash($pwd,PASSWORD_DEFAULT);
	if(!$row = $result->fetch_assoc()){
		header("Location:../index.php?error=password");
		exit();
	}else{
	$sql = "UPDATE user SET pwd='encrypted_password' WHERE uid='$uid'";
	}
?>