<?php
require_once('../connections/mysqli.php');

if ($_SESSION == NULL) {
  header("location:../login.php");
  exit();
}elseif ($_SESSION["user_level"] != "admin") {
  header("location:../index.php");
  exit();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/dashboard.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	  <link rel="stylesheet" href="bgindex.css">
    <title>ระบบหลังบ้าน</title>
  </head>
  <body>
    <?php include 'include/header.php'; ?>
    <div class="container-fluid">
      <div class="row">
        <?php include 'include/sidebarMenu.php'; ?>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        </main>
      </div>
    </div>
	  
	  <div class="container bg">
	  	<div class="menu">
			<div class="logo">
				<a href="<i class="fa-solid fa-house-medical"></i>"></a>
			</div>
			<ul>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
				<li><a href=""></a></li>
			</ul>
		</div>
	  </div>
	  
	  <div class="content">
	  	<div class="header">
		  <h3><i class="fa-solid fa-hospital fa-2x mb-3">Hospital</i></h3>
			<h1 class="text-black-50">กายภาพ</h1>
			<h1 class="text-black-50">บำบัด</h1>
			<p class= "text-black-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse repellendus </p>
		 </div>
		  <div class="grid-card">
		  	<div class="box bg1">
				<a href="../books_range.php"><h2>จอง</h2></a>
			</div>
			  <div class="box bg2">
			  	<a href="user.php"><h2>สมาชิก</h2></a>
			  </div>
			  <div class="box bg3">
			  	<a href="../books_list.php"><h2>ดูตารางการจอง</h2></a>
			  </div>
			  <div class="box bg4">
			  	<a href="../index.php"><h2>หน้าหลัก</h2></a>
			  </div>
		  </div>
	  </div>
	  
	  
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <?php mysqli_close($Connection); ?>
  </body>
</html>
