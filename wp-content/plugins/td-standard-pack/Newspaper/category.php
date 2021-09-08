<?php
/*  ----------------------------------------------------------------------------
    the blog index template
 */

get_header();

global $loop_module_id, $loop_sidebar_position;

$current_category_id = get_query_var('cat');
$current_category_obj = get_category($current_category_id);


//read the per category setting
$tdc_layout = td_util::get_category_option($current_category_id, 'tdc_layout');//swich by RADU A, get_tax_meta($cur_cat_id, 'tdc_layout');
$tdc_sidebar_pos = td_util::get_category_option($current_category_id, 'tdc_sidebar_pos');////swich by RADU A,  get_tax_meta($cur_cat_id, 'tdc_sidebar_pos');

// sidebar position used to align the breadcrumb on sidebar left + sidebar first on mobile issue
$td_sidebar_position = '';
if($loop_sidebar_position == 'sidebar_left') {
    $td_sidebar_position = 'td-sidebar-left';
}

//set the template id, used to get the template specific settings
$template_id = 'category';

//prepare the loop variables

$loop_module_id = td_util::get_option('tds_' . $template_id . '_page_layout', 1); //module 1 is default
$loop_sidebar_position = td_util::get_option('tds_' . $template_id . '_sidebar_pos'); //sidebar right is default (empty)

//override the category global template with the category specific settings
if (!empty($tdc_layout)) {
    $loop_module_id = $tdc_layout;
}

if (!empty($tdc_sidebar_pos)) {
    $loop_sidebar_position = $tdc_sidebar_pos;
}

// sidebar position used to align the breadcrumb on sidebar left + sidebar first on mobile issue
$td_sidebar_position = '';
if($loop_sidebar_position == 'sidebar_left') {
    $td_sidebar_position = 'td-sidebar-left';
}

// make the category pulldown filter list to be equal
td_js_buffer::add_to_footer (
    'jQuery().ready(function() {' . "\r\n" .
    'var pulldown_size = jQuery(".td-category-pulldown-filter:first").width();' . "\r\n" .
    'if (pulldown_size > 113) { jQuery(".td-category-pulldown-filter .td-pulldown-filter-list").css({"min-width": pulldown_size, "border-top": "1px solid #444"}); }' . "\r\n" .
    '});'
);

?>

<?php td_api_category_template::_helper_show_category_template() ?>
<?php td_api_category_top_posts_style::_helper_show_category_top_posts_style() ?>

<div class="piti-content-wrap section post-template">
	<div class="container">
		<div class="row">
			<div class="col-md-8" role="main">
				 <?php
					load_template( TDSP_THEME_PATH . '/loop.php', true);

					echo td_page_generator::get_pagination();
				?>
			</div>
			<div class="col-md-4 td-main-sidebar" role="complementary">
				<?php get_sidebar(); ?>
			</div>
		</div> <!-- /.td-pb-row -->
	</div> <!-- /.td-container -->
</div> <!-- /.td-main-content-wrap -->
<div class="section section-gray h-standard">
   <div class="container">
      <div class="row h-standard-content-inner">
         <div class="col-md-5 col-sm-5 h-standard-content-inner-wrapper col-xs-12">
            <figure>
               <figure><img class="img-fluid" src="/fptecontract/wp-content/themes/Newspaper/fptecontract/img/home/standard-img.png" alt="" data-aos="fade-up" data-aos-delay="100"></figure>
            </figure>
         </div>
         <div class="col-md-7 col-sm-7 h-standard-content-inner-wrapper col-xs-12">
            <h1 class="p-title" data-aos="fade-up" data-aos-delay="100">Đáp ứng tiêu chuẩn pháp lý và kỹ thuật về chữ ký số tại Việt Nam</h1>
            <div class="h-standard-des" data-aos="fade-up" data-aos-delay="100">
               <div class="h-standard-des-row">
                  <div class="h-standard-icon-wrapper">
                     <div class="p-icon-small icpchecklist"></div>
                  </div>
                  <div class="h-standard-des-text">Dễ dàng tích hợp chữ ký số CA Cloud</div>
               </div>
               <div class="h-standard-des-row">
                  <div class="h-standard-icon-wrapper">
                     <div class="p-icon-small icpchecklist"></div>
                  </div>
                  <div class="h-standard-des-text">Đáp ứng mọi thiết bị USB Token</div>
               </div>
               <div class="h-standard-des-row">
                  <div class="h-standard-icon-wrapper">
                     <div class="p-icon-small icpchecklist"></div>
                  </div>
                  <div class="h-standard-des-text">Thiết kế theo quy định pháp lý</div>
               </div>
            </div>
            <div class="h-standard-button"><a href="https://drive.google.com/u/0/uc?id=1hxmwNl4-M72dZCn0LnjlmehWb8XHvCTT&amp;export=download" class="btn h-optimal-btn"><span class="p-icon-small icffdownload"></span>Hướng dẫn cài đặt</a> <a href="https://drive.google.com/u/0/uc?id=1DVhaTvQ-v9n65A2oCTEOPjXUQsCzZ1Vb&amp;export=download" class="btn btn-white"><span class="p-icon-small icffsign"></span>Tải tool ký số</a> </div>
         </div>
      </div>
   </div>
</div>
<div class="section section-blue h-banner3"> <div class="h-banner3-wrapper"> <div class="container"> <div class="row h-banner3-content-inner"> <div class="col-md-8"> <figure><figure><img class="img-fluid h-banner3-logo" src="/fptecontract/wp-content/themes/Newspaper/fptecontract/img/home/logo-banner3.png" alt="" data-aos="fade-up" data-aos-delay="100"></figure></figure> <h1 class="p-title" data-aos="fade-up" data-aos-delay="100">Tiên phong giải pháp số hoá doanh nghiệp</h1> <a href="#" data-aos="fade-up" data-aos-delay="100"><span class="p-icon-small icprdborder"></span>Xem chi tiết</a> </div> </div> </div> </div> </div>
<?php

get_footer();