<?php
session_start();
require_once('../connect.php');
if (!isset($_SESSION['admin'])) {
	header('location: login.php');
	die();
}
$admin = $_SESSION['admin'];
$id = $admin['id'];

//var_dump($_SESSION['admin']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
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
	<!-- Navbar-->
	<?php include 'navbar.php'?>
	<!-- Sidebar -->
	<?php include 'sidebar.php'?>
	<script type="text/javascript">$('#que').addClass('active');</script>
	<!-- Content -->
	<div class="container-fluid">
		<div id="content">
			<div class="menu-subject">
				<?php
				// Tao menu mon hoc
				$sql_subject = "SELECT DISTINCT a.MaMon, TenMon FROM HocPhan a INNER JOIN Mon b ON a.MaMon=b.MaMon WHERE MaGV= '$id'";
				$query_subject = $conn->query($sql_subject) or die('Có lỗi xảy ra');
				while ($row_subject=$query_subject->fetch_array()) {
					echo '<a href="#'.$row_subject['MaMon'].'" class="btn btn-sm btn-primary m-1">'.$row_subject['TenMon'].'</a>';
				}
				?>
			</div>

			<?php
			$sql_courses = "SELECT DISTINCT a.MaMon, TenMon FROM HocPhan a INNER JOIN Mon b ON a.MaMon=b.MaMon WHERE MaGV= '$id'";
			$query_courses = $conn->query($sql_courses) or die('Có lỗi xảy ra');
			while ($row_courses=$query_courses->fetch_array()) {
				$subject = $row_courses['MaMon'];
				$subject_name = $row_courses['TenMon'];
				echo '<div id="'.$subject.'" class="fw-bold subject"><i class="far fa-question-circle"></i> Câu hỏi môn '.$subject_name.' <a class="add-questions" href="form_add_questions.php?id='.$subject.'"><i class="fas fa-plus-circle"></i></a></div>';

				?>
				<table class="table table-striped table-responsive-md table-primary">
					<thead> 
						<tr>
							<th scope="col" width="5%">STT</th>
							<th scope="col" width="30%">Câu hỏi</th>
							<th scope="col" width="12.5%">Đáp án A</th>
							<th scope="col" width="12.5%">Đáp án B</th>
							<th scope="col" width="12.5%">Đáp án C</th>
							<th scope="col" width="12.5%">Đáp án D</th>
							<th scope="col" width="5%">Chọn</th>
							<th scope="col" width="10%">Tùy chỉnh</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$sql_questions = "SELECT * FROM CauHoi WHERE MaMon = '$subject' ORDER BY MaCH desc";
						$query_questions = $conn->query($sql_questions) or die('Có lỗi xảy ra');
						$index = 1;
						while ($row_questions = $query_questions->fetch_array()) { 
							?>
							<tr>
								<td><?= $index++ ?></td>
								<td><?= $row_questions['NoiDung'] ?></td>
								<td><?= $row_questions['OptionA'] ?></td>
								<td><?= $row_questions['OptionB'] ?></td>
								<td><?= $row_questions['OptionC'] ?></td>
								<td><?= $row_questions['OptionD'] ?></td>
								<td class="fw-bold" align="center"><?= $row_questions['DapAn'] ?></td>
								<td>
									<a class="btn btn-sm btn-success" href="form_edit_questions.php?id=<?= $row_questions['MaCH'] ?>">Sửa</a>
									<a class="btn btn-sm btn-danger" href="warning_del_questions.php?id=<?= $row_questions['MaCH'] ?>">Xóa</a>
								</td>
							</tr>
						<?php	}
						?> 

					</tbody>

				</table>
			<?php	}
			?>
		</div>
	</div>
	
</body>
</html>
