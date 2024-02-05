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

	<!-- การทำ service -->
<section id="service" class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4 text-center mb-4">
		<!-- <i class="bi bi-plus-circle-fill"></i>-->
				<h3>รักษาโรคเกี่ยวกับกระดูก</h3>
					<p>การรักษาโรคกระดูกและข้อ จะรักษาตามอาการของโรคโดยเริ่มจากการใช้ยาแก้อักเสบปรับพฤติกรรมการใช้ชีวิตประจำวันแต่หากการรักษาดังกล่าวไม่เป็นผล ยังคงมีอาการปวดเรื้อรังอยู่ ทางแพทย์ก็อาจจะแนะนำการรักษาโดยการผ่าตัด</p>
			</div>
			<div class="col-md-4 text-center mb-4">
				<h3>รักษาโรคเกี่ยวกับกล้ามเนื้อ</h3>
					<p>อาการปวดกล้ามเนื้อ (Muscle Pain or Myalgia) อาจมีสาเหตุมาจากอาการบาดเจ็บ การติดเชื้อโรคต่าง ๆ หรือปัญหาด้านสุขภาพ ซึ่งอาการปวดกล้ามเนื้ออาจเป็นอาการชั่วคราว อาการเรื้อรัง ปวดเฉพาะที่หรือทั่วร่างกาย</p>
			</div>
			<div class="col-md-4 text-center mb-4">
				<h3>รักษาโรคเกี่ยวกับการเคลื่อนไหว</h3>
					<p>อาการที่มักจะพบบ่อยของโรคนี้ ได้แก่ อาการสั่น กระตุก ร่างกายบิดเกร็ง หรือมีท่าทางการเดินที่ผิดธรรมชาติ เนื่องจากการทำงานของสมองและระบบประสาทบกพร่อง</p>
			</div>
		</div>
	</div>

</section>

<!-- การทำ Image showcase -->
	<section class="showcase">
		<div class="container-fluid p-0">
			<div class="row g-0">
				<div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('images/28888-.png');"></div>
				<div class="col-lg-6 order-lg-1 my-auto showcase-text">
					<h2>โรคกระดูกและข้อ</h2>
					<p class="lead mb-0">เป็นโรคที่เกิดจากความผิดปกติของระบบกระดูกและไขข้อ พบมากในกลุ่มคนที่มีน้ำหนักตัวมาก กลุ่มผู้สูงอายุ กลุ่มนักกีฬาหรือผู้ที่ได้รับการบาดเจ็บจากการเล่นกีฬา ซึ่งโรคที่เกี่ยวกับกระดูกและข้อ</p>
				</div>
			</div>
			<div class="row g-0">
				<div class="col-lg-6 text-white showcase-img" style="background-image: url('images/012.png');"></div>
				<div class="col-lg-6 my-auto showcase-text">
					<h2>โรคกระดูกต้นคอเสื่อม</h2>
					<p class="lead mb-0">โรคกระดูกต้นคอเสื่อม เกิดจากการ “ก้มหน้า” (จนหูต่ำลงมาเกือบแนวเดียวกับไหล่) บ่อย ๆ ซ้ำ ๆ นาน ๆ จนทำให้กล้ามเนื้อ เส้นประสาท และเส้นเอ็นตึง เกร็ง เครียด อาการที่พบบ่อยอาจเป็นเพียงแค่อาการปวดต้นคอนำมาก่อน ลักษณะคล้ายกับการนอนตกหมอน หรือหากมีการกดทับรากประสาทอาจมีอาการปวดชาหรืออ่อนแรงของกล้ามเนื้อแขนร่วมด้วยจนต้องมาพบแพทย์ ต่างกับการกดทับที่เกิดขึ้นกับไขสันหลังผู้ป่วย มักจะไม่มีอาการปวดร่วมด้วย แต่จะพบว่ามีการเคลื่อนไหวผิดปกติ เช่น เดินลำบาก ทรงตัวไม่มั่นคง ล้มบ่อย เดินช้าลง แขนขาสั่นกระตุก</p>
				</div>
			</div>
			<div class="row g-0">
				<div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('images/013.png');"></div>
				<div class="col-lg-6 order-lg-1 my-auto showcase-text">
					<h2>โรคกล้ามเนื้ออ่อนแรง</h2>
					<p class="lead mb-0">อาการพูดไม่ชัดเสียงขึ้นจมูก เคี้ยวอาหาร กลืนอาหารลำบาก อาการอ่อนแรงของกล้ามเนื้อแขนขา เช่น เดินขึ้นบันได หรือยกแขนสระผมลำบาก อาการอ่อนแรงของกล้ามเนื้อหายใจ เช่น อาการเหนื่อย</p>
				</div>
			</div>
		</div>
	</section>

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

<!-- การทำ Testimonials -->
<section class="testimonials text-center bg-light">
	<div class="container">
		<h2 class="mb-5">ทีมแพทย์ของเรา</h2>
		
		<div class="row">
			<div class="col-lg-4">
				<div class="testimonials-item mx-auto mb-5 mb-lg-0">
					<img src="images/1.png" class="img-fluid rounded-circle mb-3" alt="">
					<h5>พญ.วาริสรา สิริกูล</h5>
					<p class="font-weight-light mb-0">ศัลยแพทย์ชำนาญการด้านเท้าและข้อเท้า</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="testimonials-item mx-auto mb-5 mb-lg-0">
					<img src="images/2.png" class="img-fluid rounded-circle mb-3" alt="">
					<h5>นพ.ศุภกฤต ภูเยี่ยมจิตร</h5>
					<p class="font-weight-light mb-0">ศัลยแพทย์ชำนาญการด้านกระดูกสันหลัง</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="testimonials-item mx-auto mb-5 mb-lg-0">
					<img src="images/3.png" class="img-fluid rounded-circle mb-3" alt="">
					<h5>พญ.สุภาวิณี ก้อนคำ</h5>
					<p class="font-weight-light mb-0">แพทย์ชำนาญการด้านเวชศาสตร์ฟื้นฟู</p>
				</div>
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

	
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <?php mysqli_close($Connection);?>
</body>
</html>
