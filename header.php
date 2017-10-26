<!-- <?php
    require get_template_directory() . '/webmaster/params.php';
?> -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta id="viewport" name="viewport" content="width=device-width, user-scalable=0, initial-scale=1">

    <meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


    <link rel="shortcut icon" href="/wp-content/themes/wp_theme_99papers/fav/favicon.ico">
    <link rel="icon" type="image/png" href="/wp-content/themes/wp_theme_99papers/fav/99P_Favicon_Retina.png" sizes="32x32" />
    <link rel="icon" href="/wp-content/themes/wp_theme_99papers/fav/99P_Favicon_Retina.png" type="image/png" sizes="16x16" />
    <link rel="shortcut icon" href="/wp-content/themes/wp_theme_99papers/fav/99P_Favicon_Retina.png" type="image/png" sizes="16x16" />
    <meta name="theme-color" content="#2f505a">

	<link rel="stylesheet" href="/wp-content/themes/wp_theme_99papers/style.css?v=1" type="text/css" >
    <link rel="stylesheet" href="/wp-content/themes/wp_theme_99papers/home.css?v=1" type="text/css">
    <link rel="stylesheet" href="/wp-content/themes/wp_theme_99papers/calculator.css" type="text/css">

    <?php if(strpos($_SERVER['HTTP_USER_AGENT'],"iPhone")){ ?>
        <link rel="stylesheet" href="/wp-content/themes/wp_theme_99papers/iphone.css" type="text/css">
    <?php } ?>
    <script type="text/javascript">var eduRid = <?php echo $rid ?>;</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<div class="menu">
	<div class="app-menu">
		<div id="user">
			<p>Welcome, Guest</p>
		</div>
		<?php
		wp_nav_menu( array(
			'menu_class'     => 'menu-tabs-ul',
			'theme_location' => 'primary',
//			'menu_id'        => 'primary-menu'
		) );
		?>
	</div>
</div>
<div id="page" class="site">
	<header id="masthead" class="main-page-header">
		<div class="header-content">

			<div class="logo">
				<img src="/wp-content/themes/wp_theme_99papers/img/sitecom.png" onclick="location.href='/';"
				     alt="99papers logo">
			</div>

			<div  class="info">
				<img src="/wp-content/themes/wp_theme_99papers/img/Tel1.png">
			</div>
            <div  class="info none-info">
                <img src="/wp-content/themes/wp_theme_99papers/img/Tel2.png">
            </div>
            <div class="header-btns">
				<div class="inquiry" data-name="inqury" data-class="header-btn header-btn--inquiry"></div>
 				<div class="order" data-name="order" data-class="header-btn header-btn--order"></div>
            </div>
			<div class="manage-orders" onclick="location.href='/dashboard.html';">
				<img class="manage-orders__icon" src="/wp-content/themes/wp_theme_99papers/img/myorders-icon.png" alt="Orders icon" title="Click here to open your orders">
				<p><div class="dashboard" data-name="" data-class="manage-orders">my orders</div></p>
			</div>
		</div>
		<div class="main-block">
			<div class="main-block-content-left">
				<h1 class="main-text" id="popup-show"><span class="main-text_green">Site Slogan<br> goes her</span></h1>
				<p class="main-text-smaller">Site second slogan</p>
				<div class="call-icon-mobile">
				</div>

				<div class="guarantee-icons">
					<img src="/wp-content/themes/wp_theme_99papers/img/guarantee-icon-1.png" alt="plagiarism-free" title="100% Plagiarism-Free">
					<img src="/wp-content/themes/wp_theme_99papers/img/guarantee-icon-2.png" alt="money back guarantee" title="100% Money Back Guarantee">
					<img src="/wp-content/themes/wp_theme_99papers/img/guarantee-icon-3.png" alt="privacy" title="100% Privacy Guarantee">
				</div>
                <div class="button-container">
					<div class="inquiry" data-name="Order now!" data-class="order-button main-order header-btn--order"></div>
 					<div class="order" data-name="INQUIRY" data-class="order-button second-order header-btn--inquiry"></div>
                </div>

			</div>
			<div class="main-block-content-right">
                <!-- <div class="ecs">
                </div> -->
				<div class="calc-sm" data-title="" data-title-discount=""></div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
