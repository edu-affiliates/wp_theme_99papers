<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta id="viewport" name="viewport" content="width=device-width, user-scalable=0, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>?v=71" type="text/css" >



<div class="menu">
	<div class="app-menu">
		<div id="user">
			<p>Welcome, Guest</p>
		</div>
		<?php
		wp_nav_menu( array(
			'menu_class'=>'menu-tabs-ul',
			'theme_location'=>'primary',
//			'menu_id' => 'primary-menu '
		) );
		?>
	</div>
</div>
<div id="page2" class="site">
	<div class="menu-icon"></div>
	<header id="masthead" class="pricing-header">
		<div class="header-content">
			<div class="logo"></div>
			<div  class="info">
				<div class="call-icon">
				</div>
			</div>
            <div class="manage-orders">
                <p>MANAGE ORDERS</p>
            </div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
