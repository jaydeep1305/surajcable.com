<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Suraj Cable Network</title>
	<link rel="icon" href="<?=base_url()?>assets/images/scn_favicon.png">
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/animations.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/regular.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/brands.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/solid.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/shop.css" class="color-switcher-link">
	<script src="<?=base_url()?>assets/js/vendor/modernizr-custom.js"></script>
	<!--[if lt IE 9]>
		<script src="<?=base_url()?>assets/js/vendor/html5shiv.min.js"></script>
		<script src="<?=base_url()?>assets/js/vendor/respond.min.js"></script>
		<script src="<?=base_url()?>assets/js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]

	<div class="preloader">
		<div class="preloader_image"></div>
	</div> -->

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="https://html.modernwebtemplates.com/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>


	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="register_modal">
		<div class="container">
			<div class="row c-gutter-0 modal_register_form align-items-center">
				<div class="ls col-12 col-sm-6 menu-left">
					<form class="contact-form sign-in c-mb-10 c-gutter-10" method="post" action="https://html.modernwebtemplates.com/">
						<div class="row">
							<div class="col-sm-12">
								<h5><span class="color-main">Sign Up</span> / Sign In</h5>
								<div class="divider-sm-0 divider-md-30"></div>
								<div class="form-group has-placeholder">
									<label for="signupname">Full Name <span class="required">*</span></label>
									<input type="text" aria-required="true" size="30" value="" name="name" id="signupname" class="form-control" placeholder="Full Name">
								</div>
								<div class="form-group has-placeholder">
									<label for="signuppassword">Password<span class="required">*</span></label>
									<input type="password" aria-required="true" size="30" value="" name="password" id="signuppassword" class="form-control" placeholder="Password">
								</div>
								<div class="form-group has-placeholder">
									<label for="signupemail">Email<span class="required">*</span></label>
									<input type="email" aria-required="true" size="30" value="" name="email" id="signupemail" class="form-control" placeholder="Email">
								</div>
								<div>
									<input type="checkbox" class="checkbox" id="signupcheckbox" />
									<label for="signupcheckbox">I agree with all the text in the agreement</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" id="contact_signupform_submit" name="contact_submit" class="btn btn-outline-darkgrey">Email Us</button>
								</div>
							</div>
							<a class="phone_modal_button register_modal close-modal" data-dismiss="modal" aria-label="Close" href="index.html#sign_in_modal"><span aria-hidden="true">I am already Member</span></a>
						</div>
					</form>
				</div>
				<div class="col-12 col-sm-6 d-none d-sm-block menu-right">
					<img src="<?=base_url()?>assets/images/sing-in-modal.jpg" alt="">
				</div>
			</div>
		</div>
	</div>


	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="login_modal">
		<div class="container">
			<div class="row c-gutter-0 modal_login_form align-items-center">
				<div class="ls col-12 col-sm-6 menu-left">
					<form class="contact-form sign-in c-mb-10 c-gutter-10" method="post" action="https://html.modernwebtemplates.com/">
						<div class="row">
							<div class="col-sm-12">
								<h5><span class="color-main">Sign In</span> / Sign Up</h5>
								<div class="divider-sm-0 divider-md-30"></div>
								<div class="form-group has-placeholder">
									<label for="signname">Full Name <span class="required">*</span></label>
									<input type="text" aria-required="true" size="30" value="" name="name" id="signname" class="form-control" placeholder="Full Name">
								</div>
								<div class="form-group has-placeholder">
									<label for="signpassword">Password<span class="required">*</span></label>
									<input type="password" aria-required="true" size="30" value="" name="password" id="signpassword" class="form-control" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" id="contact_signinform_submit" name="contact_submit" class="btn btn-outline-darkgrey">Email Us</button>
								</div>
							</div>
							<a class="register_modal close-modal" data-dismiss="modal" aria-label="Close" href="index.html#register_modal"><span aria-hidden="true">Forgot Password?</span></a>
						</div>
					</form>
				</div>
				<div class="col-12 col-sm-6 d-none d-sm-block menu-right">
					<img src="<?=base_url()?>assets/images/sing-in-modal.jpg" alt="">
				</div>
			</div>
		</div>
	</div>


	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div><!-- eof .modal -->
	<!--noindex--><svg style="display:none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		<defs>


			<symbol id="icon-1" viewBox="0 0 226 32">
				<title>1</title>
				<path d="M18.942 13.058c-0.244-0.244-0.64-0.244-0.884 0l-2.683 2.683-0.808-0.808c-0.244-0.244-0.64-0.244-0.884 0s-0.244 0.64 0 0.884l1.25 1.25c0.122 0.122 0.282 0.183 0.442 0.183s0.32-0.061 0.442-0.183l3.125-3.125c0.244-0.244 0.244-0.64 0-0.884z"></path>
			</symbol>


			<symbol id="icon-2" viewBox="0 0 248 32">
				<title>2</title>
				<path d="M18.942 13.058c-0.244-0.244-0.64-0.244-0.884 0l-2.683 2.683-0.808-0.808c-0.244-0.244-0.64-0.244-0.884 0s-0.244 0.64 0 0.884l1.25 1.25c0.122 0.122 0.282 0.183 0.442 0.183s0.32-0.061 0.442-0.183l3.125-3.125c0.244-0.244 0.244-0.64 0-0.884z"></path>
			</symbol>

			<symbol id="icon-aim" viewBox="0 0 32 32">
				<title>aim</title>
				<path d="M29.776 13.776h-1.393c-0.265-6.424-5.442-11.601-11.866-11.866v-1.393c0-0.286-0.232-0.517-0.517-0.517s-0.517 0.232-0.517 0.517v1.393c-6.424 0.265-11.601 5.442-11.866 11.866h-1.393c-0.286 0-0.517 0.232-0.517 0.517s0.232 0.517 0.517 0.517h1.393c0.265 6.424 5.442 11.601 11.866 11.866v4.806c0 0.286 0.232 0.517 0.517 0.517s0.517-0.232 0.517-0.517v-4.806c6.424-0.265 11.601-5.442 11.866-11.866h1.393c0.286 0 0.517-0.232 0.517-0.517s-0.232-0.517-0.517-0.517zM15.483 25.641c-5.853-0.264-10.567-4.977-10.831-10.831h4.53c0.252 3.359 2.942 6.049 6.301 6.301v4.53zM15.483 20.072c-2.788-0.247-5.014-2.474-5.262-5.262h2.979c0.213 1.156 1.126 2.070 2.283 2.283v2.979zM15.483 16.031c-0.585-0.174-1.046-0.636-1.221-1.221h1.221v1.221zM14.262 13.776c0.174-0.585 0.636-1.046 1.221-1.221v1.221h-1.221zM13.2 13.776h-2.979c0.248-2.788 2.474-5.014 5.262-5.262v2.979h0c-1.156 0.213-2.069 1.126-2.283 2.283zM15.483 7.475c-3.359 0.252-6.049 2.942-6.301 6.301h-4.53c0.264-5.853 4.977-10.567 10.831-10.831v4.53zM16.517 8.514c2.788 0.248 5.014 2.474 5.262 5.262l-2.979 0c-0.213-1.156-1.126-2.070-2.283-2.283v-2.979zM16.517 12.555c0.585 0.174 1.046 0.636 1.221 1.221h-1.221v-1.221zM16.517 14.81h1.221c-0.174 0.585-0.636 1.046-1.221 1.221v-1.221zM18.8 14.81h2.979c-0.247 2.788-2.474 5.014-5.262 5.262v-2.979h-0c1.156-0.213 2.070-1.126 2.283-2.283zM16.517 25.641v-4.53c3.359-0.252 6.049-2.942 6.301-6.301h4.53c-0.264 5.853-4.977 10.567-10.831 10.831zM22.818 13.776c-0.252-3.359-2.942-6.049-6.301-6.301v-4.53c5.853 0.264 10.567 4.977 10.831 10.831h-4.53z"></path>
			</symbol>

		</defs>
	</svg>
	<!--/noindex-->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<!--topline section visible only on small screens|-->

			<!--eof topline-->

			<section class="page_topline s-border ls s-borderbottom s-overlay">
				<div class="container-fluid">
					<div class="row align-items-center">

						<div class="col-lg-12 col-xl-3 text-center text-xl-left">
							<ul>
								<li>
									<p>Connecting Minds Around the World</p>
								</li>

							</ul>
						</div>
						<div class="col-lg-12 col-xl-9 text-center text-xl-right">
							<ul class="top-line-includes-first top-includes">
								<li>
									<p class="address_top"> <i class="ico icon-placeholder"></i> <?= $contact_detail['address1'] ?></p>
								</li>
								<li>
									<p class="email_top"><a href="mailto:surajcablenetwork@gmail.com" style="text-transform:lowercase;"><i class="fa fa-envelope"></i><?= strtolower($contact_detail['email1']) ?></a></p>
								</li>
								<li>
									<p class="phone_number"> <i class="ico icon-icon"></i><a href="tel:805671234"><?= $contact_detail['office1'] ?></a></p>
								</li>
							</ul>
							<!-- <ul class="top-line-includes-second top-includes">
								<li>
									<span>
										<a class="phone_modal_button" href="index.html#sign_in_modal">Login / Sign Up</a>
									</span>
								</li>
							</ul> -->
						</div>
					</div>
				</div>
			</section>

			<!-- header with two Bootstrap columns - left for logo and right for navigation and includes (search, social icons, additional links and buttons etc -->
			<header class="page_header ls justify-nav-end">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-xl-2 col-lg-3 col-md-4 col-11">
							<a href="index.html" class="logo">
								<img src="<?=base_url()?>assets/images/scn_logo.png" alt="">
							</a>
						</div>
						<div class="col-xl-10 col-lg-9 col-md-8 col-1">
							<div class="nav-wrap">

								<!-- main nav start -->
								<nav class="top-nav">
									<ul class="nav sf-menu">


										<li class="<?= ($page=="home")?'active':'' ?>">
											<a href="<?=base_url();?>">Home</a>
										</li>
										<!-- eof Home -->
										
										<li class="<?= ($page=="about")?'active':'' ?>">
											<a href="<?=base_url("about");?>">About (SCN)</a>
										</li>
										<!-- eof about -->
										
										<li class="<?= ($page=="services")?'active':'' ?>">
											<a href="<?=base_url("services");?>">Services</a>
										</li>
										<!-- eof services -->

										<li class="<?= ($page=="packages")?'active':'' ?>">
											<a href="<?=base_url("packages");?>">Packages</a>
										</li>
										<!-- eof Packages -->


										<!-- product 
										<li>
											<a href="">Products</a>
										</li>
										<!-- eof product -->

										<li class="<?= ($page=="contact")?'active':'' ?>">
											<a href="<?=base_url("contact");?>">Contact Us</a>
										</li>
										<!-- eof contacts -->
									</ul>

								</nav>
								<!-- eof main nav -->

								<!--hidding includes on small devices. They are duplicated in topline-->


							</div>
						</div>
					</div>
				</div>
				<!-- header toggler -->
				<span class="toggle_menu"><span></span></span>
			</header>