<?php
session_start();
require_once('../connect.php');
if (!isset($_SESSION['user'])) {
	header('location: index.php');
	die();
}
// Thong tin user
$user = $_SESSION['user'];
//var_dump($user);
// Thong tin cau hoi
$questions = (isset($_SESSION['questions'])) ? $_SESSION['questions'] : [];
//var_dump($questions);
// So cau hoi
$total = (int)$questions['cnt'];
// Phan trang
$question_per_page = 5;
$cur_page = !empty($_GET['page']) ? $_GET['page'] : 1;
$offset = ($cur_page - 1) * $question_per_page;
$total_page = ceil($total / $question_per_page);
// Kiem tra so cau hoi va so trang
$tmp = floor($total / $question_per_page);
if ($cur_page == $tmp+1) {
	$question_last_page = $total % $question_per_page;
	$sub = array_slice($questions,$offset,$question_last_page);
}
else{
	$sub = array_slice($questions,$offset,$question_per_page);
}
// Lay thong tin bai thi
$id = $user['id'];
$course = $user['course'];
$sql_info = "SELECT a.MaHP, TenHP, TGNopBai FROM HocPhan a INNER JOIN KetQua b ON a.MaHP=b.MaHP WHERE a.MaHP = '$course' AND MaSV = '$id'";
$query_info = $conn->query($sql_info) or die('Có lỗi xảy ra');
$info = $query_info->fetch_array();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trắc nghiệm</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="quiz.css">
	<script type="text/javascript" src="../bootstrap/bootstrap.js"></script>
	<script type="text/javascript" src="../bootstrap/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="function.js"></script>
</head>
<body>
	<div class="container-fluid mt-2">
		<div class="row">
			<div class="col-12 col-lg-2">
				<div class="card mb-3">
					<div class="card-header bg-primary text-white fw-bold text-center"><?=$user['id'].' - '. $user['name']?></div>
					<div class="card-text">
						<div id="tg">
							<div id="time-header">THỜI GIAN LÀM BÀI</div>
							<div id="count-down" class="fw-bold text-danger"></div>
							<div class="container-fluid" id="list-answer">
								<?php
									for ($i=1; $i <= $total; $i++) {
										echo '<div id="ques-'.$i.'" class="btn btn-sm btn-answer">'.$i.'</div>';
											if ($questions[$i-1]['choice'] != $i) {
												echo "<script>$('#ques-".$i."').css('background-color','#BBBBBB')</script>";
											}
									}
								?>
							</div>
						</div>
						<?php
						if ($user['status']=="start") {
							date_default_timezone_set('Asia/Ho_Chi_Minh');
							$date = date('Y-m-d H:i:s');
							$timeOut = strtotime($info['TGNopBai']) - strtotime($date);
							echo '<script type="text/javascript">countDown('.$timeOut.');</script>';
							echo '<div class="d-flex justify-content-center">';
							echo '<a class="btn btn-sm btn-success text-white" id="finish" onclick="checkResult()">Nộp bài</a>';
							echo '</div>';
						}
						else{
							echo '<script type="text/javascript">$("#count-down").html("00:00:00");</script>';
							echo '<div class="d-flex justify-content-center">';
							echo '<button type="button" class="btn btn-sm btn-danger" id="result" data-bs-toggle="modal" data-bs-target="#modalResult">Xem kết quả</button>';
							echo '</div>';
						}
						?>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-10">
				<div class="card mb-3">
					<div class="card-header bg-primary text-white fw-bold">Bài Thi Trắc Nghiệm Trực Tuyến - Học Phần: <?= $info['MaHP'].' '.$info['TenHP']?></div>
					<div class="card-text">

						<div id="content">
							<?php 
							foreach ($sub as $key => $value):
								echo '<form id="form-sm-'.$value['id'].'">'; 
								echo '<div class="row"  style="margin: 0 50px 0 10px">';
								echo '<div class="col-12 fw-bold"><span class="text-danger">Câu '.$value['id'].': </span>&nbsp;'.$value['name'].'</div>';
								
								echo '<div class="col-12">';
								echo '<label><input type="radio" id="'.$value['id'].'A" name="Opt'.$value['id'].'" value="A" >&nbsp;'.$value['optA'].'</label>';
								echo '</div>';
								echo '<div class="col-12">';
								echo '<label><input type="radio" id="'.$value['id'].'B" name="Opt'.$value['id'].'" value="B">&nbsp;'.$value['optB'].'</label>';
								echo '</div>';
								echo '<div class="col-12">';
								echo '<label><input type="radio" id="'.$value['id'].'C" name="Opt'.$value['id'].'" value="C">&nbsp;'.$value['optC'].'</label>';
								echo '</div>';
								echo '<div class="col-12">';
								echo '<label><input type="radio" id="'.$value['id'].'D" name="Opt'.$value['id'].'" value="D">&nbsp;'.$value['optD'].'</label>';
								echo '</div>';
								echo '</div>';	
								echo '</form>';
								if ($user['status']=="start") {
								?>
								<script>
									$('#form-sm-<?=$value['id']?>').change(function(){
										saveAnswer(<?=$value['id']?>);
									})
								</script>

							<?php }
							endforeach; 
							?>
						</div>

						<div class="row">
							<div class="col-12 d-flex justify-content-center">
								<?php
								for ($i=1; $i <= $total_page; $i++) { 
									if ($i != $cur_page) {		
										echo '<a href="?page='.$i.'" class="btn btn-sm btn-light border btn-page" id=page'.$i.'>'.$i.'</a>';
									}
									else{
										echo '<strong class="btn btn-sm btn-secondary btn-page">'.$i.'</strong>';
									}
								}
								?>
							</div>				
						</div>			
					</div>
				</div>
				<div>
					<?php
					if ($user['status'] == 'finish') {
						echo '<a href="index.php"><i class="fas fa-home"></i> Về trang chủ</a>';
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<?php include 'modal_result.php'?>;
	<script>
		<?php
	// check cac o duoc chon
		for ($i=1; $i <= $total; $i++) { 
			switch ($_SESSION['questions'][$i-1]['choice']) {
				case 'A':
				case 'B':
				case 'C':
				case 'D':
				echo "$('#".$i.$_SESSION['questions'][$i-1]['choice']."').prop('checked',true);";
				break;
			}
		}	
		?>
	</script>
</body>
</html>
