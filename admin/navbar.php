<nav class="navbar navbar-light fixed-top" >
	<div class="container-fluid">
		<a class="navbar-brand fw-bold text-white" href="#">
			<img src="../img/logo_transparent.png" width="50px" height="40px">QUIZ.com.vn
		</a>
		<div class="dropdown">
			<a class="btn btn-outline-light fw-bold dropdown-toggle" href="#" role="button" id="adlogin" data-bs-toggle="dropdown" aria-expanded="false"><?=$_SESSION['admin']['name']?></a>
			<ul class="dropdown-menu" aria-labelledby="adlogin">
				<li><a class="dropdown-item" id="adlogout" href="logout.php">Đăng xuất</a></li>
			</ul>
		</div>
	</div>
</nav>