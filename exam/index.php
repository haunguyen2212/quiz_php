<?php
session_start();
require_once('../connect.php');
if (isset($_SESSION['questions'])) {
	unset($_SESSION['questions']);
};
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="index.css">
	<script type="text/javascript" src="function.js"></script>
</head>
<body>	
	<nav class="navbar navbar-light">
		<div class="container-fluid">
			<a class="navbar-brand fw-bold text-white" href="#">
				<img src="../img/logo_transparent.png" width="50px" height="40px">QUIZ.com.vn
			</a>
			<?php
			if (isset($_SESSION['user'])) {
				echo '<div class="dropdown">';
				echo '<a class="btn btn-outline-light fw-bold dropdown-toggle" href="#" role="button" id="userlogin" data-bs-toggle="dropdown" aria-expanded="false">'.$_SESSION['user']['name'].'</a>';
				echo '<ul class="dropdown-menu" aria-labelledby="userlogin">';
				echo '<li><a class="dropdown-item" id="userlogout" href="logout.php">Đăng xuất</a></li>';
				echo '</ul>';
				echo '</div>';
			}    
			else {
				echo'<a href="" id="login" class="ml-1 btn btn-outline-light btn-sm float-sm-right fw-bold" data-bs-toggle="modal" data-bs-target="#modalLogin"><i class="far fa-user-circle"></i> LOGIN</a>';
			}
			?>
		</div>
	</nav>
	<div class="container-fluid">
		<div id="blog">
			<h1>TRẮC NGHIỆM ONLINE</h1>
			<p>ĐA DẠNG - THÔNG MINH - CHÍNH XÁC</p>
		</div>
		<div class="feature">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-3 relative">
						<div class="img"><img src="../img/feature1.jpg"></div>
						<h3>Đề thi học kỳ</h3>
						<p>Danh sách các bài thi thuộc các lớp học phần khác nhau với số lượng câu hỏi và thời gian làm bài xác định. Bạn cần nhập mật khẩu của bài thi để tiến hành làm bài</p>
						<?php
						if (isset($_SESSION['user'])) {
							echo '<a href="courses.php" class="btn btn-sm btn-success">Làm ngay</a>';
						}?>
					</div>
					<div class="col-12 col-lg-3 relative">
						<div class="img"><img src="../img/feature2.jpg"></div>
						<h3>Thông tin cá nhân</h3>
						<p>Xem thông tin cá nhân, các khóa học đã tham gia, điểm số, đổi mật khẩu và nhiều thông tin khác...</p>
						<?php
						if (isset($_SESSION['user'])) {
							echo '<button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalProfile">';
							echo 'Xem ngay';
							echo '</button>';
						}?>
					</div>
					<div class="col-12 col-lg-3 relative">
						<div class="img"><img src="../img/feature3.jpg"></div>
						<h3>Đề thi thử</h3>
						<p>Ngân hàng câu hỏi các môn học được trộn tạo đề theo cấu trúc phân loại giúp các em dễ dàng ôn tập đề thi học kỳ theo các chủ đề đã học.</p>
						<?php
						if (isset($_SESSION['user'])) {
							echo '<a href="" class="btn btn-sm btn-success">Làm ngay</a>';
						}?>
					</div>
				</div>
			</div>
		</div>
		<br>
		<hr>
		<?php include 'lession.php';?>
		<hr>
		<?php include 'help.php';?>
	</div>
	
	<?php 
	include 'footer.php';
	include 'modal.php'; 
	?>
	<script type="text/javascript" src="../bootstrap/bootstrap.js"></script>
	<script type="text/javascript" src="../bootstrap/jquery-3.6.0.min.js"></script>
</body>
</html>
