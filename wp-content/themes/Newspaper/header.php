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
	
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/fptecontract/css/support.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/fptecontract/css/slick-theme.min.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/fptecontract/css/slick.min.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/fptecontract/css/bread_crum.css' ?>">
	
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

<body <?php body_class('tagdiv-small-theme') ?> itemscope="itemscope" itemtype="https://schema.org/WebPage">

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
				<img class="img-fluid vi-flag flag-pit" src="http://econtract.fpt.com.vn/wp-content/uploads/2020/06/vn.png" alt="">
				<ul class="nav navbar-nav navbar-left">
					<li><a href="/ho-tro/">Hỗ trợ</a></li>
					<li><a href="/tin-tuc/">Tin tức</a></li>
					<li><a href="/lien-he/">Liên hệ</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://econtract.fpt.com.vn/app/login" target="_blank">Đăng nhập</a></li>
                    <li><a href="https://demo.econtract.fpt.com.vn/app/register" class="btn" target="_blank">Dùng thử</a></li>
                </ul>
            </div>
        </div>
    </header>