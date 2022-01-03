<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<?php
	session_start();
	require_once('../connect.php');
	if (isset($_POST['sm'])) {
		$username = $_POST['loginName'];
		$passwd = SHA1($_POST['loginPass']);
		$sql1 = "SELECT * FROM SinhVien WHERE MaSV = '$username' AND SV_MatKhau = '$passwd'";
		$query1 = $conn->query($sql1) or die('Có lỗi xảy ra');
		if ($query1->num_rows) {
			$row = $query1->fetch_array();
			$_SESSION['user'] = ['id' => $username, 'name' => $row['TenSV']];
			header('location: index.php');
			die();
		}
		else{
	?>
			<div class="card mt-3" style="width: 50%;margin: 0 auto">
				<h5 class="card-header bg-primary text-white"><i class="fas fa-exclamation-triangle"></i> Cảnh báo</h5>
				<div class="card-body">
					<p class="card-text">Thông tin tài khoản hoặc mật khẩu không chính xác!</p>
					<a class="btn btn-sm btn-success float-end" href="index.php">Quay lại</a>
				</div>
			</div>
	<?php
		}
	}
	?>
	
</body>
</html>
