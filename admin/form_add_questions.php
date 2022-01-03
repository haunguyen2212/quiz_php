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
$sql = "SELECT MaMon, TenMon FROM Mon WHERE MaMon = '$id'";
$query = $conn->query($sql) or die('Có lỗi xảy ra');
$row = $query->fetch_array();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thêm câu hỏi</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="index_admin.css">
</head>
<body>
	<div class="card mt-3" style="width: 50%;margin: 0 auto">
		<h5 class="card-header bg-primary text-white"><i class="fas fa-list-ul"></i> Thêm Mới Câu Hỏi</h5>
		<div class="card-body">
			<form action="add_questions.php" method="post">
				<div class="row">
					<div class="col-12">
						<input type="hidden" class="form-control" name="id-add" value="<?=$row['MaMon']?>">
					</div>
					<div class="col-4 mb-2">
						<label for="maMH" class="form-label fw-bold">Mã Môn Học:</label>
						<input class="form-control" id="maMH" type="text" placeholder="<?=$row['MaMon']?>" disabled>
					</div>
					<div class=" col-8 mb-2">
						<label for="tenMH" class="form-label fw-bold">Tên Môn Học:</label>
						<input class="form-control" id="tenMH" type="text" placeholder="<?=$row['TenMon']?>" disabled>
					</div>
					<div class="col-12 mb-2">
						<label for="noiDung" class="form-label fw-bold">Nội Dung Câu Hỏi:</label>
						<textarea class="form-control" id="noiDung" name="noiDung" rows="3"></textarea>
					</div>
					<div class="col-6 mb-2">
						<label for="optA" class="form-label fw-bold">Đáp án A:</label>
						<textarea class="form-control" id="optA" name="optA" rows="2"></textarea>
					</div>
					<div class="col-6 mb-2">
						<label for="optB" class="form-label fw-bold">Đáp án B:</label>
						<textarea class="form-control" id="optB" name="optB" rows="2"></textarea>
					</div>
					<div class="col-6 mb-2">
						<label for="optC" class="form-label fw-bold">Đáp án C:</label>
						<textarea class="form-control" id="optC" name="optC" rows="2"></textarea>
					</div>
					<div class="col-6 mb-2">
						<label for="optD" class="form-label fw-bold">Đáp án D:</label>
						<textarea class="form-control" id="optD" name="optD" rows="2"></textarea>
					</div>
					<div class="col-12 mt-2">
						<label for="optD" class="form-label fw-bold">Đáp án đúng:</label>
					</div>
					<div class="col-3">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="dapAn" id="dapAnA" value="A" checked>
							<label class="form-check-label" for="dapAnA">
								Đáp án A
							</label>
						</div>
					</div>
					<div class="col-3">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="dapAn" id="dapAnB" value="B">
							<label class="form-check-label" for="dapAnB">
								Đáp án B
							</label>
						</div>
					</div>
					<div class="col-3">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="dapAn" id="dapAnC" value="C">
							<label class="form-check-label" for="dapAnC">
								Đáp án C
							</label>
						</div>
					</div>
					<div class="col-3">
						<div class="form-check">
							<input class="form-check-input" type="radio" name="dapAn" id="dapAnD" value="D">
							<label class="form-check-label" for="dapAnD">
								Đáp án D
							</label>
						</div>
					</div>
					<div class="col-12">
						<hr>
						<button type="submit" name="submit-add" class="btn btn-sm btn-primary float-end ms-1">Thêm mới</button>
						<a class="btn btn-sm btn-danger float-end ms-1" href="questions_management.php">Hủy</a>
					</div>
				</div>
				
			</form>
			
		</div>
	</div>
</body>
</html>