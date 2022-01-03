<?php
session_start();
if (!isset($_SESSION['admin'])) {
	header('location: login.php');
	die();
}
if (!isset($_GET['id']) || !isset($_GET['course'])) {
	header('location: score_management.php');
	die();
}
$id = $_GET['id'];
$course = $_GET['course'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Xóa kết quả</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="index_admin.css">
</head>
<body>
	<div class="card mt-3" style="width: 50%;margin: 0 auto">
		<h5 class="card-header bg-primary text-white"><i class="fas fa-exclamation-triangle"></i> Cảnh báo</h5>
		<div class="card-body">
			<p class="card-text">Bạn có chắc muốn hủy kết quả bài thi học phần <strong><?= $course ?></strong> của sinh viên <strong><?= $id ?></strong> không?</p>
			<a class="btn btn-sm btn-danger float-end m-1" href="score_management.php">Không</a>
			<a class="btn btn-sm btn-success float-end m-1" href="delete_result.php?id=<?= $id ?>&course=<?= $course ?>">Có</a>
		</div>
	</div>
</body>
</html>