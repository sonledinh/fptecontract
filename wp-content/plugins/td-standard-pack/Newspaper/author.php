<?php
/*  ----------------------------------------------------------------------------
    the author template
 */

get_header();

//set the template id, used to get the template specific settings
$template_id = 'author';

//prepare the loop variables
global $loop_module_id, $loop_sidebar_position, $part_cur_auth_obj;
$loop_module_id = td_util::get_option('tds_' . $template_id . '_page_layout', 1); //module 1 is default
$loop_sidebar_position = td_util::get_option('tds_' . $template_id . '_sidebar_pos'); //sidebar right is default (empty)

// sidebar position used to align the breadcrumb on sidebar left + sidebar first on mobile issue
$td_sidebar_position = '';
if($loop_sidebar_position == 'sidebar_left') {
	$td_sidebar_position = 'td-sidebar-left';
}
//read the current author object - used by here in title and by /parts/author-header.php
$part_cur_auth_obj = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));


//set the global current author object, used by widgets (author widget)
td_global::$current_author_obj = $part_cur_auth_obj;

?>
<div class="piti-content-wrap section section-first post-template">
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
            <h1 class="p-title" data-aos="fade-up" data-aos-delay="100">????p ???ng ti??u chu???n ph??p l?? v?? k??? thu???t v??? ch??? k?? s??? t???i Vi???t Nam</h1>
            <div class="h-standard-des" data-aos="fade-up" data-aos-delay="100">
               <div class="h-standard-des-row">
                  <div class="h-standard-icon-wrapper">
                     <div class="p-icon-small icpchecklist"></div>
                  </div>
                  <div class="h-standard-des-text">D??? d??ng t??ch h???p ch??? k?? s??? CA Cloud</div>
               </div>
               <div class="h-standard-des-row">
                  <div class="h-standard-icon-wrapper">
                     <div class="p-icon-small icpchecklist"></div>
                  </div>
                  <div class="h-standard-des-text">????p ???ng m???i thi???t b??? USB Token</div>
               </div>
               <div class="h-standard-des-row">
                  <div class="h-standard-icon-wrapper">
                     <div class="p-icon-small icpchecklist"></div>
                  </div>
                  <div class="h-standard-des-text">Thi???t k??? theo quy ?????nh ph??p l??</div>
               </div>
            </div>
            <div class="h-standard-button"><a href="https://drive.google.com/u/0/uc?id=1hxmwNl4-M72dZCn0LnjlmehWb8XHvCTT&amp;export=download" class="btn h-optimal-btn"><span class="p-icon-small icffdownload"></span>H?????ng d???n c??i ?????t</a> <a href="https://drive.google.com/u/0/uc?id=1DVhaTvQ-v9n65A2oCTEOPjXUQsCzZ1Vb&amp;export=download" class="btn btn-white"><span class="p-icon-small icffsign"></span>T???i tool k?? s???</a> </div>
         </div>
      </div>
   </div>
</div>
<div class="section section-blue h-banner3"> <div class="h-banner3-wrapper"> <div class="container"> <div class="row h-banner3-content-inner"> <div class="col-md-8"> <figure><figure><img class="img-fluid h-banner3-logo" src="/fptecontract/wp-content/themes/Newspaper/fptecontract/img/home/logo-banner3.png" alt="" data-aos="fade-up" data-aos-delay="100"></figure></figure> <h1 class="p-title" data-aos="fade-up" data-aos-delay="100">Ti??n phong gi???i ph??p s??? ho?? doanh nghi???p</h1> <a href="#" data-aos="fade-up" data-aos-delay="100"><span class="p-icon-small icprdborder"></span>Xem chi ti???t</a> </div> </div> </div> </div> </div>
<?php
get_footer();
?>