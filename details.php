<!DOCTYPE html>
<html lang="en">
<?php
include("partials/head.php");
?>

<body class="animsition">
	<?php
	include("partials/header.php");
	include("partials/cart.php");
	?>
	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<?php
				include_once("partials/conexion.php");
				$id = $_GET["details_id"];
				$sql_leer = "SELECT * FROM products where id='$id'";
				$gsent = $pdo->prepare($sql_leer);
				$gsent->execute();
				$resultado = $gsent->fetchAll();
				?>
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="<?php foreach ($resultado as $dato) :  echo $dato["picture"];
																		endforeach ?>">
									<div class="wrap-pic-w pos-relative">
										<img src="<?php foreach ($resultado as $dato) :  echo $dato["picture"];
													endforeach ?>" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="<?php foreach ($resultado as $dato) :  echo $dato["picture"];
																															endforeach ?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<?php foreach ($resultado as $dato) :  echo $dato["name"];
							endforeach ?>
						</h4>

						<span class="mtext-106 cl2">
							$<?php foreach ($resultado as $dato) :  echo $dato["price"];
								endforeach ?>
						</span>

						<p class="stext-102 cl3 p-t-23">
							<?php foreach ($resultado as $dato) :  echo $dato["description"];
							endforeach ?>
						</p>

						<!--  -->
						<div class="p-t-33">

							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
									<div class="wrap-num-product flex-w m-r-20 m-tb-10">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-minus"></i>
										</div>

										<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

										<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-plus"></i>
										</div>
									</div>
																																														
									<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04" 
											name="addtocart" 
											onclick="location.href='carthandler.php?cart_id=<?php foreach ($resultado as $dato) :  echo $dato['id']; ?> &cart_name=<?php echo $dato['name']; ?>&cart_price=<?php echo $dato['price']; endforeach?>'">
										Add to cart
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- - -->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">
									<?php foreach ($resultado as $dato) :  echo $dato["description"];
									endforeach ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			<span class="stext-107 cl6 p-lr-25">
				CATEGORY:
				<?php
				foreach ($resultado as $dato) :
					$cat = $dato['category_id'];
				endforeach;
				$sql_leer = "SELECT * FROM categories where id='$cat'";
				$gsent = $pdo->prepare($sql_leer);
				$gsent->execute();
				$resultado1 = $gsent->fetchAll();
				foreach ($resultado1 as $dato1) :
					echo $dato1['name'];
				endforeach ?>
			</span>
		</div>
	</section>
	<?php
	include("partials/footer.php")
	?>
</body>

</html>