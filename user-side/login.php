<?php
require_once('../controllers/adminControllers.php');
require_once('../models/admin.php');
$username=$_GET['username'];
$password=$_GET['password'];
$admin=new admin($username,$password);
$adminCtr=new adminControllers();
$res=$adminCtr->insert($admin);
if($res==true){
	header('Location:material-dashboard-2/pages/dashboard.html');
}
?>