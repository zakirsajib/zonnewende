<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zonnewende
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-bg hidden-xs"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-address">
						<?php $footer_address = get_theme_mod('footer_address');
						if($footer_address):
						echo $footer_address;
						else:?>
						<address>
							<strong>Groepsaccommodatie Zonnewende</strong><br>
							Esscheweg 78<br>
							5271 NA Sint-Michielsgestel<br>
						</address>
						<address> 
							<abbr title="Phone">T.</abbr> 073-5512425<br>
							F. 073-5517120<br>
							E. <a href="mailto:info@zonnewende.ni">info@zonnewende.ni</a>
						</address>
						<?php endif?>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

	<?php
	/**
	 * mapplic. Requires mapplic.
	 *
	 */    
	
if(is_page('plattegrond')): ?>
<script>
$j = jQuery.noConflict();
	$j(document).ready(function() {
		var mapplic = $j('#mapplic').mapplic({
			source: '<?php echo get_template_directory_uri()?>/mapplic/mall2.json',
			height: 1090,
			sidebar: true,
			minimap: true,
			markers: true,
			fullscreen: true,
			hovertip: true,
			developer: true,
			maxscale: 2
		});
	});
</script>
<?php endif;?>
<?php wp_footer(); ?>
</body>
</html>
