<?php
session_start();
require_once('../connect.php');
if (!isset($_SESSION['admin'])) {
	header('location: login.php');
	die();
}
if (!isset($_GET['id'])) {
	header('location: questions_management.php');
	die();
}
$id = $_GET['id'];
$sql = "SELECT NoiDung FROM CauHoi WHERE MaCH = '$id'";
$query = $conn->query($sql) or die('Có lỗi xảy ra');
$row = $query->fetch_array();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Xóa câu hỏi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="index_admin.css">
</head>
<body>
	<div class="card mt-3" style="width: 50%;margin: 0 auto">
		<h5 class="card-header bg-primary text-white"><i class="fas fa-exclamation-triangle"></i> Cảnh báo</h5>
		<div class="card-body">
			<p class="card-text">Bạn có chắc muốn xóa câu hỏi &ldquo;<strong><?= $row['NoiDung'] ?></strong>&rdquo; không?</p>
			<a class="btn btn-sm btn-danger float-end m-1" href="questions_management.php">Không</a>
			<a class="btn btn-sm btn-success float-end m-1" href="delete_questions.php?id=<?= $id ?>">Có</a>
		</div>
	</div>
</body>
</html>