<?php
session_start();
require_once('../connect.php');
if (isset($_POST['submit-edit'])) {
	$id = $_POST['id-edit'];
	$content = $_POST['noiDung'];
	$optA = $_POST['optA'];
	$optB = $_POST['optB'];
	$optC = $_POST['optC'];
	$optD = $_POST['optD'];
	$answer = $_POST['dapAn'];
	$sql = "UPDATE CauHoi SET NoiDung = '$content', OptionA = '$optA', OptionB = '$optB', OptionC = '$optC', OptionD = '$optD', DapAn = '$answer' WHERE MaCH = '$id'";
	$query = $conn->query($sql) or die('Có lỗi xảy ra');
	header('location: questions_management.php');
}
?>