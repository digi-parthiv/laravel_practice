@include('front.header')
<style>
	.slider-area .main-slider-item{
		width: 70% !important;
	}
	.slider-area .main-slider-item{
		height: 620px;
	}
	.main-nav.giano-nav-two{
		background-color:#993350 !important;
	}
	.banner-icon{
		width: 60px;
		height: 60px;
		margin-right:20px;
	}
	.icon-box-title{
		margin-bottom: unset;
		font-size: 18px;
    	color: black;
    	font-weight: 600;
	}
	.newsletter .icon-email{
		max-width: 40px;
		margin-right: 15px;
	}
	.p-30{
		padding:30px;
	}
	.newsletter h4, .newsletter h5{
		color:#fff;
	}
	.flex-horizontal-center{
		align-items: center;
    	display: flex;
	}
	.newsletter .form-subcriber input{
		border: 0;
		border-radius: 50px 0 0 50px;
		font-size: 14px;
		padding: 0 20px 0 30px;
	}
	.newsletter .form-subcriber button{
		border: 0;
		border-radius: 0 50px 50px 0;
		font-size: 14px;
		padding: 0 30px;
	}
	.single-blog{
		background-color: unset;
	}
	.single-blog .blog-text{
		background-color: unset;
	}
	.border-radius-10{
		border-radius: 10px;
	}
	.read-more{
		float: inline-end;
		font-size: 12px !important;
		line-height: unset;
	}
	.section-title{
		margin:0 auto 30px 0px;
		max-width: 100% !important;
		text-align: left;
	}
	.section-title h2{
		float:inline-start;
	}
	.section-title.style-1{
		border-bottom: 1px solid #eee;
		padding-bottom: 15px;
		position: relative;
		padding-left:unset;
	}
	.section-title h2{
		font-size: 22px;
	}
	.section-title.style-1:after{
		bottom: 0;
		content: "";
		height: 2px;
		left: 0;
		position: absolute;
		width: 100px;
		background-color:#993050 !important;
	}
	.single-blog .blog-text h3 a{
		margin-top: unset;
	}
	.single-blog .blog-text{
		padding:0px 15px 20px 0px;
	}
	.card-1{
		background: #fff;
		border: 1px solid #e9ebf0;
		position: relative;
		text-align: center;
		display: inline-block;
		padding: 20px;
	}
	.carousel-6-columns-cover .carousel-6-columns .card-1{
		margin-left: 15px;
		margin-right: 15px;
	}
	.blog-area{
		padding-top: 60px;
	}
	.img-hover-scale{
		margin-bottom: 30px;
	}
	.text-cab{
		font-size:14px;
		color:#4f5d77;
	}
	.product-cart-wrap{
		background-color: #fff;
		border: 1px solid #eee;
		border-radius: 10px;
		overflow: hidden;
		position: relative;
		-moz-transition: .2s;
		-webkit-transition: .2s;
	}
	.product-cart-wrap.small{
		border: 0;
		text-align: center;
		display: inline-block;
	}
	.text-truncate a{
		color: #111111;
		font-size: 16px;
	}
	.product-action-1{
		display: inline-flex;
	}
	.product-cart-wrap .product-action-1 a.action-btn.small, .product-cart-wrap .product-action-1 button.small{
		height: 32px;
    line-height: 32px;
    width: 32px;
	}
	.product-cart-wrap .product-action-1 a.action-btn, .product-cart-wrap .product-action-1 button{
		background-color: #f5f5f5;
		border: none;
		border-radius: 5px;
		display: inline-block;
		margin-right: 3px;
		position: relative;
		text-align: center;
	}
	.product-cart-wrap .product-action-1 a.action-btn:hover, .product-cart-wrap .product-action-1 button:hover{
		background-color: #993050 !important;
	}
	.hover-up, .hover-up:hover{
		transition: all .25s cubic-bezier(.02,.01,.47,1);
	}
	.hover-up:hover{
		transform: translateY(-5px);
	}
	.product-cart-wrap .product-img-action-wrap .product-img a img.hover-img{
		left: 0;
		opacity: 0;
		position: absolute;
		top: 0;
		transition: opacity .25s, visibility .25s, transform 1.5s cubic-bezier(0,0,.2,1);
		visibility: hidden;
		z-index: 2;
	}
	.rating_wrap .rating:before{
		color: #d2d2d2;
		content: "\f005\f005\f005\f005\f005";
		float: left;
		font-size: 12px;
		font-weight: 900;
		left: 0;
		letter-spacing: 2px;
		position: absolute;
		top: 0;
	}
	.rating_wrap .rating{
		display: inline-block;
		font-family: Font Awesome\ 5 Pro !important;
		height: 20px;
		overflow: hidden;
		position: relative;
		vertical-align: top;
		width: 80px;
	}
	.product-cart-wrap .product-content-wrap .product-price span{
		font-size: 18px;
    	font-weight: 700;
		color: #993350 !important;
	}
	.rating_wrap .rating_num{
		font-size: 12px;
	}
	.product-cart-wrap .product-action-1{
		left: 50%;
		opacity: 0;
		position: absolute;
		top: 50%;
		transform: translateX(-50%) translateY(-50%);
		transition: all .3s ease 0s;
		visibility: hidden;
		z-index: 9;
	}
	.product-cart-wrap:hover .product-img-action-wrap .product-action-1{
		opacity: 1;
		visibility: visible;
	}
	.product-cart-wrap .product-content-wrap{
		padding: 20px;
	}
	.nav-tabs .nav-link.active{
		border-bottom: 2px solid #993350 !important;
		color: #993350 !important;
		border-color: white;
	}
	.nav-tabs{
		margin-bottom: 30px;
	}
	.nav-tabs .nav-link{
		background: transparent;
		border: none;
		color: #90908E;
		font-size: 16px;
		font-weight: 500;
		/* margin: 0 25px; */
	}
	.product-cart-wrap .product-badges.product-badges-position{
		left: 20px;
		position: absolute;
		top: 20px;
		z-index: 9;
	}
	.product-cart-wrap .product-badges.product-badges-mrg{
		margin: 0 0 10px;
	}
	.product-cart-wrap .product-badges span{
		border-radius: 30px;
		color: #fff;
		display: inline-block;
		font-size: 12px;
		letter-spacing: 1px;
		line-height: 1;
		/* margin-right: 10px; */
		padding: 6px 12px;
		text-transform: uppercase;
	}
	.product-cart-wrap .product-action-1 a.action-btn{
		border: none;
		border-radius: 5px;
		display: inline-block;
		height: 44px;
		line-height: 44px;
		margin-right: 3px;
		position: relative;
		text-align: center;
		width: 44px;
	}
	.product-cart-wrap .product-action-1.show{
		bottom: 26px;
		left: unset;
		opacity: 1;
		right: 20px;
		top: unset;
		transform: none;
		visibility: visible;
	}
	.product-cart-wrap .product-action-1 a.action-btn:before{
		border: 7px solid transparent;
		/* border-top: 7px solid var(--color-brand); */
		bottom: 100%;
		content: "";
		left: calc(50% - 7px);
		margin-bottom: -13px;
		opacity: 0;
		position: absolute;
		transition-delay: .1s;
		transition: opacity .3s ease, visibility .3s ease, transform .3s cubic-bezier(.71,1.7,.77,1.24);
		visibility: hidden;
		z-index: 9;
	}
	.product-cart-wrap .product-action-1 a.action-btn:after{
		border-radius: 5px;
		bottom: 100%;
		box-shadow: 4px 4px 8px rgba(0, 0, 0, .1);
		color: #fff;
		content: attr(aria-label);
		font-size: 11px;
		left: 50%;
		line-height: 1.3;
		opacity: 0;
		padding: 7px 10px;
		position: absolute;
		transform: translateX(-50%) translateY(0);
		transition: opacity .3s ease, visibility .3s ease, transform .3s cubic-bezier(.71,1.7,.77,1.24);
		visibility: hidden;
		white-space: nowrap;
	}
	.product-cart-wrap .product-content-wrap h2 a{
		color: #111111;
	}
	.product-cart-wrap .product-content-wrap .product-category a{
		color: #90908E;
		font-size: 13px;
		letter-spacing: 1px;
		text-transform: uppercase;
	}
	.banner-img .banner-text{
		padding: 20px 30px;
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		z-index: 2;
	}
	.banner-img .banner-text h4{
		font-size: 18px;
	}
	.banner-img .banner-text a{
		font-size: 12px;
	}
	.slider-area .main-slider-item .slider-text p{
		color: white;
	}
	.banner-img{
		clear: both;
		position: relative;
	}
