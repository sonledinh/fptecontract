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
</head>

<body>
    <div class="td-main-content-wrap td-container-wrap error404">
        <div class="td-container">
            <div class="td-pb-row">
                <div class="td-pb-span12">
                    <div class="td-404-title">
                        <?php esc_html_e('Ooops... Error 404', 'newspaper'); ?>
                    </div>

                    <div class="td-404-sub-title">
                        <?php esc_html_e('Sorry, but the page you are looking for doesn\'t exist.', 'newspaper'); ?>
                    </div>

                    <div class="td-404-sub-sub-title">
                        <?php esc_html_e('You can go to the', 'newspaper'); ?>
                        <a href="<?php echo esc_url(home_url( '/' )); ?>"><?php esc_html_e('HOMEPAGE', 'newspaper'); ?></a>
                    </div>
                </div>
            </div>
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