<?php
require_once('../connect.php');
$sql = "SELECT MaLop, TenLop FROM Lop";
$query = $conn->query($sql) or die('Có lỗi xảy ra');

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
	<div class="card">
		<h5 class="card-header text-white"><i class="fas fa-user-plus"></i> Tạo tài khoản sinh viên</h5>
		<div class="card-body">
			<form action="create_user.php" method="post">
				<div class="row">
					<div class="col-6">
						<label for="maSV" class="form-label fw-bold label">Mã số SV:</label>
						<input type="text" class="form-control" name="maSV" placeholder="Nhập mã số sinh viên" required>
					</div>
					<div class="col-6">
						<label for="tenSV" class="form-label fw-bold label">Họ và tên:</label>
						<input type="text" class="form-control" name="tenSV" placeholder="Nhập tên sinh viên" required>
					</div>
					<div class="col-6">
						<label for="phai" class="form-label fw-bold label">Phái:</label>
						<select name="phai" id="phai" class="form-select">
							<option value="1">Nam</option>
							<option value="0">Nữ</option>
						</select>
					</div>
					<div class="col-6">
						<label for="ngsinh" class="form-label fw-bold label">Ngày sinh:</label>
						<input type="text" class="form-control" name="ngsinh" placeholder="Y-m-d" maxlength="10" required>
					</div>
					<div class="col-6">
						<label for="lop" class="form-label fw-bold label">Lớp:</label>
						<select name="lop" id="lop" class="form-select">
							<?php
							while ($row = $query->fetch_array()) {
								echo '<option value="'.$row['MaLop'].'">'.$row['TenLop'].'</option>';
							}
							?>

						</select>
					</div>
					<div class="col-6">
						<label for="mk" class="form-label fw-bold label">Mật khẩu:</label>
						<input type="password" class="form-control" name="mk" placeholder="Nhập mật khẩu" maxlength="20" required>
					</div>
					<div class="col-12">
						<button type="submit" name="create" id="create" class="btn btn-sm btn-primary float-end">Thêm</button>
						<button type="reset" id="reset" class="btn btn-sm btn-secondary float-end">Làm mới</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="text-center mt-2">
		<a href="index.php"><i class="fas fa-users-cog"></i> Tài khoản sinh viên</a>&emsp;
		<a href="admin.php"><i class="fas fa-chalkboard-teacher"></i> Tài khoản giáo viên</a>
	</div>
	
</body>
</html>
