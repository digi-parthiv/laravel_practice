<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap Min CSS -->
        <link rel="stylesheet" href="{{url('Front/css/bootstrap.min.css')}}">
        <!-- Owl Theme Default Min CSS -->
        <link rel="stylesheet" href="{{url('Front/css/owl.theme.default.min.css')}}">
        <!-- Owl Carousel Min CSS -->
        <link rel="stylesheet" href="{{url('Front/css/owl.carousel.min.css')}}">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="{{url('Front/css/animate.min.css')}}">
        <!-- Flaticon CSS -->
		<link rel="stylesheet" href="{{url('Front/css/flaticon.css')}}">
        <!-- Font Awesome Min CSS -->
		<link rel="stylesheet" href="{{url('Front/css/fontawesome.min.css')}}">
		<!-- Nice Select Min CSS -->
		<link rel="stylesheet" href="{{url('Front/css/nice-select.min.css')}}">
        <!-- Magnific Popup Min CSS -->
		<link rel="stylesheet" href="{{url('Front/css/magnific-popup.min.css')}}">
        <!-- Meanmenu Min CSS -->
        <link rel="stylesheet" href="{{url('Front/css/meanmenu.min.css')}}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{url('Front/css/style.css')}}">
        <!-- Responsive CSS -->
		<link rel="stylesheet" href="{{url('Front/css/responsive.css')}}">

		<!-- Favicon -->
        <link rel="icon" type="image/png" href="{{url('Front/img/winefavicon.png')}}">
        <!-- Title -->
        <title>Wine Appreciation</title>
		<style>
			.footer-top-area{
				background-image: unset;
			}
			.footer-top-area::before{
				background-color: white;
			}
			.single-widget h3{
				color: #222222;
			}
			.single-widget ul li a{
				color: #111111;
			}
			.main-nav nav .navbar-nav .nav-item a{
				font-size: 14px;
			}
			.main-nav nav .navbar-nav .nav-item a{
				margin-left: 17px;
				margin-right: 17px;
				color: #ffffff;
			}
			.main-nav.giano-nav-two .navbar.is-sticky{
				background-color: #993350 !important;
			}
			.main-nav nav .navbar-nav .nav-item{
				padding: 20px 0;
			}
			.main-nav nav .navbar-nav .nav-class{
				padding: 7px 0;
				display: flex;
			}
			.main-nav nav .navbar-nav .nav-class a{
				color: #444;
				font-size: 12px;
			}
			.form-group--icon .product-category-select{
				appearance: none;
				cursor: pointer;
				height: 100%;
				left: 0;
				min-height: 42px;
				opacity: 0;
				padding-left: 10px;
				position: absolute;
				top: 0;
				width: 100%;
				z-index: 10;
			}
			.search-style-2 form select{
				background-color: #f8f8f8;
				border: 2px solid #eee;
				border-radius: 26px 0 0 26px;
				border-right: none;
				color: #444;
				font-size: 14px;
				padding: 3px 35px 3px 20px;
				transition: all .3s ease 0s;
			}
			.search-style-2 form input{
				background-color: #fff;
				border: 2px solid #eee;
				border-radius: 0 26px 26px 0;
				color: #444;
				font-size: 14px;
				min-height: 52px;
				padding: 3px 62px 3px 20px;
				width: 540px;
			}
			.search-style-2 form button{
				background-color: transparent;
				border: none;
				color: var(--color-brand);
				font-size: 20px;
				height: 100%;
				padding: 5px 17px;
				position: absolute;
				right: 0;
				top: 50%;
				transform: translateY(-50%);
			}
			.form-group--icon .product-cat-label{
				-webkit-appearance: none;
				background-color: #f8f8f8;
				border: 2px solid #eee;
				border-radius: 26px 0 0 26px;
				border-right: none;
				color: #444;
				font-size: 14px;
				line-height: 42px;
				min-height: 42px;
				padding: 3px 35px 3px 20px;
				position: relative;
				transition: all .3s ease 0s;
				white-space: nowrap;
			}
			.form-group--icon{
				position: relative;
			}
			.search-style-2 form{
				display: flex;
				position: relative;
			}
			.header-action-icon-2{
				width: 55px;
				display: flex;
				padding: 0 14px;
				position: relative;
			}
			.header-action-right{
				align-items: center;
				display: flex;
				flex-shrink: 0;
				justify-content: flex-end;
			}
			.header-action-2{
				align-items: center;
				display: flex;
			}
			.header-action-2 .header-action-icon-2>a{
				color: #333;
				display: inline-block;
				font-size: 30px;
				line-height: 1;
				position: relative;
				width: 1em;
			}
			.header-action-2 .header-action-icon-2>a span.pro-count{
				border-radius: 100%;
				color: #fff;
				font-size: 11px;
				font-weight: 500;
				height: 18px;
				line-height: 18px;
				position: absolute;
				right: -11px;
				text-align: center;
				top: -5px;
				width: 18px;
			}
			.header-action-2 .header-action-icon-2>a span.pro-count.blue{
				background-color: #993350 !important;
			}
		</style>
    </head>

    <body>
		<!-- Start Preloader Area -->
		<div class="preloader">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>

		<div class="navbar-area">
			<!-- Menu For Mobile Device -->
			<div class="mobile-nav">
				<a href="index.html" class="logo">
					<img src="{{url('Front/img/wineappreciation.png')}}" alt="Giano Logo">
				</a>
			</div>

			<!-- Menu For Desktop Device -->
			<div class="main-nav giano-nav-two" style="background-color:#f2f3f8 !important;">
				<nav class="navbar navbar-expand-md navbar-light">
					<div class="container">
						<!-- <a class="navbar-brand" href="index.html">
							<img style="max-width:200%;" src="{{url('Front/img/wineappreciation.png')}}" alt="Giano Logo">
						</a> -->

						<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
							<ul class="navbar-nav m-auto" style="margin-right:unset !important;margin-left:unset !important;">
								<li class="nav-item nav-class">
								<i class="fas fa-anchor mr-5"></i>
									<a href="{{url('/')}}" class="nav-link" style="color:#444;">Track Your Order</a>
								</li>
							</ul>
							<ul class="navbar-nav m-auto" style="margin-right:unset !important">
								<li class="nav-item nav-class">
									<a href="{{url('/')}}" class="nav-link">Supper Value Deals - Save more with coupons</a>
								</li>

							</ul>
							<ul class="navbar-nav m-auto" style="margin-right:unset !important">
								<li class="nav-item nav-class">
									<a href="{{url('/')}}" class="nav-link">Log In / Sign Up</a>
								</li>

							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
        <!-- End Preloader Area -->
		<div class="navbar-area">
			<!-- Menu For Mobile Device -->
			<div class="mobile-nav">
				<a href="index.html" class="logo">
					<img src="{{url('Front/img/wineappreciation.png')}}" alt="Giano Logo">
				</a>
			</div>

			<!-- Menu For Desktop Device -->
			<div class="main-nav giano-nav-two" style="background-color:#ffffff !important;padding:20px 0px;">
				<nav class="navbar navbar-expand-md navbar-light">
					<div class="container">


						<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" style="justify-content:space-between;">
						<ul class="navbar-nav m-auto" style="margin-right:unset !important;margin-left:unset !important;">
						<a class="navbar-brand" href="index.html">
							<img style="max-width:200%;" src="{{url('Front/img/wineappreciation.png')}}" alt="Giano Logo">
						</a>
						</ul>
						<ul class="navbar-nav m-auto" style="margin-right:unset !important;margin-left:100px !important;">
							<div class="search-style-2">
                                <form action="https://docopet.kruzpetz.com/products" class="form--quick-search" data-ajax-url="https://docopet.kruzpetz.com/ajax/search-products" method="get">
                                    <div class="form-group--icon">
                                        <div class="product-cat-label">All Categories</div>
                                        <select class="product-category-select" id="product-category-select" name="categories[]">
                                            <option value="">All Categories</option>
                                            <option value="35" >CATS</option>
											<option value="34" >ROPE</option>
											<option value="2" >Collar</option>
											<option value="11" >Leash</option>
											<option value="12" >Harness</option>
											<option value="31" >Jogging Belt</option>
                                        </select>
                                    </div>
                                    <input type="text" name="q" class="input-search-product"  placeholder="Search for items…" autocomplete="off">
                                    <button type="submit" title="search"> <i class="fas fa-search"></i> </button>
                                    <div class="panel--search-result"></div>
                                </form>
                            </div>
						</ul>
						<ul class="navbar-nav m-auto" style="margin-right:unset !important;margin-left:unset !important;">
							<div class="header-action-right">
                                <div class="header-action-2">
                                                                            <div class="header-action-icon-2">
                                            <a href="" class="compare-count">
                                                <img class="svgInject" alt="Compare" src="https://docopet.kruzpetz.com/themes/wowy/images/icons/icon-compare.svg">
                                                <span class="pro-count blue"><span>0</span></span>
                                            </a>
                                        </div>
                                                                                                                <div class="header-action-icon-2">
                                            <a href="" class="wishlist-count">
                                                <img class="svgInject" alt="Wishlist" src="https://docopet.kruzpetz.com/themes/wowy/images/icons/icon-heart.svg">
                                                <span class="pro-count blue"> <span>0</span></span>
                                            </a>
                                        </div>
                                                                        <div class="header-action-icon-2">
                                        <a class="mini-cart-icon" href="">
                                            <img alt="Cart" src="https://docopet.kruzpetz.com/themes/wowy/images/icons/icon-cart.svg">
                                            <span class="pro-count blue">0</span>
                                        </a>
                                        <!-- <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                            <span>No products in the cart.</span>

                                        </div> -->
                                    </div>
                                    <div class="header-action-icon-2">
                                        <a href="">
                                            <img alt="Sign In" src="https://docopet.kruzpetz.com/themes/wowy/images/icons/icon-user.svg">
                                        </a>
                                    </div>
                                </div>
                            </div>
						</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
        <!-- Start Navbar Area -->
		<div class="navbar-area">
			<!-- Menu For Mobile Device -->
			<div class="mobile-nav">
				<a href="index.html" class="logo">
					<img src="{{url('Front/img/wineappreciation.png')}}" alt="Giano Logo">
				</a>
			</div>

			<!-- Menu For Desktop Device -->
			<div class="main-nav giano-nav-two">
				<nav class="navbar navbar-expand-md navbar-light">
					<div class="container">
						<!-- <a class="navbar-brand" href="index.html">
							<img style="max-width:200%;" src="{{url('Front/img/wineappreciation.png')}}" alt="Giano Logo">
						</a> -->

						<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
							<ul class="navbar-nav m-auto" style="margin-right:unset !important;margin-left:unset !important;">
								<li class="nav-item">
									<a href="{{url('/')}}" class="nav-link"><span style="margin-right: 10px;" class="fas fa-list"></span>Browse Categories  <i class="down fas fa-chevron-down"></i></a>
								</li>
							</ul>
							<ul class="navbar-nav m-auto" style="margin-right:unset !important">
								<li class="nav-item">
									<a href="{{url('/')}}" class="nav-link active">HOME</a>
								</li>
								<li class="nav-item">
									<a href="{{url('about-us')}}" class="nav-link">CELLAR DESIGN</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">COOLING UNITS</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">WINE RACKS</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">WINE CABINETS</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">CORKSCREWS</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">GLASSWARE</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">ACCESSORIES</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
		<!-- End Navbar Area -->

		<!-- Start Sidebar Modal -->
		<div class="sidebar-modal">
			<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">
									<i class="fa fa-times"></i>
								</span>
							</button>
							<h2 class="modal-title" id="myModalLabel2">
								<a href="index.html">
									<img src="{{url('Front/img/wineappreciation.png')}}" alt="Logo">
								</a>
							</h2>
						</div>
						<div class="modal-body">
							<div class="sidebar-modal-widget">
								<h3 class="title">Additional Links</h3>
								<ul>
									<li>
										<a href="log-in.html">Log In</a>
									</li>
									<li>
										<a href="sign-up.html">Sign Up</a>
									</li>
									<li>
										<a href="faq.html">FAQ</a>
									</li>
									<li>
										<a href="log-in.html">Logout</a>
									</li>
								</ul>
							</div>
							<div class="sidebar-modal-widget">
								<h3 class="title">Contact Info</h3>
								<ul class="contact-info">
									<li>
										<i class="fa fa-map-marker"></i>
										Address
										<span>25 Street, west Cruch, Newzeland</span>
									</li>
									<li>
										<i class="fa fa-phone"></i>
										Email <br>
										<a href="mailto:giano@gmail.com">giano@gmail.com</a>
									</li>
									<li>
										<i class="fa fa-envelope"></i>
										Phone <br>
										<a href="tel:+25462755">+25462755</a>, <a href="tel:265497466">265497466</a>
									</li>
								</ul>
							</div>
							<div class="sidebar-modal-widget">
								<h3 class="title">Connect With Us</h3>
								<ul class="social-list">
									<li>
										<a href="https://www.facebook.com/login/" target="_blank">
											<i class="fa-brands fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/login" target="_blank">
											<i class="fa-brands fa-twitter"></i>
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com/accounts/login/" target="_blank">
											<i class="fa-brands fa-instagram"></i>
										</a>
									</li>
									<li>
										<a href="https://bd.linkedin.com/" target="_blank">
											<i class="fa-brands fa-linkedin-in"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>