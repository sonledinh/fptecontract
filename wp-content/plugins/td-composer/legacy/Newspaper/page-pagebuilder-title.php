<!doctype html >
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' );?>" />
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
    <!-- Bootstrap Core CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/fptecontract/css/bootstrap.css' ?>">
	
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(). '/fptecontract/img/favicon.png' ?>" type="image/png" sizes="16x16">

    <!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/fptecontract/css/aos.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/fptecontract/css/main.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/fptecontract/css/custom.css' ?>">

    <!-- Custom Fonts & Icons -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/fptecontract/css/icomoon-social.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/fptecontract/css/font-awesome.min.css' ?>">
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-W5NK7ZJ');</script>
	<!-- End Google Tag Manager -->
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168205593-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-168205593-1');
	</script>
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W5NK7ZJ"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(). '/fptecontract/img/logo.svg' ?>" alt="FPT Econtact"></a>
            </div>
            <div class="collapse navbar-collapse">
				<img class="img-fluid uk-flag flag-pit" src="http://econtract.fpt.com.vn/wp-content/uploads/2020/06/uk.png" alt="">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://econtract.fpt.com.vn/app/login" target="_blank">Log in</a></li>
                    <li><a href="https://demo.econtract.fpt.com.vn/app/register" class="btn" target="_blank">Free Trial</a></li>
                </ul>
            </div>
        </div>
    </header>
	
<?php
	/* Template Name: Home Eng */
	/**
	 * detect the page builder
	 */
	$td_use_page_builder = td_global::is_page_builder_content();
?>

<div class="piti-content-wrap">
	<div class="piti-container">
		<div class="piti-row">
			<div class="piti-main-content" role="main">
				<?php
				if (have_posts()) {
				while ( have_posts() ) : the_post();
				?>
				<div class="td-page-content tagdiv-type">
					<?php
					the_content();
					endwhile; //end loop
					}
					?>
				</div>
			</div>
		</div> <!-- /.piti-row -->
	</div> <!-- /.piti-container -->
</div> <!-- /.piti-content-wrap -->

<!-- Footer -->
<div class="footer">
	<div class="container">
		<div class="row footer-content-wrapper">
			<div class="col-md-5 footer-content-wrapper-inner col-sm-12">
				<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(). '/fptecontract/img/logo-footer.svg' ?>" alt="">
				<div class="footer-content-des">
					<div class="footer-content-des-row">
						<div class="footer-icon-wrapper"><div class="p-icon-small icflocation"></div></div><div class="p-icon-text">22nd floor, Keangnam Landmark 72 Tower, E6 Pham Hung, Nam Tu Liem, Hanoi</div>
					</div>
					<div class="footer-content-des-row">
						<div class="footer-icon-wrapper"><div class="p-icon-small icfmail"></div></div><div class="p-icon-text"><a style="color: #121E28;" href="mailto:FPT.eContract@fpt.com.vn" target=_blank>FPT.eContract@fpt.com.vn</a></div>
					</div>
					<div class="footer-content-des-row">
						<div class="footer-icon-wrapper"><div class="p-icon-small icfphone"></div></div><div class="p-icon-text">0934.453.466 - 0934.583.499</div>
					</div>
				</div>
				<div class="footer-social-wrapper">
					<a href="https://www.facebook.com/FPTInformationSystem" target=_blank><span class="p-icon-medium icffb"></span></a>
					<a href="https://www.youtube.com/channel/UCgZY9iO7EVlphi3eZ4DB_ug" target=_blank><span class="p-icon-medium icfyoutube"></span></a>
					<a href="https://www.youtube.com/channel/UCgZY9iO7EVlphi3eZ4DB_ug" target=_blank><span class="p-icon-medium icfgoogle"></span></a>
				</div>
			</div>
			<div class="col-md-4 footer-content-wrapper-inner footer-not-logo">
			   <div class="col-sm-6 col-xs-6">
					<h4 class="p-title footer-link-title">ABOUT</h4>
					<div class="footer-link-wrapper">
						<a href="/home">Home</a>
						<a href="#">About us</a>
						<a href="#">News</a>
						<a href="http://einvoice.fpt.com.vn/lien-he-hoa-don-dien-tu-fpteinvoice/" target="_blank">Contact</a>
					</div> 
			   </div>
			   <div class="col-sm-6 col-xs-6">
					<h4 class="p-title footer-link-title">SERVICE</h4>
					<div class="footer-link-wrapper">
						<a href="#">Quotation</a>
						<a href="http://einvoice.fpt.com.vn/hoi-dap/" target="_blank">Help</a>
						<a href="https://demo.econtract.fpt.com.vn/app/register" target="_blank">Request Trial</a>
						<a href="https://econtract.fpt.com.vn/app/login" target="_blank">Log in</a>
					</div> 
			   </div>
			</div>
			<div class="col-md-3 footer-content-wrapper-inner footer-not-logo col-sm-4 col-xs-12 footer-content-right">
				<p class="footer-right-des">A product by</p>
				<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(). '/fptecontract/img/home/logo-footer-right.png' ?>" alt="">
				<a href="https://fpt.com.vn/" class="footer-right-cpname" target="_blank">FPT Information System Co., Ltd.</a>
			</div>
		</div>
		<div class="row footer-copy-right">
			<div class="col-md-12">
				<p class="p-center">Copyright © 2020 FPT Information System. All rights reserved</p>
			</div>
		</div>
	</div>
