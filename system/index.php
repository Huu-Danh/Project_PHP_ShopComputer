<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Shop HD</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="/public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="/public/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="public/css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="/public/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="/public/css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->
	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

	<!-- //web fonts -->
</head>

<body>

	<?php include("../inc/header.php"); ?>
	<?php
		include_once("../system/libs/Main.php");
		$main = new Main();
		echo '<pre></pre>';
		$main->chietsanpham(1,'dienthoai');
		$url = $_GET["url"];
		print_r($url);
		

	?>
	<!-- banner -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item item1 active">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Get flat
								<span>10%</span> Cashback
							</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">The
								<span>Big</span>
								Sale
							</h3>
							<a class="button2" href="product.html">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item2">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>advanced
								<span>Wireless</span> earbuds
							</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Best
								<span>Headphone</span>
							</h3>
							<a class="button2" href="product.html">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item3">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Get flat
								<span>10%</span> Cashback
							</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">New
								<span>Standard</span>
							</h3>
							<a class="button2" href="product.html">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item item4">
				<div class="container">
					<div class="w3l-space-banner">
						<div class="carousel-caption p-lg-5 p-sm-4 p-3">
							<p>Get Now
								<span>40%</span> Discount
							</p>
							<h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Today
								<span>Discount</span>
							</h3>
							<a class="button2" href="product.html">Shop Now </a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- //banner -->

	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>S</span>ản
				<span>P</span>hẩm
				<span>M</span>ới
			</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">Laptop dell</h3>
							<div class="row">
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="/public/img/si1.jpg" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Xem chi tiết</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="single.html">Laptop Dell Inspiron 15 3530</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">11.990.000₫</span>
												<del>16.890.000₫</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="Samsung Galaxy J7" />
														<input type="hidden" name="amount" value="200.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Thêm vào giỏ" class="button btn" />
													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="/public/img/si1.jpg" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Xem chi tiết</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="single.html">Laptop Dell Inspiron 15 3530</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">11.990.000₫</span>
												<del>16.890.000₫</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="OPPO A37f" />
														<input type="hidden" name="amount" value="230.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Thêm vào giỏ" class="button btn" />
													</fieldset>
												</form>
											</div>

										</div>
									</div>
								</div>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="/public/img/si1.jpg" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Xem chi tiết</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="single.html">Laptop Dell Inspiron 15 3530</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">11.990.000₫</span>
												<del>16.890.000₫</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="Apple iPhone X" />
														<input type="hidden" name="amount" value="280.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Thêm giỏ hàng" class="button btn" />
													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- //first section -->
						<!-- second section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">Tv & Audio</h3>
							<div class="row">
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="/public/img/m4.jpg" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="single.html">Sony 80 cm (32 inches)</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">$320.00</span>
												<del>$340.00</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="Sony 80 cm (32 inches)" />
														<input type="hidden" name="amount" value="320.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Add to cart" class="button btn" />
													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="/public/img/m5.jpg" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>

										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="single.html">Artis Speaker</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">$349.00</span>
												<del>$399.00</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="Artis Speaker" />
														<input type="hidden" name="amount" value="349.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Add to cart" class="button btn" />
													</fieldset>
												</form>
											</div>

										</div>
									</div>
								</div>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="/public/img/m6.jpg" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="single.html">Philips Speakers</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">$249.00</span>
												<del>$300.00</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="Philips Speakers" />
														<input type="hidden" name="amount" value="249.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Add to cart" class="button btn" />
													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- //second section -->
						<!-- third section -->
						<div class="product-sec1 product-sec2 px-sm-5 px-3">
							<div class="row">
								<h3 class="col-md-4 effect-bg">Summer Carnival</h3>
								<p class="w3l-nut-middle">Get Extra 10% Off</p>
								<div class="col-md-8 bg-right-nut">
									<img src="/public/img/image1.png" alt="">
								</div>
							</div>
						</div>
						<!-- //third section -->
						<!-- fourth section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
							<h3 class="heading-tittle text-center font-italic">Large Appliances</h3>
							<div class="row">
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="/public/img/m7.jpg" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
										</div>
										<span class="product-new-top">New</span>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="single.html">Whirlpool 245</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">$230.00</span>
												<del>$280.00</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="Whirlpool 245" />
														<input type="hidden" name="amount" value="230.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Add to cart" class="button btn" />
													</fieldset>
												</form>
											</div>

										</div>
									</div>
								</div>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="/public/img/m8.jpg" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="single.html">BPL Washing Machine</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">$180.00</span>
												<del>$200.00</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="BPL Washing Machine" />
														<input type="hidden" name="amount" value="180.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Add to cart" class="button btn" />
													</fieldset>
												</form>
											</div>

										</div>
									</div>
								</div>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="/public/img/m9.jpg" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="single.html">Microwave Oven</a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">$199.00</span>
												<del>$299.00</del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="Microwave Oven" />
														<input type="hidden" name="amount" value="199.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Add to cart" class="button btn" />
													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- //fourth section -->
					</div>
				</div>
				<!-- //product left -->

				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Search Here..</h3>
							<form action="#" method="post">
								<input type="search" placeholder="Product name..." name="search" required="">
								<input type="submit" value=" ">
							</form>
						</div>
						<!-- price -->
						<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Price</h3>
							<div class="w3l-range">
								<ul>
									<li>
										<a href="#">Under $1,000</a>
									</li>
									<li class="my-1">
										<a href="#">$1,000 - $5,000</a>
									</li>
									<li>
										<a href="#">$5,000 - $10,000</a>
									</li>
									<li class="my-1">
										<a href="#">$10,000 - $20,000</a>
									</li>
									<li>
										<a href="#">$20,000 $30,000</a>
									</li>
									<li class="mt-1">
										<a href="#">Over $30,000</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //price -->
						<!-- discounts -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Discount</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">5% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">10% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">20% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">30% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">50% or More</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">60% or More</span>
								</li>
							</ul>
						</div>
						<!-- //discounts -->
						<!-- reviews -->
						<div class="customer-rev border-bottom left-side py-2">
							<h3 class="agileits-sear-head mb-3">Customer Review</h3>
							<ul>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>5.0</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>4.0</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star-half"></i>
										<span>3.5</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>3.0</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star-half"></i>
										<span>2.5</span>
									</a>
								</li>
							</ul>
						</div>
						<!-- //reviews -->
						<!-- electronics -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Electronics</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Accessories</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Cameras & Photography</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Car & Vehicle Electronics</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Computers & Accessories</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">GPS & Accessories</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Headphones</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Home Audio</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Home Theater, TV & Video</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Mobiles & Accessories</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Portable Media Players</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Tablets</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Telephones & Accessories</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Wearable Technology</span>
								</li>
							</ul>
						</div>
						<!-- //electronics -->
						<!-- delivery -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Cash On Delivery</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Eligible for Cash On Delivery</span>
								</li>
							</ul>
						</div>
						<!-- //delivery -->
						<!-- arrivals -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">New Arrivals</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Last 30 days</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Last 90 days</span>
								</li>
							</ul>
						</div>
						<!-- //arrivals -->
						<!-- best seller -->
						<div class="f-grid py-2">
							<h3 class="agileits-sear-head mb-3">Best Seller</h3>
							<div class="box-scroll">
								<div class="scroll">
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="/public/img/k1.jpg" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="">Samsung Galaxy On7 Prime (Gold, 4GB RAM + 64GB Memory)</a>
											<a href="" class="price-mar mt-2">$12,990.00</a>
										</div>
									</div>
									<div class="row my-4">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="/public/img/k2.jpg" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="">Haier 195 L 4 Star Direct-Cool Single Door Refrigerator</a>
											<a href="" class="price-mar mt-2">$12,499.00</a>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="/public/img/k3.jpg" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="">Ambrane 13000 mAh Power Bank (P-1310 Premium)</a>
											<a href="" class="price-mar mt-2">$1,199.00 </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- //best seller -->
					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>
	<!-- //top products -->

	<!-- middle section -->
	<div class="join-w3l1 py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<div class="col-lg-6">
					<div class="join-agile text-left p-4">
						<div class="row">
							<div class="col-sm-7 offer-name">
								<h6>Smooth, Rich & Loud Audio</h6>
								<h4 class="mt-2 mb-3">Branded Headphones</h4>
								<p>Sale up to 25% off all in store</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="/public/img/off1.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5">
					<div class="join-agile text-left p-4">
						<div class="row ">
							<div class="col-sm-7 offer-name">
								<h6>A Bigger Phone</h6>
								<h4 class="mt-2 mb-3">Smart Phones 5</h4>
								<p>Free shipping order over $100</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="/public/img/off2.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- middle section -->

	<!-- footer -->
	<?php include("../inc/footer.php"); ?>

	<!-- js-files -->
	<!-- jquery -->
	<script src="/public/js/jquery-2.2.3.min.js"></script>
	<!-- //jquery -->

	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function() {
			$(".dropdown").hover(
				function() {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function() {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="/public/js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //popup modal (for location)-->

	<!-- cart-js -->
	<script src="/public/js/minicart.js"></script>
	<script>
		paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function(evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function() {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- scroll seller -->
	<script src="/public/js/scroll.js"></script>
	<!-- //scroll seller -->

	<!-- smoothscroll -->
	<script src="/public/js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="/public/js/move-top.js"></script>
	<script src="/public/js/easing.js"></script>
	<script>
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="/public/js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->
</body>

</html>