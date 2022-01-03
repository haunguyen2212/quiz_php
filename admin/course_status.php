<?php
session_start();
require_once('../connect.php');
if (!isset($_SESSION['admin'])) {
	header('location: login.php');
	die();
}
if (isset($_GET['id']) && isset($_GET['action'])) {
	$id = $_GET['id'];
	$action = $_GET['action'];
	$sql = "UPDATE HocPhan SET TuyChinh = '$action' WHERE MaHP = '$id'";
	$query = $conn->query($sql) or die("Có lỗi xảy ra");
}
header('location: courses_management.php');
?>