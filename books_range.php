<!doctype html>
<?php
require_once('mysql/config.php');

if ($_SESSION == NULL){
	header("location:login.php");
	exit();
}


?>
<?php $nowdate=date("Y-m-d");?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/icons/bootstrap-icons.css">
	<link rel="stylesheet" href="admin/bg1adminindex.css">
	<style type="text/css">
	body {
    background-image: url( "images/654654564654.png");
		background-size: cover;
}
    </style>
</head>

<body>
	<?php include 'includes/navbar.php';?>
	<div class="d-flex justify-content-around mt-5 ">
	<form action="books_form.php" method="GET">
<!--		<label>เข้าพักวันที่</label>-->
		<input type="date"name="bkin"value="<?php echo $nowdate; ?>"required/>
		<label>ถึง</label>
		<input type="date"name="bkout"value="<?php echo $nowdate; ?>"required/><br/>
		<br/>
	    <button type="submit" class="btn btn-primary rounded-4">ตกลง</button>
		<a class="btn btn-outline-warning" href="books_list.php">ดูตารางการจอง</a>
	</form>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>