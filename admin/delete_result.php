<?php
session_start();
require_once('../connect.php');
if (!isset($_SESSION['admin'])) {
	header('location: login.php');
	die();
}
if (!isset($_GET['id']) || !isset($_GET['course'])) {
	header('location: index.php');
	die();
}
$id = $_GET['id'];
$course = $_GET['course'];
$sql = "DELETE FROM KetQua WHERE MaHP = '$course' AND MaSV = '$id'";
$query = $conn->query($sql) or die('Có lỗi xảy ra');
header('location: score_management.php');
?>