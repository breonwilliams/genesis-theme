<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta name="viewport" content="width=device-width">

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!--wordpress head-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		
		
		
		
		
			<?php do_action('before'); ?>
		<header id="site-header" role="banner">
			<div class="header-top-area">
				<div class="container">
					<div class="row">
						<!-- header-top-left start -->
						<div class="col-xs-6">
							<div class="header-top-left">
								<?php if (is_active_sidebar('topheader-left')) { ?>
									<div class="pull-left">
										<?php dynamic_sidebar('topheader-left'); ?>
									</div>
									<div class="clearfix"></div>
								<?php } // endif; ?>
							</div>
						</div>
						<!-- header-top-left end -->
						<!-- header-top-right start -->
						<div class="col-xs-6">
							<?php if (is_active_sidebar('topheader-right')) { ?>
								<div class="pull-right">
									<?php dynamic_sidebar('topheader-right'); ?>
								</div>
								<div class="clearfix"></div>
							<?php } // endif; ?>

						</div>
						<!-- header-top-right end -->
					</div>
				</div>
			</div>

			<div class="header-mid-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<?php if ( get_theme_mod( 'm2_logo' ) ) : ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
									<img src="<?php echo get_theme_mod( 'm2_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
								</a>
							<?php else : ?>

								<h1 class="site-title-heading">
									<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
								</h1>
							<?php endif; ?>
							<?php if (is_active_sidebar('header-left')) { ?>
								<?php dynamic_sidebar('header-left'); ?>
								<div class="clearfix"></div>
							<?php } // endif; ?>
						</div>

						<div class="col-sm-6">
							<?php if (is_active_sidebar('header-right')) { ?>
								<?php dynamic_sidebar('header-right'); ?>
								<div class="clearfix"></div>
							<?php } // endif; ?>
						</div>
					</div>
				</div>
			</div>

			<!--.main-navigation-->

			<?php
			$customhead = get_post_meta( $post->ID, 'meta_box_slider_embed', true );
			if ( $customhead ) {
				?>

				<nav class="navbar navbar-custom yamm nav-overlay" role="affix">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
								<span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

						</div>

						<div class="collapse navbar-collapse navbar-primary-collapse">
							<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
							<form class="navbar-form navbar-right" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
								<div class="input-group">
									<input type="search" class="form-control pull-right" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'bootstrap-basic'); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label', 'bootstrap-basic'); ?>">
						<span class="input-group-btn">
							<button type="reset" class="btn btn-red">
								<span class="glyphicon glyphicon-remove">
									<span class="sr-only">Close</span>
								</span>
							</button>
							<button type="submit" class="btn btn-red">
								<span class="glyphicon glyphicon-search">
									<span class="sr-only"><?php esc_html_e('Search', 'bootstrap-basic'); ?></span>
								</span>
							</button>
						</span>
								</div>
							</form>
						</div><!--.navbar-collapse-->
					</div>
				</nav>
				<?php full_above_content_area(); ?>

				<?php
			} else { ?>

				<nav class="navbar navbar-custom yamm" role="affix">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
								<span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

						</div>

						<div class="collapse navbar-collapse navbar-primary-collapse">
							<?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?>
							<form class="navbar-form navbar-right" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
								<div class="input-group">
									<input type="search" class="form-control pull-right" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'bootstrap-basic'); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label', 'bootstrap-basic'); ?>">
						<span class="input-group-btn">
							<button type="reset" class="btn btn-red">
								<span class="glyphicon glyphicon-remove">
									<span class="sr-only">Close</span>
								</span>
							</button>
							<button type="submit" class="btn btn-red">
								<span class="glyphicon glyphicon-search">
									<span class="sr-only"><?php esc_html_e('Search', 'bootstrap-basic'); ?></span>
								</span>
							</button>
						</span>
								</div>
							</form>
						</div><!--.navbar-collapse-->
					</div>
				</nav>

			<?php } ?>
		</header>
		<?php the_breadcrumb(); ?>

			
			<div class="fluid-wrap">
			<div id="content" class="row-with-vspace site-content">