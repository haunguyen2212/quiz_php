<?php
session_start();
if (!isset($_SESSION['user']) || $_SESSION['user']['status']!='finish') {
	header('location: index.php');
}
$questions = $_SESSION['questions'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chi tiết</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="quiz.css">
	<script type="text/javascript" src="../bootstrap/jquery-3.6.0.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="text-center"><h5 class="fs-2 text-danger fw-bold">CHI TIẾT BÀI THI</h5></div>
		<?php
		$n = (int)$questions['cnt'];
		for ($i=0; $i < $n; $i++) { 
			?>
			<form>
				<div class="row" style="margin: 0 50px 0 10px">
					<div class="col-12 fw-bold"><span class="text-danger">Câu <?= $i+1?>: </span>&nbsp;<?=$questions[$i]['name']?></div>			
					<div class="col-12">
						<label id="bg<?= $i+1?>A"><input type="radio" id="<?= $i+1?>A" value="A" >&nbsp;<?=$questions[$i]['optA']?></label>
					</div>
					<div class="col-12">
						<label id="bg<?= $i+1?>B"><input type="radio" id="<?= $i+1?>B" value="B">&nbsp;<?=$questions[$i]['optB']?></label>
					</div>
					<div class="col-12">
						<label id="bg<?= $i+1?>C"><input type="radio" id="<?= $i+1?>C" value="C">&nbsp;<?=$questions[$i]['optC']?></label>
					</div>
					<div class="col-12">
						<label id="bg<?= $i+1?>D"><input type="radio" id="<?= $i+1?>D" value="D">&nbsp;<?=$questions[$i]['optD']?></label>
					</div>
				</div>	
			</form>
		<?php
		}
		?>

		<script>
			<?php
			// check cac o duoc chon
			for ($i=1; $i <= $n; $i++) { 
				switch ($questions[$i-1]['choice']) {
				case 'A':
				case 'B':
				case 'C':
				case 'D':
				echo "$('#".$i.$questions[$i-1]['choice']."').prop('checked',true);";
				break;
				}
			?>
				$('#bg<?=$i.$questions[$i-1]['answer']?>').css('background-color','yellow');	
			<?php
			}
			
			?>
		</script>
		<div class="m-3"><a href="quiz.php"><i class="fas fa-undo"></i> Quay lại trang kết quả</a></div>
	</div>
</body>
</html>
