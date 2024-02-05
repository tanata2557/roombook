<?php
$sql="UPDATE books SET bkstatus = '$bkstatus'WHERE rmid = '$rmid' AND bkin = '$bkin' AND bkstatus = '1' ";
$result=$Connection->query($sql);
if($result==1){
	$msg="เสร็จสิ้น";
}
else{
	$msg="การดำเนินการผิดพลาด";
}
?>
<script>
alert("<?php echo $msg;?>");
</script>