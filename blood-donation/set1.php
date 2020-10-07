<?php
session_start(); 
$_SESSION['status']='active';
header('Location:adminstrator.html');
?>