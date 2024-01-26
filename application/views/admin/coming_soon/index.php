<?php
	$setting = array();
	foreach($contact as $c):
		$setting[$c['name']] = $c['value'];
	endforeach;
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="HADONO" />
    <meta name="keywords" content="Hadono " />
	<meta name="theme-color" content="#47626F">
    <!--====== TITLE TAG ======-->
    <title><?=$setting['company_name']?> | <?=$setting['tagline']?></title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="<?=base_url()?>assets/coming_soon/css/normalize.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/coming_soon/css/animate.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/coming_soon/css/magnific-popup.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/coming_soon/css/typed.css">
    <link href="<?=base_url()?>assets/coming_soon/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/coming_soon/css/font-awesome.min.css" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="<?=base_url()?>assets/coming_soon/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/coming_soon/css/responsive.css" rel="stylesheet">

    <script src=""></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body class="transparent-layer fullscreen-perticle">

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner">
            <img src="<?=base_url()?>assets/coming_soon/img/loading.svg" alt="">
        </div>
    </div>

    <!--START MAIN AREA-->
    <div class="main-area" id="home">
        <div class="main-area-bg"></div>
        <div id="particles-js"></div>

        <!--WELCOME AREA CONTENT-->
        <div class="welcome-text-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 col-sm-12 col-xs-12">
                        <div class="welcome-text text-center">
                            <div class="clock-countdown">
                                <div class="site-config" data-date="08/28/2019 00:00:00" data-date-timezone="+0"></div>
                                <div class="days-counter">
                                    <div class="digit">
                                        <span class="days">00</span>
                                        <span class="txt">days</span>
                                    </div>
                                </div>
                                <div class="hour-counter">
                                    <div class="border"></div>
                                    <span class="hours">00</span><span class="normal">H</span>
                                    <span class="minutes">00</span><span class="normal">MN</span>
                                    <span class="seconds">36</span><span class="normal">S</span>
                                </div>
                            </div>
                            <h3>We Are</h3>
                            <h1 class="visible-xs">Coming Soon</h1>
                            <h1 class="hidden-xs cd-headline clip is-full-width">
                                <!--<span class="hero-text">Coming</span>-->
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">Coming Soon</b>
                                    <b>Be Ready To</b>
                                    <b>Connected With Us</b>
                                </span>
                            </h1>
                            <div class="subscriber-form">
                                <!-- <form action="#">
                                    <input type="email" name="email" id="email" placeholder="Enter Your Email">
                                    <button type="submit">Get Notify</button>
                                </form>-->
                                <form id="mc-form">
                                    <label class="mt10" for="mc-email"></label>
                                    <input type="email" id="mc-email" placeholder="Enter Your Email">
                                    <button type="submit" class="plus-btn">Get Notify</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--WELCOME AREA CONTENT END-->

        <!--LEFT CONTACT CONTENT-->
        <div class="right-details-content">
            <div class="push-content-close"><i class="fa fa-close"></i></div>
            <div class="contact-address-and-details section-padding">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="area-title title-inverse">
                            <div class="title-box"></div>
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                </div>
                <div class="contact-details">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="logo text-center">
                                <img src="<?=base_url()?>assets/coming_soon/img/logo_black.png" alt="">
								<br/><br/>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="single-contact">
                                <h4>Address:</h4>
                                <p>	<?=str_replace("\n","<br/>",$setting['address1'])?></p>
                                <?php if(!empty($setting['address2'])): ?>
									<br/><p><?=str_replace("\n","<br/>",$setting['address2'])?></p>
								<?php endif; ?>
                            </div>
                            <div class="single-contact">
                                <h4>Email:</h4>
                                <p><a href="mailto:<?=$setting['email1']?>"><?=$setting['email1']?></a></p>
								<?php if(!empty($setting['email2'])): ?>
									<p><a href="mailto:<?=$setting['email2']?>"><?=$setting['email2']?></a></p>
								<?php endif; ?>
                            </div>
                            
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="single-contact">
                                <h4>Website:</h4>
                                <p><a href="https://<?=$setting['website1']?>"><?=$setting['website1']?></a></p>
								<?php if(!empty($setting['website2'])): ?>
									<p><a href="https://<?=$setting['website2']?>"><?=$setting['website2']?></a></p>
								<?php endif; ?>
                            </div>
                            <div class="single-contact">
                                <h4>Phone:</h4>
                                <?php if(!empty($setting['office1'])): ?>
									<p><?=$setting['office1']?></p>
								<?php endif; ?>
								<?php if(!empty($setting['office2'])): ?>
									<p><?=$setting['office2']?></p>
								<?php endif; ?>
								<?php if(!empty($setting['mobile1'])): ?>
									<p><?=$setting['mobile1']?></p>
								<?php endif; ?>
								<?php if(!empty($setting['mobile2'])): ?>
									<p><?=$setting['mobile2']?></p>
								<?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <p class="contact-hidding">Do You Need To Send A Personal Query ? Send Query Now !</p>
                </div>
                <div class="contact-form-area">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <h4>Write Your Messge Here</h4>
                            <div class="contact-form">
                                <form action="" id="contact-form" method="post">
                                    <div class="form-group" id="name-field">
                                        <div class="form-input">
                                            <input type="text" class="form-control" id="form-name" name="form-name" placeholder="Name.." required>
                                        </div>
                                    </div>
                                    <div class="form-group" id="email-field">
                                        <div class="form-input">
                                            <input type="email" class="form-control" id="form-email" name="form-email" placeholder="Email.." required>
                                        </div>
                                    </div>
                                    <div class="form-group" id="phone-field">
                                        <div class="form-input">
                                            <input type="text" class="form-control" id="form-phone" name="form-phone" placeholder="Phone..">
                                        </div>
                                    </div>
                                    <div class="form-group" id="message-field">
                                        <div class="form-input">
                                            <textarea class="form-control" rows="6" id="form-message" name="form-message" placeholder="Your Message Here..." required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit">Send Message <i class="fa fa-paper-plane-o"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--LEFT CONTACT CONTENT END-->
    </div>
    <!--END MAIN AREA-->

    <!--====== SCRIPTS JS ======-->
     <!--====== SCRIPTS JS ======-->
    <script src="<?=base_url();?>/assets/coming_soon/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?=base_url();?>/assets/coming_soon/js/vendor/bootstrap.min.js"></script>

    <!--====== PLUGINS JS ======-->
    <script src="<?=base_url();?>/assets/coming_soon/js/vendor/jquery.easing.1.3.js"></script>
    <script src="<?=base_url();?>/assets/coming_soon/js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?=base_url();?>/assets/coming_soon/js/typed.js"></script>
    <script src="<?=base_url();?>/assets/coming_soon/js/jquery.downCount.js"></script>
    <script src="<?=base_url();?>/assets/coming_soon/js/jquery.nicescroll.min.js"></script>
    <script src="<?=base_url();?>/assets/coming_soon/js/jquery.magnific-popup.min.js"></script>
    <script src="<?=base_url();?>/assets/coming_soon/js/jquery.ajaxchimp.js"></script>
    <script src="<?=base_url();?>/assets/coming_soon/js/contact-form.js"></script>
    <script src="<?=base_url();?>/assets/coming_soon/js/perticle/particles.min.js"></script>
    <script src="<?=base_url();?>/assets/coming_soon/js/perticle/app.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="<?=base_url();?>/assets/coming_soon/js/main.js"></script>
</body>

</html>
