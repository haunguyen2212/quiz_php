<?php
require_once('../connect.php');
if (isset($_POST['create'])) {
	$maGV = $_POST['maGV'];
	$tenGV = $_POST['tenGV'];
	$phai = ($_POST['phai']=='1') ? 'Nam' : 'Nữ';
	$ngsinh = $_POST['ngsinh'];
	$bomon = $_POST['bomon'];
	$mk = SHA1($_POST['mk']);
	$sql = "INSERT INTO GiaoVien(MaGV,TenGV,Phai,NgaySinhGV,MaBoMon,GV_MatKhau) VALUES ('$maGV','$tenGV','$phai','$ngsinh','$bomon','$mk')";
	$query = $conn->query($sql) or die('Có lỗi xảy ra');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tạo tài khoản</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="root.css">
</head>
<body>
	<div class="card mt-3" style="width: 50%;margin: 0 auto">
		<h5 class="card-header bg-primary text-white"><i class="fas fa-exclamation-triangle"></i> Thành công</h5>
		<div class="card-body">
			<p class="card-text">
				<div class="fw-bold">Tạo thành công tài khoản giáo viên:</div>
				<ul>
					<li>Tài khoản: <?=$maGV?></li>
					<li>Họ tên: <?=$tenGV?></li>
					<li>Giới tính: <?=$phai?></li>
					<li>Ngày sinh: <?=$ngsinh?></li>
					<li>Mã bộ môn: <?=$bomon?></li>
					<li>Mật khẩu: &bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;</li>
				</ul>
			</p>
			
			<a class="btn btn-sm btn-success float-end m-1" href="admin.php">OK</a>
		</div>
	</div>
</body>
</html>