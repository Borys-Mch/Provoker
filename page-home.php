<?php
/**
 * Страница с кастомным шаблоном (page-custom.php)
 * @package WordPress
 * @subpackage Provoker
 * Template Name: Главная страница (не использовать)
 */
get_header(); ?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<table id="d-non">
<tbody>
<tr>
<td width="800"><?php echo do_shortcode('[supsystic-slider id=1 position="center"]') ?></td>
<td width="330"><?php echo do_shortcode('[supsystic-slider id=2 position="center"]') ?></td>
</tr>
</tbody>
</table>
				<?php endwhile; ?>
			</div>
			<div class="col-md-12 w-hp">
				<div class="col-md-6">
					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
					<div id="sidebar1" class="sidebar">
					<?php dynamic_sidebar( 'sidebar1' ); ?>
					<?php endif; ?>
					</div>
				</div>
				<div class="col-md-3">
					<?php if ( is_active_sidebar( 'sidebar2' ) ) : ?>
					<div id="sidebar2" class="sidebar">
					<?php dynamic_sidebar( 'sidebar2' ); ?>
					<?php endif; ?>
					</div>
				</div>
				<div class="col-md-3">
					<?php if ( is_active_sidebar( 'sidebar3' ) ) : ?>
					<div id="sidebar3" class="sidebar">
					<?php dynamic_sidebar( 'sidebar3' ); ?>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>