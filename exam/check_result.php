<?php
session_start();
require_once('../connect.php');
$questions = (isset($_SESSION['questions'])) ? $_SESSION['questions'] : [];
$n = count($questions)-1;
echo $n;
$count = 0;
for ($i=0; $i < $n; $i++) { 
	echo $questions[$i]['answer'] .'  '.$questions[$i]['choice'].'<br>';
	if ($questions[$i]['answer'] == $questions[$i]['choice']) {
		$count++;
	}
}
$_SESSION['user']['mark'] = 10/$n*$count;
$_SESSION['user']['status'] = 'finish';

$user = $_SESSION['user']['id'];
$course = $_SESSION['user']['course'];
$mark = round($_SESSION['user']['mark'],2);
$sql = "UPDATE KetQua SET TGNopBai = NOW(), Diem = $mark, TrangThai = 'T' WHERE MaHP = '$course' AND MaSV='$user'";
$query = $conn->query($sql) or die('Có lỗi xảy ra');
?>