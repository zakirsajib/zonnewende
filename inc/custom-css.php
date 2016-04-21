<?php
/**
 * Custom CSS for wp_head
 */
function zonnewende_custom_css() {
	
	$footer_bg = get_theme_mod('background_img_footer');
	
?>
<style>
	.footer-bg{
		background-image: url(<?php echo esc_html($footer_bg)?>);
	}

</style>
<?php
}

add_action('wp_head', 'zonnewende_custom_css');

?>
