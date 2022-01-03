<?php
session_start();
require_once('../connect.php');
if (!isset($_SESSION['admin'])) {
	header('location: login.php');
	die();
}
$admin = $_SESSION['admin'];
$id = $admin['id'];
// Thong tin ca nhan
$sql_profile = "SELECT a.*, TenBoMon, TenKhoa FROM GiaoVien a INNER JOIN BoMon b ON a.MaBoMon = b.MaBoMon INNER JOIN Khoa c ON b.MaKhoa=c.MaKhoa WHERE a.MaGV = '$id' ";
$query_profile = $conn->query($sql_profile) or die('Có lỗi xảy ra');
$profile = $query_profile->fetch_array();
// Cac mon hoc
$sql_subject = "SELECT distinct a.MaMon, TenMon FROM HocPhan a INNER JOIN Mon b ON a.MaMon = b.MaMon WHERE a.MaGV = '$id'";
$query_subject = $conn->query($sql_subject) or die('Có lỗi xảy ra');
// Cac lop hoc phan
$sql_course = "SELECT MaHP, TenHP FROM HocPhan WHERE MaGV = '$id'";
$query_course = $conn->query($sql_course) or die('Có lỗi xảy ra');
//Thong ke
$sql = "SELECT count(distinct MaCH) as socau, count(distinct MaSV) as sosv FROM cauhoi a INNER JOIN mon b ON a.MaMon=b.MaMon INNER JOIN hocphan c ON b.MaMon=c.MaMon INNER JOIN giaovien d ON c.MaGV=d.MaGV INNER JOIN ketqua e ON c.MaHP=e.MaHP WHERE d.MaGV='$id'";
$query = $conn->query($sql) or die('Có lỗi xảy ra');
$row = $query->fetch_array();
//So hoc phan
$sql_num_course = "SELECT count(distinct MaHP) as sohp FROM HocPhan a INNER JOIN GiaoVien b ON a.MaGV=b.MaGV WHERE b.MaGV='$id'";
$query_num_course = $conn->query($sql_num_course) or die('Có lỗi xảy ra');
$num_course = $query_num_course->fetch_array();
//So bai thi da lam
$sql_num_exam = "SELECT count(*) as sobai FROM ketqua a INNER JOIN HocPhan b ON a.MaHP=b.MaHP INNER JOIN GiaoVien c ON b.MaGV=c.MaGV WHERE c.MaGV='$id'";
$query_num_exam = $conn->query($sql_num_exam) or die('Có lỗi xảy ra');
$num_exam = $query_num_exam->fetch_array();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="index_admin.css">
	<script type="text/javascript" src="../bootstrap/bootstrap.js"></script>
	<script type="text/javascript" src="../bootstrap/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="function.js"></script>
</head>
<body>
	<?php include 'navbar.php' ?>
	<?php include 'sidebar.php' ?>
	<script type="text/javascript">$('#pro').addClass('active');</script>
	<div class="container-fluid">
		<div id="content" class="overflow-hidden">
			<div class="row">
				<div class="col-12 col-lg-3">
					<div class="row">
						<div class="col-3 ms-3 item-left"><i class="fas fa-question"></i></div>
						<div class="col-6 item-right"><?= $row['socau'] ?><div class="item-tittle">câu hỏi trắc nghiệm</div></div>
					</div>
				</div>
				<div class="col-12 col-lg-3">
					<div class="row">
						<div class="col-3 ms-3 item-left" style="background-color: #FFA500"><i class="fas fa-user"></i></div>
						<div class="col-6 item-right"><?= $row['sosv'] ?><div class="item-tittle">sinh viên làm bài</div></div>
					</div>
				</div>
				<div class="col-12 col-lg-3">
					<div class="row">
						<div class="col-3 ms-3 item-left" style="background-color: #20B2AA"><i class="fas fa-users"></i></div>
						<div class="col-6 item-right"><?= $num_course['sohp'] ?><div class="item-tittle">lớp học phần</div></div>
					</div>
				</div>
				<div class="col-12 col-lg-3">
					<div class="row">
						<div class="col-3 ms-3 item-left" style="background-color: #EE3B3B"><i class="fas fa-book-open"></i></div>
						<div class="col-6 item-right"><?= $num_exam['sobai'] ?><div class="item-tittle">bài thi đã làm</div></div>
					</div>
				</div>
			</div>
			<hr>
			<div class="fw-bold subject mt-3"><i class="fas fa-id-card"></i> Thông Tin Tài Khoản</div>
			<table class="table table-striped table-primary">
				<tbody>
					<tr>
						<td><strong>Họ và tên: </strong><?= $profile['TenGV'] ?></td>
						<td><strong>Mã CB: </strong><?= $profile['MaGV'] ?></td>
						<td align="right"><button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#changePasswdModal">Đổi mật khẩu</button></td>
						<tr>
							<td><strong>Ngày sinh: </strong><?= date('d/m/Y',strtotime($profile['NgaySinhGV']))?></td>
							<td colspan="2"><strong>Giới tính: </strong><?= $profile['Phai'] ?></td>
						</tr>
						<tr>
							<td><strong>Khoa: </strong><?= $profile['TenKhoa'] ?></td>
							<td colspan="2"><strong>Bộ môn: </strong><?= $profile['TenBoMon'] ?></td>
						</tr>
						<tr>
							<td colspan="3"><strong>Các môn học: </strong>
								<?php 
								while ($subject = $query_subject->fetch_array()) {
									echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&raquo; ".$subject['MaMon']." - ".$subject['TenMon'];
								}
								?>
							</td>
						</tr>
						<tr>
							<td colspan="3"><strong>Lớp học phần: </strong>
								<?php 
								while ($course = $query_course->fetch_array()) {
									echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&raquo; ".$course['MaHP']." - ".$course['TenHP'];
								}
								?>	
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class="modal fade" id="changePasswdModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="changePasswdModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title fw-bold subject" id="ChangePasswdModalLabel"><i class="fas fa-unlock-alt"></i> Thay Đổi Mật Khẩu</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form action="change_passwd.php" method="post">
						<div class="row">
							<div class="col-1 col-lg-6">
								<img src="../img/reset-password.png" width="400px">
							</div>
							<div class="col-11 col-lg-6">
								<div>
								<input type="hidden" name="username" value="<?= $id ?>">
							</div>
							<div class="mb-3">
								<label for="old-passwd" class="form-label fw-bold text-primary"><i class="fas fa-lock"></i> Nhập mật khẩu hiện tại:</label>
								<input type="password" class="form-control" id="old-passwd" name="old-passwd" maxlength="20">
								<div id="txt-old-passwd" class="form-text fw-bold text-danger"></div>
							</div>
							<div class="mb-3">
								<label for="new-passwd" class="form-label fw-bold text-primary"><i class="fas fa-unlock"></i> Nhập mật khẩu mới:</label>
								<input type="password" class="form-control" id="new-passwd" name="new-passwd" maxlength="20">
								<div id="txt-new-passwd" class="form-text fw-bold text-danger"></div>
							</div>
							<div class="mb-3">
								<label for="re-passwd" class="form-label fw-bold text-primary"><i class="fas fa-unlock-alt"></i> Nhập lại mật khẩu mới:</label>
								<input type="password" class="form-control" id="re-passwd" name="re-passwd" maxlength="20">
								<div id="txt-re-passwd" class="form-text fw-bold text-danger"></div>
							</div>
							</div>
						</div>
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Thoát</button>
							<button type="button" onclick="checkChangePassword()" id="change-passwd" name="change-passwd" class="btn btn-sm btn-primary">Thay đổi</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
	</html>