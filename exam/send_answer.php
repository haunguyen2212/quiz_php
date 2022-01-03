<?php
session_start();
require_once('../connect.php');
if (isset($_POST['id'])) {
	$id = $_POST['id'];
	$choice = $_POST['choice'];
	$_SESSION['questions'][$id-1]['choice'] = $choice;
}