</div>

<div id="showVideo1">
	<div id="showContentVideo1">
		<div class="detail-video-frame embed-responsive embed-responsive-16by9">
			<iframe width="100%" height="465" src="https://www.youtube.com/embed/qbGMXKzBwwo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>
</div>

<div id="showContact">
	<div id="showContactWrap">
		<div id="closeContact"></div>
		<?php echo do_shortcode('[contact-form-7 id="69" title="FormRegis"]'); ?>
		<img class="img-fluid p5 aos-init" src="<?php echo get_stylesheet_directory_uri(). '/fptecontract/img/home/p2.png' ?>" alt="" data-aos="fade-up" data-aos-delay="100">
		<img class="img-fluid p6 aos-init" src="<?php echo get_stylesheet_directory_uri(). '/fptecontract/img/home/p1.png' ?>" alt="" data-aos="fade-up" data-aos-delay="100">
	</div>
</div>

<div id="showSuccess">
	<div id="showSuccessWrap">
		<div id="closeSuccess"></div>
		<img class="img-fluid aos-init" src="<?php echo get_stylesheet_directory_uri(). '/fptecontract/img/sendmailsuccess.png' ?>" alt="" data-aos="fade-up" data-aos-delay="100">
		<h1 class="p-success-title">Cảm ơn bạn, chúng tôi sẽ liên hệ trong thời gian sớm nhất.</h1>
	</div>
</div>

<div class="floating-icon">
	<div><span class="text-img img1">Đăng ký dùng thử</span><span><a class="show-contact"><img class="img-fluid float-img float1" src="<?php echo get_stylesheet_directory_uri(). '/fptecontract/img/icregister.svg' ?>" alt=""></a></span></div>
	<div><span class="text-img img2">Liên hệ</span><span><a href="tel:0934453466"><img class="img-fluid float-img float2" src="<?php echo get_stylesheet_directory_uri(). '/fptecontract/img/icphone.svg' ?>" alt=""></a></span></div>
</div>

<!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>
	window.fbAsyncInit = function() {
	  FB.init({
		xfbml            : true,
		version          : 'v7.0'
	  });
	};

	(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
	fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your customer chat code -->
  <div class="fb-customerchat"
	attribution=setup_tool
	page_id="101523018214570"
logged_in_greeting="Xin chào! FPT.eContract có thể giúp gì cho bạn?"
logged_out_greeting="Xin chào! FPT.eContract có thể giúp gì cho bạn?">
  </div>

<!-- Javascripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(). '/fptecontract/js/jquery-1.9.1.min.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri(). '/fptecontract/js/bootstrap.min.js' ?>"></script>

<!-- Scrolling Nav JavaScript -->
<script src="<?php echo get_stylesheet_directory_uri(). '/fptecontract/js/jquery.easing.min.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri(). '/fptecontract/js/scrolling-nav.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri(). '/fptecontract/js/aos.js' ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri(). '/fptecontract/js/main.js' ?>"></script>

<?php wp_footer(); ?>

</body>
</html>