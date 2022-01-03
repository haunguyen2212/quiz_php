<?php
session_start();
require_once('../connect.php');
if (!isset($_SESSION['admin'])) {
	header('location: login.php');
	die();
}
if (isset($_POST['submit'])) {
	$id = $_POST['maHP'];
	$soCau = $_POST['soCau'];
	$thoiGian = $_POST['thoiGian'];
	$pass = $_POST['pass'];
	$sql = "UPDATE HocPhan SET TongSoCau = $soCau, TGLamBai = $thoiGian, HP_MatKhau = '$pass' WHERE MaHP = '$id'";
	$query = $conn->query($sql) or die('Có lỗi xảy ra');
}
header('location: courses_management.php');
?>