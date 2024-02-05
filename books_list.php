<!doctype html>


<?php
require'mysql/config.php';
require'books_config.php';
$stdate = (isset($_GET['stdate']))?$_GET['stdate']:date("Y-m-d");
$endate = (isset($_GET['endate']))?$_GET['endate']:date("Y-m-d");
if(isset($_GET['rmid'])){
	$rmid=$_GET['rmid'];
	$rmid=$_GET['rmid'];
	$bkin=$_GET['bkin'];
	$bkstatus=$_GET['bkstatus'];
	require'books_status.php';		
}
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/icons/bootstrap-icons.css">
	<style type="text/css">
	body {
    background-image: url("images/bglist.png");
	background-size: cover;
}
    </style>
</head>

<body>
	<?php include 'includes/navbar.php';?>
	<div class="d-flex justify-content-around mt-5"> 
	<form action="books_list.php"method="GET">
	<label>วันที่เข้ารับบริการ</label>
		<input type="date" name="stdate"value="<?php echo $stdate; ?>"required/>
		<label>ถึง</label>
		<input type="date" name="endate"value="<?php echo $endate; ?>"required/>
	    <button type="submit" class="btn btn-primary rounded-3">ค้นหา</button>
		<a href="books_list.php">วันนี้</a>
		<a class="btn btn-success rounded-5" href="books_range.php">ทำการจอง</a>
			</form><br/>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
	<table class="table tabel-striped mt-4">
  <tbody>
	  <thead>
    <tr align="center" class="bg-primary text-white">
      <td scope="col">จัดการ</td>
      <td scope="col">หมอ</td>
      <td scope="col">ประเภท</td>
	  <td scope="col">ผู้จอง</td>
	  <td scope="col">โทรศัพท์</td>
      <td scope="col">วันเข้า</td>
      <td scope="col">วันออก</td>
	  <td scope="col">จำนวนวัน</td>
<!--	  <td scope="col">ราคา</td>-->
	  <td scope="col">สถานะ</td>
    </tr>
	  </thead>
  </tbody>
	    <?php
		$sql="SELECT * FROM books "
	."LEFT JOIN rooms ON books.rmid = rooms.rmid "
	."LEFT JOIN roomtype ON rooms.rmtype = roomtype.rmtype "
	."WHERE books.bkin BETWEEN '$stdate'AND'$endate' AND books.bkstatus >0 "
	."ORDER BY books.bkin ASC, books.bkcust ASC, books.rmid ASC " ;
    $result=$Connection->query($sql);
		while($row=$result->fetch_array(MYSQLI_ASSOC)){
			$days = (int) date_diff(date_create($row['bkin']),date_create($row['bkout']))->format('%R%a');
			$sumprice=$days*(int)$row['rmprice'];
		?>
		<tr align="center">
      <td>
		  <?php if($row['bkstatus']==1){?>
			<a href="javascript:bookstatus('<?php echo $row['rmid']?>','<?php echo $row['bkin']?>','0')">ยกเลิก</a>
		    <a href="javascript:bookstatus('<?php echo $row['rmid']?>','<?php echo $row['bkin']?>','2')">เข้าพัก</a>
		  <?php
		 
		 ?>
		  

		 
		  <?php }?>
			</td>
     	<td><?php echo $row['rmid'];?></td>
		<td><?php echo $row['tpname'];?></td>
		<td><?php echo $row['bkcust'];?></td>
		<td><?php echo $row['bktel'];?></td>
		<td><?php echo date_format(date_create($row['bkin']),"d/m/Y");?></td>
		<td><?php echo date_format(date_create($row['bkout']),"d/m/Y");?></td>
		<td align="center"><?php echo $days;?> </td>
<!--		<td align="center"><?php echo number_format($sumprice,0); ?></td>-->
<!--		<td>ตามอาการ</td>-->
			<td><?php echo $bookstatus[$row['bkstatus']];?></td>
		
    </tr>
		<?php }?>
		</div>
			</div>
				</div>
					</div>
</table>
    <script>
	var vurl="books_list.php?stdate=<?php echo $stdate;?>&endate=<?php echo $endate;?> " ;
		function bookstatus(v1,v2,v3,){
			var v4 = vurl+="&rmid="+v1+"&bkin="+v2+"&bkstatus="+v3 ;
			window.location.replace(v4) ;
			
		}
	</script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>