</style>
<section class="slider-area" style="margin-top:25px;">
            <div class="main-slider owl-carousel owl-theme">
                <div class="main-slider-item slider-item-bg-1" style="background-image: url('Front/img/image (19).png');margin:0px 200px 0px 285px;border-top-left-radius:20px;border-top-right-radius:20px;">
                    <div class="d-table">
                        <div class="d-table-cell">
							<div class="container">
								<div class="slider-text">
									<span>Welcome to Wine Appreciation</span>
									<h1>Serving the Wine Industry </h1>
									<p>Since 1973</p>
									<a class="default-btn" href="about.html">DISCOVER NOW</a>
								</div>
							</div>
                        </div>
                    </div>
                </div>
                <div class="main-slider-item slider-item-bg-2" style="background-image: url('Front/img/image (19).png');margin:0px 200px 0px 285px;border-top-left-radius:20px;border-top-right-radius:20px;">
                    <div class="d-table">
                        <div class="d-table-cell">
							<div class="container">
								<div class="slider-text">
								<span>Welcome to Wine Appreciation</span>
									<h1>Serving the Wine Industry </h1>
									<p>Since 1973</p>
									<a class="default-btn" href="about.html">DISCOVER NOW</a>
							</div>
                        </div>
                    </div>
                </div>
                <div class="main-slider-item slider-item-bg-3" style="background-image: url('Front/img/image (19).png');margin:0px 200px 0px 285px;border-top-left-radius:20px;border-top-right-radius:20px;">
                    <div class="d-table">
                        <div class="d-table-cell">
							<div class="container">
								<div class="slider-text">
								<span>Welcome to Wine Appreciation</span>
									<h1>Serving the Wine Industry </h1>
									<p>Since 1973</p>
									<a class="default-btn" href="about.html">DISCOVER NOW</a>
								</div>
							</div>
                        </div>
                    </div>
                </div>
			</div>

        </section>
		<!-- End Main Slider Area -->
		<section class="banners pt-60" style="padding:60px 0px!important;">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="banner-img wow fadeIn animated ">
							<div class="border-radius-10" style="text-align: center;">
								<a href="https://docopet.kruzpetz.com/ac-9506fb969e07fdaeafa6fc4e9b3c91fb799b1672/IZ6WU8KUALYD" target="_blank" title="Smart Offer">
									<picture>
										<source srcset="{{url('Front/img/1.png')}}" media="(min-width: 1200px)" />
										<source srcset="{{url('Front/img/1.png')}}" media="(min-width: 768px)" />
										<source srcset="{{url('Front/img/1.png')}}" media="(max-width: 767px)" />

										<img src="{{url('Front/img/1.png')}}" style="max-width: 100%" loading="lazy" alt="Smart Offer">
									</picture>
								</a>
							</div>

							<div class="banner-text">
								<span>Smart Offer</span>
								<h4>Save 20% on<br>
		Collar</h4>
								<a href="">
					Shop now <i class="fa fa-arrow-right"></i>
				</a>
							</div>
						</div>

					</div>
					<div class="col-md-4">
						<div class="banner-img wow fadeIn animated ">
							<div class="border-radius-10" style="text-align: center;">
								<a href="https://docopet.kruzpetz.com/ac-201244e3d336c93c892dc4822a8cc92a1a072414/ILSFJVYFGCPZ" target="_blank" title="Sale off">
									<picture>
										<source srcset="{{url('Front/img/dis1.png')}}" media="(min-width: 1200px)" />
										<source srcset="{{url('Front/img/dis1.png')}}" media="(min-width: 768px)" />
										<source srcset="{{url('Front/img/dis1.png')}}" media="(max-width: 767px)" />

										<img src="{{url('Front/img/dis1.png')}}" style="max-width: 100%" loading="lazy" alt="Sale off">
									</picture>
								</a>
							</div>

							<div class="banner-text">
								<span>Sale off</span>
								<h4>Great Harness<br>
		Athletica Net mesh</h4>
								<a href="https://docopet.kruzpetz.com/ads-click/ILSFJVYFGCPZ">
					Shop now <i class="fa fa-arrow-right"></i>
				</a>
							</div>
						</div>

					</div>
					<div class="col-md-4">
						<div class="banner-img wow fadeIn animated ">
							<div class="border-radius-10" style="text-align: center;">
								<a href="https://docopet.kruzpetz.com/ac-efb93f2f7db80161552ce246c6018b57f41096d0/ILSDKVYFGXPH" target="_blank" title="New Arrivals">
									<picture>
										<source srcset="{{url('Front/img/dis3.jpg')}}" media="(min-width: 1200px)" />
										<source srcset="{{url('Front/img/dis3.jpg')}}" media="(min-width: 768px)" />
										<source srcset="{{url('Front/img/dis3.jpg')}}" media="(max-width: 767px)" />

										<img src="{{url('Front/img/dis3.jpg')}}" style="max-width: 100%" loading="lazy" alt="New Arrivals">
									</picture>
								</a>
							</div>

							<div class="banner-text">
								<span>New Arrivals</span>
								<h4>Shop Today’s<br>
		Deals &amp; Offers</h4>
								<a href="https://docopet.kruzpetz.com/ads-click/ILSDKVYFGXPH">
					Shop now <i class="fa fa-arrow-right"></i>
				</a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>

		<section class="featured section-padding-60" style="padding-bottom:60px;">
    		<div class="container">
        		<div class="row">
                    <div class="col-lg-3 col-md-6 mb-md-3 mb-lg-0">
                        <div class="banner-left-icon d-flex align-items-center wow fadeIn animated h-100 ">
                            <div class="banner-icon">
                                <img src="https://docopet.s3.amazonaws.com/icon-truck-1.png" alt="icon">
                            </div>
                            <div class="banner-text">
                                <p class="icon-box-title">Free Shipping</p>
                                <p>Orders $50 or more</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-md-3 mb-lg-0">
                        <div class="banner-left-icon d-flex align-items-center wow fadeIn animated h-100 ">
                            <div class="banner-icon">
                                <img src="https://docopet.s3.amazonaws.com/icon-purchase-1.png" alt="icon">
                            </div>
                            <div class="banner-text">
                                <p class="icon-box-title">Free Returns</p>
                                <p>Within 30 days</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-md-3 mb-lg-0">
                        <div class="banner-left-icon d-flex align-items-center wow fadeIn animated h-100 ">
                            <div class="banner-icon">
                                <img src="https://docopet.s3.amazonaws.com/icon-bag-1.png" alt="icon">
                            </div>
                            <div class="banner-text">
                                <p class="icon-box-title">Get 20% Off 1 Item</p>
                                <p>When you sign up</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-md-3 mb-lg-0">
                        <div class="banner-left-icon d-flex align-items-center wow fadeIn animated h-100 ">
                            <div class="banner-icon">
                                <img src="https://docopet.s3.amazonaws.com/icon-operator-1.png" alt="icon">
                            </div>
                            <div class="banner-text">
                                <p class="icon-box-title">Support Center</p>
                                <p>24/7 amazing services</p>
                            </div>
                        </div>
                    </div>
                </div>
    		</div>
		</section>


		<section class="product-tabs pt-40 pb-30 wow fadeIn animated" style="padding-bottom:40px!important;">
    <div class="container">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link  active " type="button" data-url="https://docopet.kruzpetz.com/ajax/products-by-collection/1" role="tab" aria-controls="product-collections-tab" aria-selected="true">New Arrival</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link " type="button" data-url="https://docopet.kruzpetz.com/ajax/products-by-collection/2" role="tab" aria-controls="product-collections-tab" aria-selected="true">Best Sellers</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link " type="button" data-url="https://docopet.kruzpetz.com/ajax/products-by-collection/3" role="tab" aria-controls="product-collections-tab" aria-selected="true">Special Offer</button>
            </li>
        </ul>
        <div class="tab-content wow fadeIn animated">
            <div class="half-circle-spinner loading-spinner d-none">
                <div class="circle circle-1"></div>
                <div class="circle circle-2"></div>
            </div>

            <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="product-collections-tab">
                <div class="row product-grid-4">
                    <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30" style="margin-bottom:30px;">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" style="width: 304px;height:208px;" src="{{url('Front/img/a.jpg')}}" alt="Jelly Bean Nylon Dog Collar">
                                        <!-- <img class="hover-img" src="Images/Products/a.jpg" alt="Jelly Bean Nylon Dog Collar"> -->
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick View" href="#" class="action-btn hover-up js-quick-view-button" data-url="https://docopet.kruzpetz.com/ajax/quick-view/10094"><i class="far fa-eye"></i></a>
                                    <a aria-label="Add To Wishlist" href="#" class="action-btn hover-up js-add-to-wishlist-button" data-url="https://docopet.kruzpetz.com/wishlist/10094"><i class="far fa-heart"></i></a>
                                    <a aria-label="Add To Compare" href="#" class="action-btn hover-up js-add-to-compare-button" data-url="https://docopet.kruzpetz.com/compare/10094"><i class="fas fa-exchange-alt"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span style="background-color: #ec2434">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Wine Cabinets</a>
                                </div>
                                <h2 class="text-truncate"><a href="" title="Jelly Bean Nylon Dog Collar">Artevino Oxygen Solid Door (Left Hinge)</a></h2>

                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width: 0%"></div>
                                    </div>
                                    <span class="rating_num">(0)</span>
                                </div>



                                <div class="product-price">
                                    <span>$2495</span>
                                </div>



                                <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up add-to-cart-button" data-id="10094" data-url="https://docopet.kruzpetz.com/cart/add-to-cart" href="#"><i class="fas fa-shopping-bag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" style="width: 304px;height:208px;" src="{{url('Front/img/c.jpg')}}" alt="DOCO®VERTEX Power Dog Harness">
                                        <!-- <img class="hover-img" src="Images/Products/c.jpg" alt="DOCO®VERTEX Power Dog Harness"> -->
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick View" href="#" class="action-btn hover-up js-quick-view-button" data-url="https://docopet.kruzpetz.com/ajax/quick-view/9974"><i class="far fa-eye"></i></a>
                                    <a aria-label="Add To Wishlist" href="#" class="action-btn hover-up js-add-to-wishlist-button" data-url="https://docopet.kruzpetz.com/wishlist/9974"><i class="far fa-heart"></i></a>
                                    <a aria-label="Add To Compare" href="#" class="action-btn hover-up js-add-to-compare-button" data-url="https://docopet.kruzpetz.com/compare/9974"><i class="fas fa-exchange-alt"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span style="background-color: #fe9931">Sale</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Wine Cabinets</a>
                                </div>
                                <h2 class="text-truncate"><a href="" title="DOCO®VERTEX Power Dog Harness">Artevino Oxygen Solid Door (Right Hinge)</a></h2>

                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width: 0%"></div>
                                    </div>
                                    <span class="rating_num">(0)</span>
                                </div>



                                <div class="product-price">
                                    <span>$2495</span>
                                </div>



                                <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up add-to-cart-button" data-id="9974" data-url="https://docopet.kruzpetz.com/cart/add-to-cart" href="#"><i class="fas fa-shopping-bag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" style="width: 304px;height:208px;" src="{{url('Front/img/d.jpg')}}" alt="DOCO® Signature Nylon Dog Collar">
                                        <!-- <img class="hover-img" src="Images/Products/d.jpg" alt="DOCO® Signature Nylon Dog Collar"> -->
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick View" href="#" class="action-btn hover-up js-quick-view-button" data-url="https://docopet.kruzpetz.com/ajax/quick-view/6276"><i class="far fa-eye"></i></a>
                                    <a aria-label="Add To Wishlist" href="#" class="action-btn hover-up js-add-to-wishlist-button" data-url="https://docopet.kruzpetz.com/wishlist/6276"><i class="far fa-heart"></i></a>
                                    <a aria-label="Add To Compare" href="#" class="action-btn hover-up js-add-to-compare-button" data-url="https://docopet.kruzpetz.com/compare/6276"><i class="fas fa-exchange-alt"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span style="background-color: #ec2434">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Wine Cabinets</a>
                                </div>
                                <h2 class="text-truncate"><a href="" title="DOCO® Signature Nylon Dog Collar">Transtherm Prestige Loft Vintage Glass Door (Right Hinge)</a></h2>

                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width: 0%"></div>
                                    </div>
                                    <span class="rating_num">(0)</span>
                                </div>



                                <div class="product-price">
                                    <span>$2895</span>
                                </div>



                                <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up add-to-cart-button" data-id="6276" data-url="https://docopet.kruzpetz.com/cart/add-to-cart" href="#"><i class="fas fa-shopping-bag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" style="width: 304px;height:208px;" src="{{url('Front/img/b.jpg')}}" alt="DOCO® Puffy Mesh Dog Collar">
                                        <!-- <img class="hover-img" src="Images/Products/b.jpg" alt="DOCO® Puffy Mesh Dog Collar"> -->
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick View" href="#" class="action-btn hover-up js-quick-view-button" data-url="https://docopet.kruzpetz.com/ajax/quick-view/6273"><i class="far fa-eye"></i></a>
                                    <a aria-label="Add To Wishlist" href="#" class="action-btn hover-up js-add-to-wishlist-button" data-url="https://docopet.kruzpetz.com/wishlist/6273"><i class="far fa-heart"></i></a>
                                    <a aria-label="Add To Compare" href="#" class="action-btn hover-up js-add-to-compare-button" data-url="https://docopet.kruzpetz.com/compare/6273"><i class="fas fa-exchange-alt"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span style="background-color: #ec2434">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Wine Cabinets</a>
                                </div>
                                <h2 class="text-truncate"><a href="" title="DOCO® Puffy Mesh Dog Collar">Transtherm Prestige Manoir Glass Door (Right Hinge)</a></h2>

                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width: 0%"></div>
                                    </div>
                                    <span class="rating_num">(0)</span>
                                </div>



                                <div class="product-price">
                                    <span>$4395</span>
                                </div>



                                <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up add-to-cart-button" data-id="6273" data-url="https://docopet.kruzpetz.com/cart/add-to-cart" href="#"><i class="fas fa-shopping-bag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" style="width: 304px;height:208px;" src="{{url('Front/img/5.jpg')}}" alt="DOCO® DD Nylon Dog Collar">
                                        <!-- <img class="hover-img" src="Images/Products/5.jpg" alt="DOCO® DD Nylon Dog Collar"> -->
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick View" href="#" class="action-btn hover-up js-quick-view-button" data-url="https://docopet.kruzpetz.com/ajax/quick-view/6271"><i class="far fa-eye"></i></a>
                                    <a aria-label="Add To Wishlist" href="#" class="action-btn hover-up js-add-to-wishlist-button" data-url="https://docopet.kruzpetz.com/wishlist/6271"><i class="far fa-heart"></i></a>
                                    <a aria-label="Add To Compare" href="#" class="action-btn hover-up js-add-to-compare-button" data-url="https://docopet.kruzpetz.com/compare/6271"><i class="fas fa-exchange-alt"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span style="background-color: #ec2434">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Cooloing Units</a>
                                </div>
                                <h2 class="text-truncate"><a href="" title="DOCO® DD Nylon Dog Collar">CellarPro Self-Contained – 1800QT-ECX</a></h2>

                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width: 0%"></div>
                                    </div>
                                    <span class="rating_num">(0)</span>
                                </div>



                                <div class="product-price">
                                    <span>$1850</span>
                                </div>



                                <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up add-to-cart-button" data-id="6271" data-url="https://docopet.kruzpetz.com/cart/add-to-cart" href="#"><i class="fas fa-shopping-bag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" style="width: 304px;height:208px;" src="{{url('Front/img/9.jpg')}}" alt="DOCO®VERTEX FRONT RANGE DOG HARNESS - 3M Reflective">
                                        <!-- <img class="hover-img" src="Images/Products/9.jpg" alt="DOCO®VERTEX FRONT RANGE DOG HARNESS - 3M Reflective"> -->
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick View" href="#" class="action-btn hover-up js-quick-view-button" data-url="https://docopet.kruzpetz.com/ajax/quick-view/6270"><i class="far fa-eye"></i></a>
                                    <a aria-label="Add To Wishlist" href="#" class="action-btn hover-up js-add-to-wishlist-button" data-url="https://docopet.kruzpetz.com/wishlist/6270"><i class="far fa-heart"></i></a>
                                    <a aria-label="Add To Compare" href="#" class="action-btn hover-up js-add-to-compare-button" data-url="https://docopet.kruzpetz.com/compare/6270"><i class="fas fa-exchange-alt"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Cooloing Units</a>
                                </div>
                                <h2 class="text-truncate"><a href="">CellarCool CX 4400</a></h2>

                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width: 0%"></div>
                                    </div>
                                    <span class="rating_num">(0)</span>
                                </div>



                                <div class="product-price">
                                    <span>$2413</span>
                                </div>



                                <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up add-to-cart-button" data-id="6270" data-url="https://docopet.kruzpetz.com/cart/add-to-cart" href="#"><i class="fas fa-shopping-bag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" style="width: 304px;height:208px;" src="{{url('Front/img/7.jpg')}}" alt="DOCO® VARIO O-Ring Nylon Dog Collar with Reflective Stitching">
                                        <!-- <img class="hover-img" src="Images/Products/7.jpg" alt="DOCO® VARIO O-Ring Nylon Dog Collar with Reflective Stitching"> -->
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick View" href="#" class="action-btn hover-up js-quick-view-button" data-url="https://docopet.kruzpetz.com/ajax/quick-view/6268"><i class="far fa-eye"></i></a>
                                    <a aria-label="Add To Wishlist" href="#" class="action-btn hover-up js-add-to-wishlist-button" data-url="https://docopet.kruzpetz.com/wishlist/6268"><i class="far fa-heart"></i></a>
                                    <a aria-label="Add To Compare" href="#" class="action-btn hover-up js-add-to-compare-button" data-url="https://docopet.kruzpetz.com/compare/6268"><i class="fas fa-exchange-alt"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span style="background-color: #ec2434">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Cooloing Units</a>
                                </div>
                                <h2 class="text-truncate"><a href="" title="DOCO® VARIO O-Ring Nylon Dog Collar with Reflective Stitching">WhisperKOOL 2500 Wine Cabinet System</a></h2>

                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width: 0%"></div>
                                    </div>
                                    <span class="rating_num">(0)</span>
                                </div>



                                <div class="product-price">
                                    <span>$2128</span>
                                </div>



                                <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up add-to-cart-button" data-id="6268" data-url="https://docopet.kruzpetz.com/cart/add-to-cart" href="#"><i class="fas fa-shopping-bag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="">
                                        <img class="default-img" style="width: 304px;height:208px;" src="{{url('Front/img/8.jpg')}}" alt="DOCO® Athletica Net mesh QUICK FIT Dog Harness">
                                        <!-- <img class="hover-img" src="Images/Products/8.jpg" alt="DOCO® Athletica Net mesh QUICK FIT Dog Harness"> -->
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick View" href="#" class="action-btn hover-up js-quick-view-button" data-url="https://docopet.kruzpetz.com/ajax/quick-view/6267"><i class="far fa-eye"></i></a>
                                    <a aria-label="Add To Wishlist" href="#" class="action-btn hover-up js-add-to-wishlist-button" data-url="https://docopet.kruzpetz.com/wishlist/6267"><i class="far fa-heart"></i></a>
                                    <a aria-label="Add To Compare" href="#" class="action-btn hover-up js-add-to-compare-button" data-url="https://docopet.kruzpetz.com/compare/6267"><i class="fas fa-exchange-alt"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="">Cooloing Units</a>
                                </div>
                                <h2 class="text-truncate"><a href="" title="DOCO® Athletica Net mesh QUICK FIT Dog Harness">Breezaire WKL 1060 Through the Wall Wine Cellar Cooling Unit</a></h2>

                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width: 0%"></div>
                                    </div>
                                    <span class="rating_num">(0)</span>
                                </div>



                                <div class="product-price">
                                    <span>$1842</span>
                                </div>



                                <div class="product-action-1 show">
                                    <a aria-label="Add To Cart" class="action-btn hover-up add-to-cart-button" data-id="6267" data-url="https://docopet.kruzpetz.com/cart/add-to-cart" href="#"><i class="fas fa-shopping-bag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


		<section class="popular-categories bg-grey-9 section-padding-60" id="featured-product-categories" style="padding:60px 0px;background-color:#F4F5F9;">
			<div class="container wow fadeIn animated">
				<h3 style="text-align: unset;" class="section-title mb-30">Top Categories</h3>

				<div class="carousel-6-columns-cover position-relative">
					<div class="slider-arrow slider-arrow-2 carousel-6-columns-arrow" id="carousel-6-columns-categories-arrows"></div>
					<div style="display: flex;justify-content: center;" class="carousel-slider-wrapper carousel-6-columns" id="carousel-6-columns-categories" data-slick="{&quot;autoplay&quot;:false,&quot;infinite&quot;:false,&quot;autoplaySpeed&quot;:3000,&quot;speed&quot;:800}">
											<div class="card-1 border-radius-10 hover-up p-20">
								<figure class="mb-30 img-hover-scale overflow-hidden">
									<a href=""><img style="width: 149px;height:111px;" src="{{url('Front/img/dis2.jpg')}}" alt="Collar" /></a>
								</figure>
								<h5><a class="text-cab" href="">Wine Racks</a></h5>
							</div>
											<div class="card-1 border-radius-10 hover-up p-20">
								<figure class="mb-30 img-hover-scale overflow-hidden">
									<a href=""><img style="width: 149px;height:111px;" src="{{url('Front/img/cat1.jpg')}}" alt="Leash" /></a>
								</figure>
								<h5><a class="text-cab" href="">Cooling Units</a></h5>
							</div>
											<div class="card-1 border-radius-10 hover-up p-20">
								<figure class="mb-30 img-hover-scale overflow-hidden">
									<a href=""><img style="width: 149px;height:111px;" src="{{url('Front/img/cat2.jpg')}}" alt="Harness" /></a>
								</figure>
								<h5><a class="text-cab" href="">Wine Cabinets</a></h5>
							</div>
											<div class="card-1 border-radius-10 hover-up p-20">
								<figure class="mb-30 img-hover-scale overflow-hidden">
									<a href=""><img style="width: 149px;height:111px;" src="{{url('Front/img/cat3.jpg')}}" alt="Jogging Belt" /></a>
								</figure>
								<h5><a class="text-cab" href="">Accessories</a></h5>
							</div>
									</div>
				</div>
			</div>
		</section>

		<section class="section-padding-60" style="padding-top:60px;">
			<div class="container wow fadeIn animated">
				<h3 class="section-title style-1 mb-30">Featured products</h3>

				<div class="carousel-6-columns-cover position-relative">
					<div class="slider-arrow slider-arrow-2 carousel-6-columns-arrow" id="carousel-6-columns-arrows"></div>
					<div class="carousel-slider-wrapper carousel-6-columns" id="carousel-6-columns-products" data-slick="{&quot;autoplay&quot;:false,&quot;infinite&quot;:false,&quot;autoplaySpeed&quot;:3000,&quot;speed&quot;:800}">
						<div class="product-cart-wrap small hover-up p-10">
							<div class="product-img-action-wrap">
								<div class="product-img product-img-zoom">
									<a href="">
										<img class="default-img" src="{{url('Front/img/10c.jpg')}}" style="width:201px;height:150px;" alt="Jacquard Weave Collar">
										<!-- <img class="hover-img" src="{{url('Front/img/10c.jpg')}}" style="width:201px;height:150px;" alt="Jacquard Weave Collar"> -->
									</a>
								</div>
								<div class="product-action-1">
									<a aria-label="Quick View" href="#" class="action-btn small hover-up js-quick-view-button" data-url=""><i class="far fa-eye"></i></a>
									<a aria-label="Add To Wishlist" href="#" class="action-btn small hover-up js-add-to-wishlist-button" data-url=""><i class="far fa-heart"></i></a>
									<a aria-label="Add To Compare" href="#" class="action-btn small hover-up js-add-to-compare-button" data-url=""><i class="fas fa-exchange-alt"></i></a>
								</div>
								<div class="product-badges product-badges-position product-badges-mrg">
								</div>
							</div>
							<div class="product-content-wrap">
								<h2 class="text-truncate"><a href="" title="Jacquard Weave Collar">Transtherm Prestig...</a></h2>
								<div class="rating_wrap">
									<div class="rating">
										<div class="product_rate" style="width: 0%"></div>
									</div>
									<span class="rating_num">(0)</span>
								</div>



								<div class="product-price">
									<span>$3785</span>
								</div>


							</div>
						</div>
						<div class="product-cart-wrap small hover-up p-10">
							<div class="product-img-action-wrap">
								<div class="product-img product-img-zoom">
									<a href="">
										<img class="default-img" src="{{url('Front/img/7c.jpg')}}" style="width:201px;height:150px;" alt="DOCO® Recycled Polyester Leash">
										<!-- <img class="hover-img" src="{{url('Front/img/7c.jpg')}}" style="width:201px;height:150px;" alt="DOCO® Recycled Polyester Leash"> -->
									</a>
								</div>
								<div class="product-action-1">
									<a aria-label="Quick View" href="#" class="action-btn small hover-up js-quick-view-button" data-url="https://docopet.kruzpetz.com/ajax/quick-view/10544"><i class="far fa-eye"></i></a>
									<a aria-label="Add To Wishlist" href="#" class="action-btn small hover-up js-add-to-wishlist-button" data-url="https://docopet.kruzpetz.com/wishlist/10544"><i class="far fa-heart"></i></a>
									<a aria-label="Add To Compare" href="#" class="action-btn small hover-up js-add-to-compare-button" data-url="https://docopet.kruzpetz.com/compare/10544"><i class="fas fa-exchange-alt"></i></a>
								</div>
								<div class="product-badges product-badges-position product-badges-mrg">
								</div>
							</div>
							<div class="product-content-wrap">
								<h2 class="text-truncate"><a href="" title="DOCO® Recycled Polyester Leash">WhisperKOO...</a></h2>
								<div class="rating_wrap">
									<div class="rating">
										<div class="product_rate" style="width: 0%"></div>
									</div>
									<span class="rating_num">(0)</span>
								</div>



								<div class="product-price">
									<span>$2128</span>
								</div>


							</div>
						</div>
						<div class="product-cart-wrap small hover-up p-10">
							<div class="product-img-action-wrap">
								<div class="product-img product-img-zoom">
									<a href="">
										<img class="default-img" src="{{url('Front/img/9c.jpg')}}" style="width:201px;height:150px;" alt="DOCO® Recycled Polyester Leash">
										<!-- <img class="hover-img" src="{{url('Front/img/7c.jpg')}}" style="width:201px;height:150px;" alt="DOCO® Recycled Polyester Leash"> -->
									</a>
								</div>
								<div class="product-action-1">
									<a aria-label="Quick View" href="#" class="action-btn small hover-up js-quick-view-button" data-url="https://docopet.kruzpetz.com/ajax/quick-view/10544"><i class="far fa-eye"></i></a>
									<a aria-label="Add To Wishlist" href="#" class="action-btn small hover-up js-add-to-wishlist-button" data-url="https://docopet.kruzpetz.com/wishlist/10544"><i class="far fa-heart"></i></a>
									<a aria-label="Add To Compare" href="#" class="action-btn small hover-up js-add-to-compare-button" data-url="https://docopet.kruzpetz.com/compare/10544"><i class="fas fa-exchange-alt"></i></a>
								</div>
								<div class="product-badges product-badges-position product-badges-mrg">
								</div>
							</div>
							<div class="product-content-wrap">
								<h2 class="text-truncate"><a href="" title="DOCO® Recycled Polyester Leash">WhisperKOO...</a></h2>
								<div class="rating_wrap">
									<div class="rating">
										<div class="product_rate" style="width: 0%"></div>
									</div>
									<span class="rating_num">(0)</span>
								</div>



								<div class="product-price">
									<span>$2128</span>
								</div>


							</div>
						</div>
						<div class="product-cart-wrap small hover-up p-10">
							<div class="product-img-action-wrap">
								<div class="product-img product-img-zoom">
									<a href="">
										<img class="default-img" src="{{url('Front/img/5c.jpg')}}" style="width:201px;height:150px;" alt="DOCO® Double Handle Leash w/Recycled Polyester">
										<!-- <img class="hover-img" src="{{url('Front/img/5c.jpg')}}" style="width:201px;height:150px;" alt="DOCO® Double Handle Leash w/Recycled Polyester"> -->
									</a>
								</div>
								<div class="product-action-1">
									<a aria-label="Quick View" href="#" class="action-btn small hover-up js-quick-view-button" data-url="https://docopet.kruzpetz.com/ajax/quick-view/10538"><i class="far fa-eye"></i></a>
									<a aria-label="Add To Wishlist" href="#" class="action-btn small hover-up js-add-to-wishlist-button" data-url="https://docopet.kruzpetz.com/wishlist/10538"><i class="far fa-heart"></i></a>
									<a aria-label="Add To Compare" href="#" class="action-btn small hover-up js-add-to-compare-button" data-url="https://docopet.kruzpetz.com/compare/10538"><i class="fas fa-exchange-alt"></i></a>
								</div>
								<div class="product-badges product-badges-position product-badges-mrg">
								</div>
							</div>
							<div class="product-content-wrap">
								<h2 class="text-truncate"><a href="" title="DOCO® Double Handle Leash w/Recycled Polyester">Le Cache Win...</a></h2>
								<div class="rating_wrap">
									<div class="rating">
										<div class="product_rate" style="width: 0%"></div>
									</div>
									<span class="rating_num">(0)</span>
								</div>



								<div class="product-price">
									<span>$6395</span>
								</div>


							</div>
						</div>
						<div class="product-cart-wrap small hover-up p-10">
							<div class="product-img-action-wrap">
								<div class="product-img product-img-zoom">
									<a href="">
										<img class="default-img" src="{{url('Front/img/2c.jpg')}}" style="width:201px;height:150px;" alt="DOCO® Jacquard Weave Leash">
										<!-- <img class="hover-img" src="{{url('Front/img/2c.jpg')}}" style="width:201px;height:150px;" alt="DOCO® Jacquard Weave Leash"> -->
									</a>
								</div>
								<div class="product-action-1">
									<a aria-label="Quick View" href="#" class="action-btn small hover-up js-quick-view-button" data-url="https://docopet.kruzpetz.com/ajax/quick-view/10536"><i class="far fa-eye"></i></a>
									<a aria-label="Add To Wishlist" href="#" class="action-btn small hover-up js-add-to-wishlist-button" data-url="https://docopet.kruzpetz.com/wishlist/10536"><i class="far fa-heart"></i></a>
									<a aria-label="Add To Compare" href="#" class="action-btn small hover-up js-add-to-compare-button" data-url="https://docopet.kruzpetz.com/compare/10536"><i class="fas fa-exchange-alt"></i></a>
								</div>
								<div class="product-badges product-badges-position product-badges-mrg">
								</div>
							</div>
							<div class="product-content-wrap">
								<h2 class="text-truncate"><a href="" title="DOCO® Jacquard Weave Leash">The Winner...</a></h2>
								<div class="rating_wrap">
									<div class="rating">
										<div class="product_rate" style="width: 0%"></div>
									</div>
									<span class="rating_num">(0)</span>
								</div>



								<div class="product-price">
									<span>$5.90</span>
								</div>


							</div>
						</div>
						<div class="product-cart-wrap small hover-up p-10">
							<div class="product-img-action-wrap">
								<div class="product-img product-img-zoom">
									<a href="">
										<img class="default-img" src="{{url('Front/img/dis2.jpg')}}" style="width:201px;height:150px;" alt="DOCO® 4ft Martini Bean Nylon Dog Leash">
										<!-- <img class="hover-img" src="{{url('Front/img/dis2.jpg')}}" style="width:201px;height:150px;" alt="DOCO® 4ft Martini Bean Nylon Dog Leash"> -->
									</a>
								</div>
								<div class="product-action-1">
									<a aria-label="Quick View" href="#" class="action-btn small hover-up js-quick-view-button" data-url="https://docopet.kruzpetz.com/ajax/quick-view/10519"><i class="far fa-eye"></i></a>
									<a aria-label="Add To Wishlist" href="#" class="action-btn small hover-up js-add-to-wishlist-button" data-url="https://docopet.kruzpetz.com/wishlist/10519"><i class="far fa-heart"></i></a>
									<a aria-label="Add To Compare" href="#" class="action-btn small hover-up js-add-to-compare-button" data-url="https://docopet.kruzpetz.com/compare/10519"><i class="fas fa-exchange-alt"></i></a>
								</div>
								<div class="product-badges product-badges-position product-badges-mrg">
								</div>
							</div>
							<div class="product-content-wrap">
								<h2 class="text-truncate"><a href="https://docopet.kruzpetz.com/products/doco-4ft-martini-bean-nylon-dog-leash"  title="DOCO® 4ft Martini Bean Nylon Dog Leash">Ultra HZ Wa...</a></h2>
								<div class="rating_wrap">
									<div class="rating">
										<div class="product_rate" style="width: 0%"></div>
									</div>
									<span class="rating_num">(0)</span>
								</div>



								<div class="product-price">
									<span>$63.30</span>
								</div>


							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- Start Blog Area -->
		<section class="blog-area">
			<div class="container">
				<div class="row justify-content-center">
					<div class="section-title style-1">
						<h2>Visit Our Blog</h2>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-6" style="padding-left:unset;">
						<div class="single-blog">
							<div class="row align-items-center">
								<div class="col-lg-12 col-xl-4 pr-0">
									<div class="blog-img">
										<a href="blog-details.html">
											<img class="border-radius-10" style="width:200px;height:133px;" src="{{url('Front/img/blog1.jpg')}}" alt="Blog">
										</a>
									</div>
								</div>
								<div class="col-lg-12 col-xl-8 pl-0">
									<div class="blog-text">
										<h3>
											<a href="blog-details.html">The Recipe from a Winemaker’s Restaurent</a>
										</h3>
										<span>
											<i class="fa fa-calendar"></i>
											07 April 2024
										</span>
										<a class="read-more" href="blog-details.html">
											Continue
											<i class="flaticon-right-arrow"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6" style="padding-left:unset;">
						<div class="single-blog">
							<div class="row align-items-center">
								<div class="col-lg-12 col-xl-4 pr-0">
									<div class="blog-img">
										<a href="blog-details.html">
											<img class="border-radius-10" style="width:200px;height:133px;" src="{{url('Front/img/2.jpg')}}" alt="Blog">
										</a>
									</div>
								</div>
								<div class="col-lg-12 col-xl-8 pl-0">
									<div class="blog-text">
										<h3>
											<a href="blog-details.html">The Different taste of Wines Collection</a>
										</h3>
										<span>
											<i class="fa fa-calendar"></i>
											07 April 2024
										</span>
										<a class="read-more" href="blog-details.html">
											Continue
											<i class="flaticon-right-arrow"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6" style="padding-left:unset;">
						<div class="single-blog">
							<div class="row align-items-center">
								<div class="col-lg-12 col-xl-4 pr-0">
									<div class="blog-img">
										<a href="blog-details.html">
											<img class="border-radius-10" style="width:200px;height:133px;" src="{{url('Front/img/blog5.jpg')}}" alt="Blog">
										</a>
									</div>
								</div>
								<div class="col-lg-12 col-xl-8 pl-0">
									<div class="blog-text">
										<h3>
											<a href="blog-details.html">Bruce Neyar of  Neyars Vineyard Collection</a>
										</h3>
										<span>
											<i class="fa fa-calendar"></i>
											07 April 2024
										</span>
										<a class="read-more" href="blog-details.html">
											Continue
											<i class="flaticon-right-arrow"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6" style="padding-left:unset;">
						<div class="single-blog">
							<div class="row align-items-center">
								<div class="col-lg-12 col-xl-4 pr-0">
									<div class="blog-img">
										<a href="blog-details.html">
											<img class="border-radius-10" style="width:200px;height:133px;" src="{{url('Front/img/blog4.jpg')}}" alt="Blog">
										</a>
									</div>
								</div>
								<div class="col-lg-12 col-xl-8 pl-0">
									<div class="blog-text">
										<h3>
											<a href="blog-details.html">William Shatner’s New Wine Enterprise</a>
										</h3>
										<span>
											<i class="fa fa-calendar"></i>
											07 April 2024
										</span>
										<a class="read-more" href="blog-details.html">
											Continue
											<i class="flaticon-right-arrow"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Blog Area -->

		<!-- Start Start Subscribe area -->
		<section class="newsletter bg-brand p-30 text-white wow fadeIn animated" style="background-color: #993350 !important;">
			<div class="container" style="background-color: #993350 !important;">
				<div class="row align-items-center">
					<div class="col-lg-7 mb-md-3 mb-lg-0">
						<div class="row align-items-center">
							<div class="col flex-horizontal-center">
								<img class="icon-email" src="https://docopet.kruzpetz.com/themes/wowy/images/icons/icon-email.svg" alt="icon">
								<h4 class="font-size-20 mb-0 ml-3" style="font-size:18px;">Sign up to Newsletter</h4>
							</div>
							<div class="col my-4 my-md-0">
								<h5 class="font-size-15 ml-4 mb-0" style="font-size:14px;">...and receive $25 coupon for first shopping.</h5>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<form class="newsletter-form" method="post" action="">
							<input type="hidden" name="_token" value="bRVXaAKrPs2i2NV9qAHMlVIxDcl0GwMk6VRWYEbH" autocomplete="off">
							<div class="form-subcriber d-flex wow fadeIn animated ">
								<input type="email" name="email" class="form-control bg-white font-small" placeholder="Enter your email">
								<button class="btn bg-dark text-white" type="submit">Subscribe</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

@include('front.footer')
