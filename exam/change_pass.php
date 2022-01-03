<?php
session_start();
require_once('../connect.php');
if (!isset($_SESSION['user'])) {
	header('location: index.php');
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Đổi mật khẩu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="index.css">
	<script type="text/javascript" src="../bootstrap/bootstrap.js"></script>
	<script type="text/javascript" src="../bootstrap/jquery-3.6.0.min.js"></script>
</head>
<body>
	<div class="card mt-3" style="width: 50%;margin: 0 auto">
		<h5 class="card-header bg-primary text-white"><i class="fas fa-exclamation-triangle"></i> Thông báo</h5>
		<div class="card-body">
			<p class="card-text"></p>
			<a class="btn btn-sm btn-success float-end m-1" href="index.php">Quay lại</a>
		</div>
	</div>
</body>
</html>
<?php
if (isset($_POST['btn-change-pass'])) {
	$id = $_POST['username'];
	$old = $_POST['old-pass'];
	$new = $_POST['new-pass'];
	$sql_check = "SELECT SV_MatKhau FROM SinhVien WHERE MaSV = '$id'";
	$query_check = $conn->query($sql_check) or die('Có lỗi xảy ra');
	$check = $query_check->fetch_array();
	if ($check['SV_MatKhau'] == sha1($old)) {
		$sql_update_pw = "UPDATE SinhVien SET SV_MatKhau = SHA1('$new') WHERE MaSV = '$id'";
		$query_update_pw = $conn->query($sql_update_pw) or die('Có lỗi xảy ra');
		echo "<script>$('.card-text').html('Đổi mật khẩu thành công!!!')</script>";
	}
	else{
		echo "<script>$('.card-text').html('Mật khẩu không chính xác!!!')</script>";
	}
}
?>