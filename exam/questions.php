<?php
session_start();
require_once('../connect.php');
if (!isset($_SESSION['user']) || !isset($_GET['id'])) {
	header('location: index.php');
	die();
}
$_SESSION['user']['course'] = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Làm bài thi</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<div class="card mt-3" style="width: 50%;margin: 0 auto">
		<h5 class="card-header bg-primary text-white"><i class="fas fa-unlock-alt"></i> Nhập mật khẩu đề thi</h5>
		<div class="card-body">
			<form action="questions.php?id=<?=$_GET['id']?>" method="post">
				<div class="mb-3">	
					<input type="password" class="form-control" name="pwd">
					<div id="txtPwd" class="text-danger"></div>
				</div>
				<button type="submit" class="btn btn-sm btn-danger ms-2 float-end" name="smPass">OK</button>
				<a class="btn btn-sm btn-success float-end" href="courses.php">Quay lại</a>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="../bootstrap/jquery-3.6.0.min.js"></script>
</body>
</html>
<?php
if (isset($_POST['smPass'])) {
	$id = $_GET['id'];
	$password = $_POST['pwd'];
	$sql_pass = "SELECT HP_MatKhau FROM HocPhan WHERE MaHP = '$id'";
	$query_pass = $conn->query($sql_pass);
	$check = $query_pass->fetch_array();
	if ($password == $check['HP_MatKhau']) {
		$sql_info = "SELECT * FROM HocPhan WHERE MaHP = '$id'";
		$query_info = $conn->query($sql_info) or die('Có lỗi xảy ra');
		$info = $query_info->fetch_array();
		$MaMon = $info['MaMon'];
		$sl = $info['TongSoCau'];

		$sql ="SELECT * FROM CauHoi WHERE MaMon='$MaMon' ORDER BY RAND() LIMIT $sl";
		$query = $conn->query($sql) or die('Có lỗi xảy ra');
		$index = 1;
		while ($row = $query->fetch_assoc()){
			$qs[] = [
				'id' => $index,
				'name' => $row['NoiDung'],
				'optA' => $row['OptionA'],
				'optB' => $row['OptionB'],
				'optC' => $row['OptionC'],
				'optD' => $row['OptionD'],
				'answer' => $row['DapAn'],
				'choice' => $index
			];
			$index++;
		}
		$_SESSION['questions'] = $qs;
		$_SESSION['questions']['cnt'] = $sl;
		$_SESSION['user']['status'] = "start";
		$_SESSION['user']['mark'] = -1;
		// Luu thong tin vao CSDL
		$user = $_SESSION['user']['id'];
		$num_minute = $info['TGLamBai'];
		$sql ="INSERT INTO ketqua(MaHP,MaSV,TGBatDau,TGNopBai) VALUES('$id','$user',NOW(),DATE_ADD(NOW(),INTERVAL $num_minute MINUTE))";
		$query = $conn->query($sql) or die('Có lỗi xảy ra');
		header('location: quiz.php');
	}
	else{
		echo "<script>$('#txtPwd').html('Mật khẩu không chính xác!');</script>";
	}	
}
?>


