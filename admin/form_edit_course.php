<?php
session_start();
require_once('../connect.php');
if (!isset($_SESSION['admin'])) {
	header('location: login.php');
	die();
}
if (!isset($_GET['id'])) {
	header('location: courses_management.php');
	die();
}
$id = $_GET['id'];
$sql = "SELECT * FROM HocPhan WHERE MaHP = '$id'";
$query = $conn->query($sql) or die('Có lỗi xảy ra');
$row = $query->fetch_array();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chỉnh sửa học phần</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="index_admin.css">
</head>
<body>
	<div class="card mt-3" style="width: 50%;margin: 0 auto">
		<h5 class="card-header bg-primary text-white"><i class="fas fa-exclamation-triangle"></i> Chỉnh sửa học phần</h5>
		<div class="card-body">
			<p class="card-text">
				<form action="edit_course.php" method="post">
					<input type="hidden" name="maHP" value="<?=$id?>">
					<div class="row">
						<div class="col-6 mb-3">
							<label for="maHPDisabled" class="form-label fw-bold">Mã học phần</label>
							<input type="text" id="maHPDisabled" class="form-control" value="<?=$row['MaHP']?>" disabled>
						</div>
						<div class="col-6 mb-3">
							<label for="tenHP" class="form-label fw-bold">Tên học phần</label>
							<input type="text" id="tenHP" class="form-control" value="<?=$row['TenHP']?>" disabled>
						</div>
						<div class="col-6 mb-3">
							<label for="soCau" class="form-label fw-bold">Số câu hỏi:</label>
							<input type="number" class="form-control" id="soCau" name="soCau" value="<?=$row['TongSoCau']?>">
						</div>
						<div class="col-6 mb-3">
							<label for="thoiGian" class="form-label fw-bold">Thời gian:</label>
							<input type="number" class="form-control" id="thoiGian" name="thoiGian" value="<?=$row['TGLamBai']?>">
						</div>
						<div class="col-6 mb-3">
							<label for="pass" class="form-label fw-bold">Mật khẩu:</label>
							<input type="text" class="form-control" id="pass" name="pass" value="<?=$row['HP_MatKhau']?>" maxlength="40">
						</div>
						<div class="col-12">
							<button type="submit" name="submit" class="btn btn-sm btn-success float-end m-1">Thay đổi</button>
							<a class="btn btn-sm btn-danger float-end m-1" href="courses_management.php">Hủy</a>
						</div>
					</div>
					
				</form>
				
			</p>
		</div>
	</div>
</body>
</html>