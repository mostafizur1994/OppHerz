<?php 
session_start();
session_destroy();
session_start();
$_SESSION['msg']='<span class="alert alert-success">your are logout successfully</span>';
header('location:login.php');
exit();
?>