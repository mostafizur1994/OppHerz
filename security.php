<?php
session_start();

if(!isset($_SESSION['admin_id'])&& $_SESSION['admin_id'] =='')
{
	
	$_SESSION['msg']='<span class="alert alert-danger">your not able to aceess this page </span>';
	header('location:login.php');
	
	exit();
	
}


?>