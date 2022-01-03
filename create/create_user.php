<?php
require_once('../connect.php');
if (isset($_POST['create'])) {
	$maSV = $_POST['maSV'];
	$tenSV = $_POST['tenSV'];
	$phai = ($_POST['phai']=='1') ? 'Nam' : 'Nữ';
	$ngsinh = $_POST['ngsinh'];
	$lop = $_POST['lop'];
	$mk = SHA1($_POST['mk']);
	$sql = "INSERT INTO SinhVien(MaSV,TenSV,GioiTinh,NgaySinh,MaLop,SV_MatKhau) VALUES ('$maSV','$tenSV','$phai','$ngsinh','$lop','$mk')";
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
				<div class="fw-bold">Tạo thành công tài khoản sinh viên:</div>
				<ul>
					<li>Tài khoản: <?=$maSV?></li>
					<li>Họ tên: <?=$tenSV?></li>
					<li>Giới tính: <?=$phai?></li>
					<li>Ngày sinh: <?=$ngsinh?></li>
					<li>Mã lớp: <?=$lop?></li>
					<li>Mật khẩu: &bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;</li>
				</ul>
			</p>
			
			<a class="btn btn-sm btn-success float-end m-1" href="index.php">OK</a>
		</div>
	</div>
</body>
</html>