<?php

td_global::$current_template = 'woo';


get_header();

//set the template id, used to get the template specific settings
$template_id = 'woo';


$loop_sidebar_position = td_util::get_option('tds_' . $template_id . '_sidebar_pos'); //sidebar right is default (empty)



// sidebar position used to align the breadcrumb on sidebar left + sidebar first on mobile issue
$td_sidebar_position = '';
if($loop_sidebar_position == 'sidebar_left') {
	$td_sidebar_position = 'td-sidebar-left';
}

?>
	<div class="td-main-content-wrap td-main-page-wrap">
		<div class="td-container <?php echo $td_sidebar_position; ?>">
			<div class="td-pb-row">				<?php get_sidebar( 'product_filter_sidebar' ); ?> 
				<?php
				switch ($loop_sidebar_position) {
					case 'sidebar_left':
						?>
						<div class="td-pb-span4 td-main-sidebar" role="complementary">
							<div class="td-ss-main-sidebar">
								<?php get_sidebar(); ?>
							</div>
						</div>
						<div class="td-pb-span8 td-main-content <?php echo $td_sidebar_position; ?>-content" role="main">
							<div class="td-ss-main-content">
								<?php									
									//woocommerce_breadcrumb();
									woocommerce_content();
								?>
							</div>
						</div>
						<?php
						break;

					case 'no_sidebar':
						?>
						<div class="td-pb-span12 td-main-content" role="main">
							<div class="td-ss-main-content">
								<?php
									//woocommerce_breadcrumb();
									woocommerce_content();
								?>
							</div>
						</div>
						<?php
						break;


					default:
						?>						<div class="woo-mobile-filter-group">							<?php woocommerce_breadcrumb();?>							<span id="woo-mobile-filter-btn" class="fa fa-arrow-circle-o-down cursor-pointer" aria-hidden="true">Filter</span>						</div>						<div id="woo-mobile-filter">													</div>						<?php if(!is_shop()):?><div class="category-title"><?php echo woocommerce_page_title(); ?></div><?php endif; ?>						<div id="woo-sidebar-filter" class="td-pb-span3 td-main-sidebar woo-sidebar-filter-group" role="complementary">							<div class="js-swap-filter">								<?php dynamic_sidebar('product_filter_sidebar '); ?>							</div>						</div>						<div class="td-pb-span9 td-main-content td-sidebar-left-content" role="main">							<div class="td-ss-main-content">								<?php																		woocommerce_content();																	?>							</div>						</div>
						<?php
						break;
				}?>
			</div>
		</div>
	</div> <!-- /.td-main-content-wrap -->
<script>jQuery.noConflict();	(function( $ ) {		$(function() {			$(".widget-woof,.WOOF_Widget").removeClass("widget");			$( window ).on("load resize",function() {				if($(this).width() <992){					$(".js-swap-filter").hide();					$("#woo-mobile-filter").append($(".js-swap-filter"));				}else{					$(".js-swap-filter").show();					$("#woo-sidebar-filter").append($(".js-swap-filter"));				}			});			$( "#woo-mobile-filter-btn" ).on("click", function() {				$(".js-swap-filter").toggle();			});			// More code using $ as alias to jQuery		});})(jQuery);</script>
<?php
get_footer();
?>