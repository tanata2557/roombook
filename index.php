<?php
require_once('mysql/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/icons/bootstrap-icons.css">
	<link rel="stylesheet" href="slidedoc.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
</head>
<body class="default">
  <?php include 'includes/navbar.php';?>
	
<!-- การทำ SLIDER -->
	<section id="slider">
		<div class="carousel slide" data-bs-ride="carousel" id="myslider">
			<ol class="carousel-indicators">
				<button data-bs-target="#myslider" data-bs-slide-to="0" class="active"></button>
				<button data-bs-target="#myslider" data-bs-slide-to="1"></button>
				<button data-bs-target="#myslider" data-bs-slide-to="2"></button>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item carousel-image-1 active">
					<div class="container">
						<div class="container-caption d-none d-sm-block">
							<h1 class="display-3"></h1>
						</div>
					</div>
				</div>
				<div class="carousel-item carousel-image-2 ">
					<div class="container">
						<div class="container-caption d-none d-sm-block">
							<h1 class="display-3"></h1>
						</div>
					</div>
				</div>	
				<div class="carousel-item carousel-image-3 ">
					<div class="container">
						<div class="container-caption d-none d-sm-block">
							<h1 class="display-3"></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" data-bs-target="#myslider" data-bs-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</button>
			</div>
		</div>
	</section>

	<!-- การทำ service 
<section id="service" class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4 text-center mb-4">
				<i class="fa-solid fa-hospital fa-2x"></i>
				<h3>รักษาโรคเกี่ยวกับกระดูก</h3>
					<p>การรักษาโรคกระดูกและข้อจะรักษาตามอาการของโรคโดยเริ่มจากการใช้ยาแก้อักเสบ</p>
			</div>
			<div class="col-md-4 text-center mb-4">
				<h3>รักษาโรคเกี่ยวกับกล้ามเนื้อ</h3>
					<p>ข้อมูล</p>
			</div>
			<div class="col-md-4 text-center mb-4">
				<h3>รักษาโรคเกี่ยวกับการเคลื่อไหว</h3>
					<p>ข้อมูล</p>
			</div>
		</div>
	</div>

</section> -->



<!-- การทำ doc -->
<section id="gallary" class="p-5">
	<div class="container">
		<h1 class="text-center">ดูแลกระดูก และข้ออย่างไร? ให้ดีต่อใจ ในทุก Generation</h1>
		<p class="text-center">หากเปรียบร่างกายคือรถยนต์ กระดูกก็เปรียบเสมือนเครื่องยนต์ที่ขับเคลื่อนรถไปยังเป้าหมายที่เราต้องการ เมื่อเราใช้งานรถไประยะหนึ่ง สิ่งที่ควรทำอยู่เป็นประจำคือการตรวจเช็กสภาพรถ เพื่อตรวจสอบว่ามีชิ้นส่วนไหนของรถที่เกิดความเสียหายหรือหมดอายุการใช้งาน เพื่อทำการปรับเปลี่ยนและซ่อมแซมได้อย่างทันท่วงที

กระดูกของเราก็เช่นกัน การหมั่นดูแลรักษาและตรวจเช็กสภาพอยู่เสมอ โดยไม่จำเป็นต้องรอให้เข้าสู่วัยสูงอายุ เพื่อเช็กดูว่ากระดูกและข้อบริเวณส่วนไหนของร่างกายที่เกิดการผิดปกติ และในปัจจุบันมิใช่เพียงแค่วัยสูงอายุเท่านั้น วัยรุ่นหรือวัยหนุ่มสาวหลายๆท่าน ประสบพบเจอกับปัญหาในเรื่องของกระดูก ไม่ว่าจะเป็น อาการปวดหลังเรื้อรัง ออฟฟิศซินโดรม หรืออุบัติเหตุที่ส่งผลโดยตรงต่อกระดูก ซึ่งสาเหตุเหล่านั้นล้วนมาจากการใช้งานอย่างหนักและสะสมมาเป็นเวลาหลายปี การตรวจเช็กกระดูกจึงเป็นสิ่งสำคัญที่ไม่ควรมองข้าม</p>
		<!-- การทำ image -->	
		<div class="row mb-4">
			<div class="col-md-4">
					<img src="images/6156.png" class="img-fluid">
				</div>
			<div class="col-md-4">
					<img src="images/โรคกระดูกพรุนรักษาอย่างไร.png" class="img-fluid">
				</div>
			<div class="col-md-4">
					<img src="images/62565.png" class="img-fluid">
				</div>
			</div>
		<div class="row mb-4">
			<div class="col-md-4">
					<img src="images/652625.png" class="img-fluid">
				</div>
			<div class="col-md-4">
					<img src="images/6147.png" class="img-fluid">
				</div>
			<div class="col-md-4">
					<img src="images/6562.png" class="img-fluid">
				</div>
			</div>
		</div>
</section>

<!-- การทำ about -->
<section id="about" class="p-5">
	<div class="dark-overlay">
		<div class="row">
			<div class="col">
				<div class="container pt-3">
					<h1>ศูนย์กายภาพบำบัด</h1>
					<p>อำเภอตระการพืชผล จังหวัดอุบลราชธานี 34250</p>
                    <p>physicaltherapycenter@gmail.com</p>
                  <p>02-020-5332</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- การทำ about End -->

<!-- การทำ footer -->
<footer class="text-center p-4">
	<div class="container">
		<div class="row">
			<div class="col">
				<p>copyrighr &copy; THANAPHON POORI 2024</p>
			</div>
		</div>
	</div>

</footer>

<!-- การทำ modal -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">ติดต่องาน</h5>
				<button class="btn-close" data-bs-dismiss="modal"></button>
			</div>
		<div class="modal-body">
			<form>
				<div class="form-group">
					<label>อีเมล</label>
					<input type="email" placeholder="ป้อนอีเมลของคูณ" class="form-control">
				</div>
				<div class="form-group">
					<label>หัวข้อ</label>
					<input type="text" placeholder="เสนอหัวข้อ" class="form-control">
				</div>
				<div class="form-group">
					<label>รายละเอียด</label>
					<textarea id="" cols="30" rows="10" class="form-control"></textarea>
				</div>
			</form>
			</div>
		<div class="modal-footer">
			<button class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
			<button class="btn btn-success">ส่งข้อมูล</button>
			</div>
		</div>
	</div>
</div>

<!-- การทำ Image showcase -->
	<select class="showcase">
		<div class="container-fluid p-0">
			<div class="row g-0">
				<div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image:url("images/bandner1.jpg");"></div>
				<div class="col-lg-6 order-lg-1 my-auto showcase-text">
					<h2>Full Responsive Design</h2>
					<p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat recusandae numquam cumque fuga error, accusamus corrupti a, officiis perspiciatis quae.</p>
				</div>
			</div>
			<div class="row g-0">
				<div class="col-lg-6 text-white showcase-img" style="background-image:url("images/bandner2.jpg");"></div>
				<div class="col-lg-6 my-auto showcase-text">
					<h2>Updated For Boostrap</h2>
					<p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum ullam culpa, illo rerum in quod natus nobis, earum vero consectetur molestiae provident hic, autem? Rem.</p>
				</div>
			</div>
			<div class="row g-0">
				<div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image:url("images/bandner3.jpg");"></div>
				<div class="col-lg-6 order-lg-1 my-auto showcase-text">
					<h2>Easy to use &amp; Customize</h2>
					<p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aut veniam ratione molestias! Non harum, possimus doloremque libero autem. Ipsam qui autem nam hic a corporis quasi, adipisci facere voluptatibus?</p>
				</div>
			</div>
		</div>
	</select>



	
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <?php mysqli_close($Connection);?>
</body>
</html>
