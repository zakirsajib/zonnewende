<div class="home-carousel">
	<div class="owl-carousel">
		<?php 
			// https://www.advancedcustomfields.com/resources/gallery/
			$images = get_field('upload_carousel');
			if( $images ):
				foreach( $images as $image ): ?>
					<a href="<?php echo $image['url'] ?>">
				    <div class="project-wrapper">
					    <div class="zoom-icon">
						    <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
						</div>
					    <img class="owl-lazy" data-src="<?php echo $image['sizes']['thumbnail'] ?>" alt="<?php echo $image['alt']; ?>">
					</div>
				</a>
				<?php endforeach;
			endif; ?>
	</div>
</div>