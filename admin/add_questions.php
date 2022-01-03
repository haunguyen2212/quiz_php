<?php
session_start();
require_once('../connect.php');
if (isset($_POST['submit-add'])) {
	$id = $_POST['id-add'];
	$content = $_POST['noiDung'];
	$optA = $_POST['optA'];
	$optB = $_POST['optB'];
	$optC = $_POST['optC'];
	$optD = $_POST['optD'];
	$answer = $_POST['dapAn'];
	$sql = "INSERT INTO CauHoi(MaMon,NoiDung,OptionA,OptionB,OptionC,OptionD,DapAn) VALUES ('$id','$content','$optA','$optB','$optC','$optD','$answer')";
	$query = $conn->query($sql) or die('Có lỗi xảy ra');
	header('location: questions_management.php#'.$id.'');
}
?>