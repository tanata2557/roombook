<!doctype html>
<?php
require'mysql/config.php';
require'books_config.php';
$bkin=(isset($_GET['bkin']))?$_GET['bkin']:date("Y-m-d");
$bkout=(isset($_GET['bkout']))?$_GET['bkout']:date("Y-m-d");
$bkcust=(isset($_GET['bkcust']))?$_GET['bkcust']:"";
$bktel=(isset($_GET['bktel']))?$_GET['bktel']:"";
$q=(int)(isset($_GET['q']))?$_GET['q']:0;

$days = (int)date_diff(date_create($bkin),date_create($bkout))->format('%R%a');
if($days<1){
	echo "<script>window.location.replace('books_range.php');</script>";
	exit();	
}
if(isset($_GET['rmid'])){
	$rmid=$_GET['rmid'];
	$bkstatus=0;
	require'books_status.php';	 
}
if($q>0){
	$kw="AND roomtype.rmtype='$q' ";
}else{
	$kw="";
	
}

?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/icons/bootstrap-icons.css">
  <link rel="stylesheet" href="style1.css">
  <style type="text/css">
  body {
    background-image: url(images/bg%20rang1.png);
	background-size: cover;
	
}
  </style>
</head>

<body>
	<?php include 'includes/navbar.php';?>
	<div class="mt-5"> 
	<form class="form-horizontal" action="books_form.php" method="GET"> 
<!--	<label>เข้าพักวันที่</label>-->
		<input type="date" name="bkin"value="<?php echo $bkin; ?>"readonly/>
		<label>ถึง</label>
		<input type="date" name="bkout"value="<?php echo $bkout; ?>"readonly/>
		<input type="hidden" name="bkcust"value="<?php echo $bkcust;?>"/>
		<input type="hidden" name="bktel"value="<?php echo $bktel;?>"/>
		<select name="q" id="q">
		 <option value="0">ทั้งหมด</option>
			
			<?php
			$sql="SELECT * FROM roomtype ORDER BY rmtype ASC";
			$result=$Connection->query($sql);
			while($row=$result->fetch_array(MYSQLI_ASSOC)){
				
			?>
			<option value="<?php echo $row['rmtype'];?>"><?php echo $row['tpname'];?></option>
			<?php }?>
		</select>
		<button class="btn btn-secondary" type="submit">ค้นหา</button>
	</form><br/>
	</div>
	<form action="books_insert.php" method="POST">
	    <input type="hidden" name="bkin"value="<?php echo $bkin;?>"/>
		<input type="hidden" name="bkout"value="<?php echo $bkout;?>"/>
		
		
		
		<div align="center">
		<label class="col-sm-2 control-label">ผู้จอง</label> 
		<div class="col-sm-3">
		<input type="text" class="form-control" name="bkcust"value="<?php echo $bkcust;?>" placeholder="ผู้จอง"requird/><br/>
		</div>
		<label  class="col-sm-2 control-label">กรอกเบอร์โทร</label>
			<div class="col-sm-3">
		<input type="text" class="form-control" name="bktel"value="<?php echo $bktel;?>" placeholder="กรอกเบอร์โทร"requird/><br/>
				</div>
			</div>
		
		
		
		
		
		
		
		
		<label>เลือกรับบริการ</label>
		<div align="center" >
			<div class="col-sm-3">
		<select name="rmid" class="form-select" id="inputGroupSelect01" required>
			<?php
			$sql="SELECT * FROM rooms LEFT JOIN roomtype ON rooms.rmtype  = roomtype.rmtype "
				."WHERE rmid NOT IN (SELECT rmid FROM books WHERE bkstatus >0 "
				."AND ((bkin >= '$bkin' AND bkin < '$bkout') OR (bkin < '$bkin' AND bkout > '$bkin'))) "
				.$kw;
			$result=$Connection->query($sql);
			while($row=$result->fetch_array(MYSQLI_ASSOC)){
			?>
			<option selected value="<?php echo $row['rmid'];?>">
				<?php echo $row['rmid'];?>&nbsp;				
				<?php echo $row['tpname'];?>&nbsp;
				<?php echo number_format($row['rmprice'],0);?>				
			</option>
			<?php }?>
		</select><br/>
			</div>
			</div>
		
		
	
		
		
		
		
		

		
		
		
		
		
		<button class="btn btn-success" type="submit">บันทึก</button>
		<a href="books_list.php" class="btn btn-outline-warning">ดูสถานะการจอง</a>
	</form>
<!--<?php require'books_room.php';?> -->
	
	<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
	<script>
	document.getElementById('q').value="<?php echo $q;?>";
	</script>
</html>