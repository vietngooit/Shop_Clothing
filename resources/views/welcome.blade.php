<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | clothing</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{('public/frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i>+84 974-974-116</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> viet_1951220053@dau.edu.vn</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/vietngoo.it"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{URL::to('/trang-chu')}}"><img src="{{asset('public/frontend/images/home/logo1.png')}}" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php
									$message = Session::get('name');
									if($message){
										echo '<li><a href="#"><i class="fa fa-user"></i>';
										echo '<span class="text-alert">',$message.'</span>';
									}
								?>
								    <ul role="menu" class="sub-menu">
                                        <li><a href="{{URL::to('/thong-tin')}}">Th??ng tin</a></li>
										<li><a href="{{URL::to('/show-don-hang')}}">L???ch s??? ?????t h??ng</a></li>
										<li><a href="{{URL::to('/logout')}}">????ng xu???t</a></li>
                                    </ul>
								<li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Gi??? h??ng</a></li>
								<li><a href="{{URL::to('/khach-hang')}}">
								<?php
									$message = Session::get('name');
									if(!$message){
										Session::put('name', null);
										Session::put('user_id', null);
										echo '<i class="fa fa-lock"></i>';
										echo'<span class="text-alert">????ng nh???p</span>'; 
									}
								?>
								</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>S</span>-CLOTHING</h1>
									<h2>Sale 50%</h2>
									<p>Gi???m gi?? t??? ng??y 30/4 ?????n 19/5 nhanh tay kh??ng h???t h??ng. </p>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('public/frontend/images/home/girl1.jpg')}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>S</span>-CLOTHING</h1>
									<h2>????? cho m??a h??</h2>
									<p>Th??i th?? tay n???m l???y tay, ????a nhau ?????n nh???ng th??ng ng??y b??nh y??n</p>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('public/frontend/images/home/girl2.jpg')}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>S</span>-CLOTHING</h1>
									<h2>Si??u ??u ????i ch??? c?? t???i Shop Clothing</h2>
									<p>Ch??? t??? 99k nhanh tay k???o h???t</p>
								</div>
								<div class="col-sm-6">
									<img src="{{asset('public/frontend/images/home/girl3.jpg')}}" class="girl img-responsive" alt="" />
								</div>
							</div>	
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>DANH M???C S???N PH???M</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						@foreach($category as $key => $cate)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
								</div>
							</div>
						@endforeach
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>TH????NG HI???U S???N PH???M</h2>
							<div class="brands-name">
							@foreach($brand as $key => $bran)
								<ul class="nav nav-pills nav-stacked">
									<li><a href="{{URL::to('/thuong-hieu-san-pham/'.$bran->Brand_id)}}"> <span class="pull-right"></span>{{$bran->Brand_name}}</a></li>
								</ul>
							@endforeach
							</div>
						</div><!--/brands_products-->		
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					@yield('content')
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>S</span>-Clothing</h2>
							<p>Trang web ???????c thi???t k??? b???i sinh vi??n Tr?????ng ?????i h???c Ki???n Tr??c ???? N???ng</p>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span></span>Ch??m ng??n</h2>
							<p>Mu???n ?????p th?? th?? ?????n v???i Shop Clothing</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>TH??NH VI??N NH??M</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">GVHD: Ph???m Th???  Dung</a></li>
								<li><a href="#">SV: Ng?? Qu???c Vi???t</a></li>
								<li><a href="#">SV: Ho??ng Th??? Oanh</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>????? T??I KTHP</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T??n ????? t??i: Shop Clothing</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Shop Clothing</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright ?? 2022 S-CLOTHING Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="https://www.facebook.com/vietngoo.it">Ng?? Qu???c Vi???t</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>
</html>