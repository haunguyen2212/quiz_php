<?php
session_start();
require_once('../connect.php');
if (!isset($_SESSION['admin'])) {
	header('location: login.php');
	die();
}
$admin = $_SESSION['admin'];
$id = $admin['id'];
$sql_courses ="SELECT a.MaHP, TenHP, TongSoCau, TGLamBai, HP_MatKhau, TuyChinh, count(*) SL FROM HocPhan a INNER JOIN KetQua b ON a.MaHP = b.MaHP WHERE MaGV = '$id' GROUP BY a.MaHP";
$query_courses = $conn->query($sql_courses) or die('Có lỗi xảy ra');

//var_dump($_SESSION['admin']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản lý học phần</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="index_admin.css">
	<script type="text/javascript" src="../bootstrap/bootstrap.js"></script>
	<script type="text/javascript" src="../bootstrap/jquery-3.6.0.min.js"></script>
</head>
<body>
	<!-- Navbar-->
	<?php include 'navbar.php'?>
	<!-- Sidebar -->
	<?php include 'sidebar.php'?>
	<script type="text/javascript">$('#cou').addClass('active');</script>
	<div class="container-fluid">
		<div id="content">
			<div class="fw-bold subject"><i class="fas fa-id-card"></i> Danh sách bài thi</div>
			<table class="table table-striped table-primary">
				<thead>
					<tr>
						<th width="10%">Mã HP</th>
						<th width="20%">Tên học phần</th>
						<th width="15%">Số câu hỏi</th>
						<th width="15%">Thời gian làm bài</th>
						<th width="10%">Đã nộp</th>
						<th width="15%">Mật khẩu</th>
						<th width="10%">Chỉnh sửa</th>
						<th width="5%">Mở</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while ($course = $query_courses->fetch_array()) {?>
					<tr>
						<th><?= $course['MaHP'] ?></th>
						<td><?= $course['TenHP'] ?></td>
						<td><?= $course['TongSoCau'] ?> câu</td>
						<td><?= $course['TGLamBai'] ?> phút</td>
						<td><?= $course['SL'] ?></td>
						<td><?= $course['HP_MatKhau'] ?></td>
						<td><a href="form_edit_course.php?id=<?=$course['MaHP']?>" class="btn btn-sm border-dark mx-3"><i class="far fa-edit"></i></a></td>
						<td>
							<?php
							if ($course['TuyChinh'] == 'On') {
								echo '<a href="course_status.php?id='.$course['MaHP'].'&action=Off" class="btn btn-xs btn-success"><i class="far fa-circle"></i></a>';
							}
							elseif ($course['TuyChinh'] == 'Off') {
								echo '<a href="course_status.php?id='.$course['MaHP'].'&action=On" class="btn btn-xs btn-danger"><i class="fas fa-power-off"></i></a>';
							}
							?>
						</td>
					</tr>

					<?php	
					}
					?>

				</tbody>
			</table>
		</div>
	</div>
</body>
</html>