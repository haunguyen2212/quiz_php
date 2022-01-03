<?php
session_start();
require_once('../connect.php');
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "DELETE FROM CauHoi WHERE MaCH = '$id'";
	$query = $conn->query($sql) or die('Có lỗi xảy ra');
	header('location: questions_management.php');
}

?>