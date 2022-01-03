<?php
session_start();
require_once('../connect.php');
if (!isset($_SESSION['admin'])) {
	header('location: login.php');
	die();
}
$admin = $_SESSION['admin'];
$id = $admin['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản lý điểm</title>
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
	<script type="text/javascript">$('#sco').addClass('active');</script>
	<!-- Content-->
	<div class="container-fluid">
		<div id="content">
			<div class="menu-subject">
				<?php
				// Tao menu hoc phan
				$sql_courses = "SELECT MaHP, TenHP FROM HocPhan WHERE MaGV= '$id'";
				$query_courses = $conn->query($sql_courses) or die('Có lỗi xảy ra');
				while ($row_courses=$query_courses->fetch_array()) {
					echo '<a href="#'.$row_courses['MaHP'].'" class="btn btn-sm btn-primary m-1">'.$row_courses['TenHP'].'</a>';
				}
				?>
			</div>
			<?php
				// Bang ket qua hoc phan
				$sql_courses_2 = "SELECT MaHP, TenHP FROM HocPhan WHERE MaGV= '$id'";
				$query_courses_2 = $conn->query($sql_courses_2) or die('Có lỗi xảy ra');
				while ($row_courses_2=$query_courses_2->fetch_array()) {
					$subject = $row_courses_2['MaHP'];
					$subject_name = $row_courses_2['TenHP'];
					echo '<div id="'.$subject.'" class="fw-bold subject"><i class="fas fa-book"></i> '.$subject_name.'</div>';
				?>
				<table class="table table-striped table-responsive-md table-primary">
					<thead> 
						<tr>
							<th scope="col" width="10%">Mã SV</th>
							<th scope="col" width="17.5%">Tên sinh viên</th>
							<th scope="col" width="10%">Giới tính</th>
							<th scope="col" width="17.5%">Tên Lớp</th>
							<th scope="col" width="15%">Thời gian làm bài</th>
							<th scope="col" width="15%">Thời gian nộp bài</th>
							<th scope="col" width="7.5%">Điểm</th>
							<th scope="col" width="7.5%">Đã nộp</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$sql_score = "SELECT * FROM Lop a INNER JOIN SinhVien b ON a.MaLop=b.MaLop INNER JOIN KetQua c ON b.MaSV=c.MaSV INNER JOIN HocPhan d ON c.MaHP=d.MaHP WHERE c.MaHP = '$subject'";
						$query_score = $conn->query($sql_score) or die('Có lỗi xảy ra');
						while ($row_score = $query_score->fetch_array()) { 
							?>
							<tr>
								<td><?= $row_score['MaSV'] ?></td>
								<td><?= $row_score['TenSV'] ?></td>
								<td><?= $row_score['GioiTinh'] ?></td>
								<td><?= $row_score['TenLop'] ?></td>
								<td><?= date('d/m/Y - H:i:s',strtotime($row_score['TGBatDau'])) ?></td>
								<td><?= date('d/m/Y - H:i:s',strtotime($row_score['TGNopBai'])) ?></td>
								<td class="fw-bold">&ensp;<?= $row_score['Diem'] ?></td>
								<td>
									<?php
										if ($row_score['TrangThai']=='T') {
											echo '<div class="text-success">&emsp;<i class="fas fa-check"></i></div>';
										}
										else{
											echo '<a href="warning_del_result.php?id='.$row_score['MaSV'].'&course='.$subject.'" class="text-danger">&emsp;<i class="fas fa-times"></i></a>';
										}
									?>
									
								</td>
							</tr>
						<?php	}
						?> 
					</tbody>
				</table>

				<?php
				}
				?>
		</div>
		
	</div>
</body>
</html>