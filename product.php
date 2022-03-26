<!DOCTYPE html>
<html>
<head>
	<title>PRODUCT</title>
	<link rel="stylesheet" href="css/deneiyi-product.css">
	<link rel="stylesheet" href="js/deneiyi.js">	
</head>
<body>
	<?php include "include/header.php" ?>

	<section class="product">
		<div class="container-fluid">
			<div class="row row-1 product-1">
				<div class="col-1 img-sample-2">
					<img src="img/underwear.png">
					<img src="img/underwear.png">
					<img src="img/underwear.png">
				</div>
				<div class="col-5 img-sample-main">
					<img src="img/underwear.png">
				</div>
				<div class="col-4">
					<div class="info-sample">
						<h3>BRA SAMPLE</h3>
						<h6>SKU: ABC123</h6>
						<h4>250.000 VNĐ</h4>
						<hr>
						<p>SIZE</p>
						<p>COLOR</p>
						<hr>
						<p>Số lượng</p>
						<div class="col-6 img-cart">
							<a href="#"><img src="img/cart.jpg"></a>
						</div>
					</div>		
				</div>
				<div class="col-2"></div>
			</div>

			<div class="detail">
				<div class="row row-2">
					<div class="col-12">
						<h3>MÔ TẢ CHI TIẾT</h3>
						<hr>
						<p>
						- Chất liệu Thun thoáng mát, thấm hút mồ hôi tốt kết hợp cùng sự mềm mại,nhẹ nhàng, nữ tính của Ren. <br>
						- Sắc đen chủ đạo điểm xuyết họa tiết hoa nhí xinh xắn. <br>
						- Thiết kế đơn giản nhưng tinh tế. <br>
						- Nhẹ nhàng ôm vòng 3 và tôn dáng người mặc.<br>
						- Dễ phối với nhiều loại trang phục mà không bị hằn viền quần lót.</p>
					</div>
				</div>

				<div class="row row-3">
					<div class="col-12">
						<h3>HƯỚNG DẪN CHỌN SIZE</h3>
						<hr>
						<img src="img/size-table.png">
					</div>
				</div>
			</div>
		</div>
	</section>
		
	<section class="related-product">
		<div class="container-fluid">
			<div class="row title-line">
				<div class="col-3 title-page">
						<h3>SẢN PHẨM LIÊN QUAN</h3>
				</div>
				<div class="col-9">
					<hr>
				</div>
			</div>

			<div class="row">
				<div class="col-3">
					<?php include "detail-product.php" ?>
				</div>
				<div class="col-3">
					<?php include "detail-product.php" ?>
				</div>
				<div class="col-3">
					<?php include "detail-product.php" ?>
				</div>
				<div class="col-3">
					<?php include "detail-product.php" ?>
				</div>
			</div>
		</div>		
	</section>
	<?php include "include/footer.php" ?>
</body>
</html>