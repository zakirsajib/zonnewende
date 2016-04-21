<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zonnewende
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="col-md-4 widget-area" role="complementary">
	<?php if(is_page('contact')):?>
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	<?php elseif(is_page('maaltijdverzorging')):?>
		<?php dynamic_sidebar( 'maaltijdverzorging-sidebar' ); ?>
	<?php else:?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php endif?>
</aside><!-- #secondary -->
