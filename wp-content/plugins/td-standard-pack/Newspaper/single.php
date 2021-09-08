<?php

load_template( TDC_PATH_LEGACY_COMMON . '/wp_booster/td_single_template_vars.php', true );

get_header();

global $loop_module_id, $loop_sidebar_position, $post, $td_sidebar_position;

$td_mod_single = new td_module_single_base($post);
?>
<div class="piti-content-wrap section section-first post-template">
	<div class="container">
		<div class="row">
			<div class="col-md-8" role="main">
				<?php
				require_once(TDSP_THEME_PATH . '/loop-single.php');
				comments_template('', true);
				?>
				<?php echo $td_mod_single->related_posts(); ?>
			</div>
			<div class="col-md-4 td-main-sidebar" role="complementary">
				<?php get_sidebar(); ?>
			</div>
		</div> <!-- /.td-pb-row -->
		<!-- <div class="row">
			
		</div> -->
	</div> <!-- /.td-container -->
</div> <!-- /.td-main-content-wrap -->
<div class="section section-blue h-banner3"> <div class="h-banner3-wrapper"> <div class="container"> <div class="row h-banner3-content-inner"> <div class="col-md-8"> <figure><figure><img class="img-fluid h-banner3-logo" src="/fptecontract/wp-content/themes/Newspaper/fptecontract/img/home/logo-banner3.png" alt="" data-aos="fade-up" data-aos-delay="100"></figure></figure> <h1 class="p-title" data-aos="fade-up" data-aos-delay="100">Tiên phong giải pháp số hoá doanh nghiệp</h1> <a href="#" data-aos="fade-up" data-aos-delay="100"><span class="p-icon-small icprdborder"></span>Xem chi tiết</a> </div> </div> </div> </div> </div>
<?php

get_footer();