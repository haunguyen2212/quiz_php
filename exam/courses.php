<?php
session_start();
if (!isset($_SESSION['user'])) {
	header('location: index.php');
	die();
}
require_once('../connect.php');
$sql = "SELECT * FROM  HocPhan a INNER JOIN GiaoVien b ON a.MaGV=b.MaGV ORDER BY MaHP";
$sbj = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Các khóa học</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<nav class="navbar navbar-light">
		<div class="container-fluid">
			<a class="navbar-brand fw-bold text-white" href="#">
				<img src="../img/logo_transparent.png" width="50px" height="40px">QUIZ.com.vn
			</a>	
			<div class="dropdown">
				<a class="btn btn-outline-light fw-bold dropdown-toggle" href="#" role="button" id="userlogin" data-bs-toggle="dropdown" aria-expanded="false"><?=$_SESSION['user']['name']?></a>
				<ul class="dropdown-menu" aria-labelledby="userlogin">
					<li><a class="dropdown-item" id="userlogout" href="logout.php">Đăng xuất</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container mt-3">
		<table class="table table-bordered table-hover">
			<thead class="bg-primary text-white">
				<tr>
					<th width="10%">Mã HP</th>
					<th width="25%">Tên Học Phần</th>
					<th width="28%">Giáo Viên</th>
					<th width="15%">Số câu</th>
					<th width="15%">Thời gian</th>
					<th width="7%">Làm bài</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($row=$sbj->fetch_array()) {?>
					<tr>
						<td><?=$row['MaHP']?></td>
						<td><?=$row['TenHP']?></td>
						<td><?=$row['TenGV']?></td>
						<td><?=$row['TongSoCau']?> câu</td>
						<td><?=$row['TGLamBai']?> phút</td>
						<td>
							<?php
							if($row['TuyChinh'] == 'Off'){
								echo '<button class="btn btn-sm btn-secondary">Chưa mở</button>';
							}
							else{
								$id = $_SESSION['user']['id'];
								$course = $row['MaHP'];
								$sql_check = "SELECT * FROM KetQua WHERE MaSV = '$id' AND MaHP = '$course'";
								$query_check = $conn->query($sql_check) or die('Có lỗi xảy ra');
								if ($query_check->num_rows) {	
									echo '<button class="btn btn-sm btn-danger">Đã nộp</button>';
								}
								else{
								
									echo '<a href="questions.php?id='.$row['MaHP'].'" class="btn btn-sm btn-success">Làm bài</a></td>';
								}
							}
							?>		
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>
		<div><a href="index.php"><i class="fas fa-home"></i> Quay về trang chủ</a></div>
	</div>
	<script type="text/javascript" src="../bootstrap/bootstrap.js"></script>
	<script type="text/javascript" src="../bootstrap/jquery-3.6.0.min.js"></script>
</body>
</html>