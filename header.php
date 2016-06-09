<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage Provoker
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,700&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">

	 <!--[if lt IE 9]>
	 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	 <![endif]-->
	<title><?php typical_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="container">
			<div class="row">
			<div class="col-md-12">
				<div class="col-md-2">
					<a href="http://provoker.com.ua/"><img class="logo" src="http://provoker.com.ua/wp-content/uploads/2016/06/Pr-1.png" alt="Provoker"></a>
				</div>
				<div class="col-md-5">
					<p id="bloginfo" class="site-bloginfo"><?php bloginfo('name'); ?></p>
					<?php $description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</div>
				<div class="col-md-5">
						<p id="d-non" class="re"><?php wd_slider(2); ?></p>
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topnav" aria-expanded="false">
								<span class="sr-only">Меню</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" id="topnav">
							<?php $args = array( 
								'theme_location' => 'top',
								'container'=> false,
						  		'menu_id' => 'top-nav-ul',
						  		'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
								'menu_class' => 'top-menu',
						  		'walker' => new bootstrap_menu(true)		  		
					  			);
								wp_nav_menu($args);
							?>
						</div>
					</nav>
				</div>
				</div>

			</div>
		</div>
	</header>
					<hr class="hr-h">