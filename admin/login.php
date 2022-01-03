<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="login.css">
	<script type="text/javascript" src="../bootstrap/bootstrap.js"></script>
	<script type="text/javascript" src="../bootstrap/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="function.js"></script>
</head>
<body>
	<div class="container-fluid login-form">
		<div class="row justify-content-center">
			<div class="col-3">
				<div id="login">
					<form action="login.php" method="post">
						<div class="mb-3 login-title">
							<h5 class="fw-bold"><i class="fas fa-school"></i> Đăng Nhập</h5>
						</div>
						<div class="login-content">
							<div class="mb-3">
								<input type="text" class="form-control" id="adName" name="adName" placeholder="Tài Khoản">
								<div id="txtAdName" class="text-white fw-bold"></div>
							</div>
							<div class="mb-3">
								<input type="password" class="form-control" id="adPass" name="adPass" maxlength="20" placeholder="Mật khẩu">
								<div id="txtAdPass" class="text-white fw-bold"></div>
							</div>
						</div>
						<div class="mb-3 login-footer">
							<button class="" type="button" id="ad-sm" name="ad-sm" onclick="checkLoginAd()">ĐĂNG NHẬP</button>
						</div>
					</form>
				</div>

			</div>
			
			<div class="col-12 row">
				<div class="col-4" style="margin: 0 auto">
				<?php
				session_start();
				require_once('../connect.php');
				if (isset($_POST['ad-sm'])) {
					$username = $_POST['adName'];
					$passwd = SHA1($_POST['adPass']);
					$sql = "SELECT * FROM GiaoVien WHERE MaGV = '$username' AND GV_MatKhau = '$passwd'";
					$query = $conn->query($sql) or die('Có lỗi xảy ra');
					if ($query->num_rows) {
						$row = $query->fetch_array();
						$_SESSION['admin'] = ['id' => $username, 'name' => $row['TenGV']];
						header('location: index.php');
						die();
					}
					else{
					
						echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
  						echo '<strong><i class="fas fa-exclamation-triangle"></i> Cảnh báo:</strong> Tài khoản hoặc mật khẩu không chính xác!';
  						echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
						echo '</div>';
					}
				}
				?>
				</div>
			</div>

		</div>
	</div>

</body>
</html>