
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/icons/bootstrap-icons.css">
<?php
$sql="SELECT * FROM books "
	."LEFT JOIN rooms ON books.rmid = rooms.rmid "
	."LEFT JOIN roomtype ON rooms.rmtype = roomtype.rmtype "
	."WHERE books.bkin = '$bkin' AND books.bktel = '$bktel' AND books.bkstatus = '1' ";
$result=$Connection->query($sql);
?>
<body>
<div class="contriner">
	<div class="row">
		<div class="col-md-12 mb-5">
	<table class="table table-striped table-hover">
    <thead>
	  <tr class="bg-primary text-white">
      <td scope="col">ยกเลิก</td>
      <td scope="col">เลขที่ห้องพัก</td>
      <td scope="col">ประภท</td>
      <td scope="col">เข้าพัก</td>
      <td scope="col">ออก</td>
      <td scope="col">ราคา/คืน</td>
    </tr>
	  </thead>
  <tbody>
		<?php
		while($row=$result->fetch_array(MYSQLI_ASSOC)){
			
			?>
		<tr>
			<td><a href="javascript:bookcancel('<?php echo $row['rmid']?>');">ยกเลิก</a> </td>
			<td><?php echo $row['rmid']?></td>
			<td><?php echo $row['tpname']?></td>
			<td><?php echo date_format(date_create($row['bkin']),"d/m/Y");?></td>
			<td><?php echo date_format(date_create($row['bkout']),"d/m/Y");?></td>
			<td align="right"><?php echo number_format($row['rmprice'],0); ?></td>
			
		</tr>
        <?php }?>
 </tbody>
</table>
	</div>
		</div>
			</div>
	</body>
<script>
function bookcancel(v1){
	window.location.href="books_form.php?bkin=<?php echo $bkin;?>&bkout=<?php echo $bkout;?>&bkcust<?php echo $bkcust;?>&bktel<?php echo $bktel;?>&rmid=" + v1;
}
</script>
<script src="assets/js/bootstrap.bundle.min.js"></script>