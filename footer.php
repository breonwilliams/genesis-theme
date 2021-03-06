<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

			</div><!--.site-content-->
</div><!-- main content container -->
<?php full_below_content_area(); ?>
			
			<footer id="site-footer" role="contentinfo">
				<div class="footer-section pad-50">
					<div class="container">
						<div id="footer-row" class="row site-footer">
							<?php get_sidebar('footerone'); ?>
							<?php get_sidebar('footertwo'); ?>
							<?php get_sidebar('footerthree'); ?>
						</div>
					</div>
				</div>

				<div class="copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-6 footer-left padtop-10">
								<?php
								$fms_copyright = get_theme_mod( 'copyright_textbox', '' );
								if($fms_copyright) { ?>
									<small>&copy; <?php echo date('Y'); ?> <?php echo $fms_copyright; ?></small>
								<?php } else { ?>
									<small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small>
								<?php } ?>
								<?php dynamic_sidebar('footer-left'); ?>
							</div>
							<div class="col-md-6 footer-right text-right">
								<?php wp_nav_menu(array('theme_location' => 'footer', 'container' => false, 'items_wrap' => '<ul class="foot-menu">%3$s</ul>')); ?>
								<div class="clearfix"></div>
								<?php dynamic_sidebar('footer-right'); ?>
							</div>
						</div>
					</div>
				</div>


			</footer>


		<!--wordpress footer-->
		<?php wp_footer(); ?> 
	</body>
</html>